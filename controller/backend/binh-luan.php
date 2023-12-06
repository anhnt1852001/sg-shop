<?php
require_once APP_PATH . '/model/bl_model.php';
require_once APP_PATH . '/model/tk_model.php';
require_once APP_PATH . '/model/product_model.php';
switch ($action) {
    case 'bl_detail':
        extract(detail());
        break;
    case 'bl_delete':
        extract(delete());
        break;
    default:
        extract(List_bl());
        break;
}



function detail()
{
    extract($_REQUEST);
    $row_ten_sp = sp_select_one([':ma_tai_khoan' => $ma_tai_khoan]);
    $rows_bl_ma_sp = bl_select_all_ma_sp([':ma_tai_khoan' => $ma_tai_khoan]); //lấy các bl theo ma_sp
    return [
        'row_ten_sp' => $row_ten_sp,
        'rows_bl_ma_sp' => $rows_bl_ma_sp,
        'view_name' => 'binh-luan/detail.php'
    ];
}
function delete()
{
    extract($_REQUEST);
    $param = [':ma_bl' => $ma_bl];
    try {
        bl_delete($param);
        $bl = bl_select_all_ma_sp([':ma_tai_khoan' => $ma_tai_khoan]);
        if (count($bl) == 0) {
            header("location:?module=backend&controller=binh-luan&action=List_bl");
        } else {
            header("location:?module=backend&controller=binh-luan&action=bl_detail&ma_tai_khoan=$ma_tai_khoan");
        }
    } catch (PDOException $e) {
        $msg = 'Lỗi không xóa được bl ' . $e->getMessage();
    }
    return [];
}
function List_bl()
{
    $bl = tk_bl_ten_hh([]); // thống kê bl
    return [
        'bl' => $bl,
        'view_name' => 'binh-luan/list.php'
    ];
}
