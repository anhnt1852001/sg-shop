<?php
switch ($action) {
    case 'vongquay':
        extract(vongquay());
        break;
    default:
        break;
}
function vongquay()
{
    return [
        'view_name' => 'vong_quay/vong_quay.php'
    ];
}
