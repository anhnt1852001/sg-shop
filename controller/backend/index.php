<?php

switch ($action) {
    case 'trang-chu':
        extract(TrangChu());
        break;

    default:
        extract(TrangChu());

        break;
}
function TrangChu()
{
    return [
        'view_name' => 'trang-chu.php',
    ];
}
