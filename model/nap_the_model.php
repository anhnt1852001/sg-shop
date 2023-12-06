<?php
function nap_the($params = [])
{
    $user =   $_SESSION['user'];
    $ma_kh = $user['ma_kh'];

    // Upload file
    $sql = "UPDATE khach_hang SET so_du =:so_du+so_du WHERE ma_kh='$ma_kh'";
    return pdo_execute($sql, $params); //Trả về ID khi thêm mới
}
function nap_the_ls($params = [])
{

    $user =   $_SESSION['user'];
    $ma_kh = $user['ma_kh'];
    // Upload file
    $sql = "INSERT INTO the_nap(ma_the,seri,nha_mang,price,ma_kh)VALUES (:ma_the,:seri,:nha_mang, :price, '$ma_kh')";
    return pdo_execute($sql, $params); //Trả về ID khi thêm mới
}
function nap_thes($params = [])
{
    $user =   $_SESSION['user'];
    $ma_kh = $user['ma_kh'];

    // Upload file
    $sql = "UPDATE khach_hang SET so_du =:so_du WHERE ma_kh='$ma_kh'";
    return pdo_execute($sql, $params); //Trả về ID khi thêm mới
}
function the_get_one($params = [])
{
    $user =   $_SESSION['user'];
    $ma_kh = $user['ma_kh'];
    $sql = "SELECT * FROM the_nap WHERE ma_kh='$ma_kh'";


    return pdo_query_all($sql, $params); //trả về ID khi thêm mới
}
function the_get_one1($params = [])
{
    $sql = "SELECT * FROM khach_hang WHERE 1 ";
    foreach ($params as $field_name => $value) {
        $sql .= " AND {$field_name} = :{$field_name} ";
        return pdo_query_one($sql, $params);
    }
}
