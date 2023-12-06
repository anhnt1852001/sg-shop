<?php
// 1 hàm insert nội dung bình luận 
function bl_insert($param)
{
    $sql = "INSERT INTO binh_luan(ma_kh, ma_tai_khoan, noi_dung) VALUES (:ma_kh, :ma_tai_khoan, :noi_dung)";
    pdo_execute($sql, $param);
}
// 2 hàm lấy bl theo ma_sp
function bl_select_all_ma_sp($param)
{
    $sql = "SELECT * FROM binh_luan WHERE ma_tai_khoan=:ma_tai_khoan ORDER BY ma_bl DESC LIMIT 5";
    return pdo_query_all($sql, $param);
}
// hàm xóa bình luận
function bl_delete($param)
{
    $sql = "DELETE FROM binh_luan WHERE ma_bl=:ma_bl";
    if (is_array($param[':ma_bl'])) {
        foreach ($param[':ma_bl'] as $value) {
            $param = [':ma_bl' => $value];
            pdo_execute($sql, $param);
        }
    } else {
        pdo_execute($sql, $param);
    }
}
// hàm lấy bl theo ma_bl
function bl_select_one($param)
{
    $sql = "SELECT * FROM binh_luan WHERE ma_bl=:ma_bl";
    return pdo_query_one($sql, $param);
}
