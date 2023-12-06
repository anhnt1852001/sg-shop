<?php
require_once APP_PATH . '/model/don_hang_model.php';

switch ($action) {

    case 'delete':
        extract(delete());
        break;
    case 'detail':
        extract(detail());
        break;
    case 'value':
        # code...
        break;
    case 'value':
        # code...
        break;
    default:
        extract(index());
        break;
}
function index()
{
    $rows_don_hang = order_select_all([]);
    return [
        'rows_don_hang' => $rows_don_hang,
        'view_name' => 'don_hang/view_don_hang.php'
    ];
}
function delete()
{
    extract($_REQUEST);
    order_delete_id_order([':ma_don_hang' => $ma_don_hang]);
    header("location:?module=backend&controller=don_hang&action=index");
    exit('lỗi xóa');
}
function detail()
{
    extract($_REQUEST);
    $detail = order_detail_select_id_order([':ma_don_hang' => $ma_don_hang]);
    return [
        'ma_don_hang' => $ma_don_hang,
        'detail_order' => $detail,
        'view_name' => 'don_hang/detail.php'
    ];
}
