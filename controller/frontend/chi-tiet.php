<?php
require_once APP_PATH . '/model/rank_model.php';
require_once APP_PATH . '/model/product_model.php';
require_once APP_PATH . '/model/bl_model.php';
switch ($action) {
        // case 'chi-tiet':
        //     extract(ChiTiet());
        //     break;
    case 'sp_view':
        extract(sp_view());
        break;
    case 'thongtin':
        extract(thongtin());
        break;
    case 'sp_bl':
        extract(sp_bl());
        break;
    default:
        extract(TrangChu());
        break;
}

function sp_view()
{
    extract($_REQUEST);
    sp_tang_so_luot_xem([':ma_tai_khoan' => $ma_tai_khoan]); //tăng số lượt xem
    $row_sp_ma_sp = sp_dm_select_one([':ma_tai_khoan' => $ma_tai_khoan]); //lấy dl đổ vào phần thông tin
    $rows_sp_ma_dm = sp_select_all_ma_dm([':ma_bac_rank' => $row_sp_ma_sp['ma_bac_rank']]); //lấy dl đổ vào phần sp cùng loại
    $rows_sp_bl = bl_select_all_ma_sp([':ma_tai_khoan' => $ma_tai_khoan]); //lấy bình luận theo ma_sp
    $rows_sp_bl = array_reverse($rows_sp_bl); //đảo ngược mảng trước khi hiển thị ra view
    return [
        'row_sp_ma_sp' => $row_sp_ma_sp,
        'rows_sp_ma_dm' => $rows_sp_ma_dm,
        'rows_sp_bl' => $rows_sp_bl,
        'view_name' => 'chi-tiet/chi-tiet-nick.php'
    ];
}

function thongtin()
{
    extract($_REQUEST);
    $row_sp_ma_sp = sp_dm_select_one([':ma_tai_khoan' => $ma_tai_khoan]); //lấy dl đổ vào phần thông tin
    return [
        'row_sp_ma_sp' => $row_sp_ma_sp,
        'view_name' => 'chi-tiet/thongtin.php'
    ];
}
function sp_bl()
{
    extract($_REQUEST);
    if (isset($btn_send_bl)) {
        $param = [
            ':ma_tai_khoan' => $ma_tai_khoan,
            ':ma_kh' => $_SESSION['user']['ma_kh'],
            ':noi_dung' => $noi_dung
        ];
        try {
            bl_insert($param);
            header("location:?module=frontend&controller=chi-tiet&action=sp_view&ma_tai_khoan=$ma_tai_khoan");
        } catch (PDOException $e) {
            $msg = 'Thêm dl bảng bl thất bại ' . $e->getMessage();
        }
        return [
            '$msg' => $msg,
            'ma_tai_khoan' => $ma_tai_khoan,
            'view_name' => 'chi-tiet/chi-tiet-nick.php'
        ];
    }
}
function TrangChu()
{
    $msg = "";
    return [
        'view_name' => 'index/trang-chu.php',
        'msg' => $msg
    ];
}
