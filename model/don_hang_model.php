<?php

// 1 hàm insert dl vào bảng order
function order_insert($params)
{
    $sql = "INSERT INTO don_hang( ho_ten, email, dia_chi, tong_tien) VALUES (:ho_ten, :email, :dia_chi, :tong_tien)";
    // return pdo_excute($sql, $params);
    return pdo_excute_lastId($sql, $params);
}
//  hàm insert dl vào bảng order_detail
function order_detail_insert($params)
{
    $sql = "INSERT INTO chi_tiet_don_hang( ma_don_hang, ma_tai_khoan, so_luong, gia_don_hang) VALUES (:ma_don_hang, :ma_tai_khoan, :so_luong, :gia_don_hang)";

    // return pdo_excute($sql, $params);
    return pdo_excute_lastId($sql, $params);
}
// hàm lấy dl từ bảng order theo id_order
function select_order_one($params)
{
    $sql = "SELECT * FROM don_hang WHERE ma_don_hang = :ma_don_hang";
    return pdo_query_one($sql, $params);
}
// hàm lấy sp theo mã đơn hàng trong bảng order_detail
function order_detail_select_id_order($params = [])
{
    $sql = "SELECT * FROM chi_tiet_don_hang od INNER JOIN tai_khoan tk ON od.ma_tai_khoan=tk.ma_tai_khoan WHERE ma_don_hang=:ma_don_hang";
    return pdo_query($sql, $params);
}
// hàm lấy dl từ bảng order
function order_select_all()
{
    $sql = "SELECT * FROM don_hang ";
    return pdo_query($sql);
}
// xóa dl bảng order theo id_order
function order_delete_id_order($params)
{
    $sql = "DELETE FROM don_hang WHERE ma_don_hang=:ma_don_hang";
    pdo_excute($sql, $params);
}
