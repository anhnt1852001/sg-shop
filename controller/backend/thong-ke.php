<?php
require_once APP_PATH . '/model/tk_model.php';
switch ($action) {
    case 'chart':
        extract(chart());
        break;
    case 'value':
        # code...
        break;
    case 'value':
        # code...
        break;
    default:
        extract(ListThongKe());
        break;
}
function chart()
{
    $items = tk_nick_tk([]);
    return [
        'items' => $items,
        'view_name' => 'thong-ke/chart.php'
    ];
}
function ListThongKe()
{
    $tk = tk_nick_tk([]);
    return [
        'tk' => $tk,
        'view_name' => 'thong-ke/list.php'
    ];
}
