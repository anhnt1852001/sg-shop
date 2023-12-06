<?php
// 1 hàm tính tổng số lượng bậc rank
function br_sum_br($param)
{
    $sql = "SELECT COUNT(*) as tong_bac_rank FROM bac_rank";
    return pdo_query_one($sql, $param);
}
// 2 hàm tính tổng số lượng sản phẩm
function tk_sum_tk($param)
{
    $sql = "SELECT COUNT(*) as tong_tai_khoan FROM tai_khoan";
    return pdo_query_one($sql, $param);
}
// 3 hàm thống kê sản phẩm theo bậc rank
function tk_nick_tk($param)
{
    $sql = "SELECT br.ma_bac_rank,ten_bac_rank,COUNT(*) tong_tai_khoan,MAX(don_gia) gia_cao_nhat,MIN(don_gia) gia_thap_nhat,AVG(don_gia) gia_trung_binh FROM bac_rank br INNER JOIN tai_khoan tk ON br.ma_bac_rank=tk.ma_bac_rank GROUP BY br.ma_bac_rank,ten_bac_rank 
    ";
    return pdo_query_all($sql, $param);
}
function tk_bl_ten_hh($param)
{
    $sql = "SELECT tk.ma_tai_khoan, ten_tai_khoan,COUNT(*) so_bl,MAX(ngay_bl) moi_nhat,MIN(ngay_bl) cu_nhat FROM binh_luan bl INNER JOIN tai_khoan tk ON bl.ma_tai_khoan=tk.ma_tai_khoan GROUP BY tk.ma_tai_khoan, ten_tai_khoan ORDER BY tk.ma_tai_khoan DESC";
    return pdo_query_all($sql, $param);
}
