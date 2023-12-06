<?php
function rank_add($params = [])
{
    //cải tiến câu lệnh sql cho phù hợp với truy vấn , nếu cột nào trống
    $sql = "INSERT INTO bac_rank(ten_bac_rank) VALUES (:ten_bac_rank)";
    return pdo_execute($sql, $params); //trả về id khi thêm mới
}
function rank_edit($params = [])
{
    $id = $_GET['id'];
    //cải tiến câu lệnh sql cho phù hợp với truy vấn , nếu cột nào trống
    $sql = "UPDATE bac_rank SET ten_bac_rank=:ten_bac_rank WHERE  ma_bac_rank=$id";
    return pdo_execute($sql, $params); //trả về id khi thêm mới
}
function rank_delete($params = [])
{
    $sql = "DELETE FROM bac_rank WHERE ma_bac_rank=:ma_bac_rank";
    return pdo_execute($sql, $params);
}
function rank_delete_multi($str_ma_bac_rank)
{
    //str_ma_kh 4,6,7,89,
    $sql = "DELETE FROM bac_rank WHERE ma_bac_rank IN ($str_ma_bac_rank)";

    return pdo_execute($sql, []);
}
function rank_list_all()
{
    $sql = "SELECT * FROM bac_rank ORDER BY ma_bac_rank ASC";
    return pdo_query($sql);
}
function rank_list_all1()
{
    $row_per_page = 2; // số bản ghi trên 1 trang
    $current_page = exist_param("page_no") ? $_REQUEST['page_no'] : 1;
    $total_row = pdo_query_value("SELECT count(*) FROM bac_rank"); //đếm tổng số bản ghi
    $total_page = ceil($total_row / $row_per_page); //tính ra số lượng trang
    if ($current_page < 1)
        $current_page = 1;
    if ($current_page > $total_page)
        $current_page = $total_page;
    $start = ($current_page - 1) * $row_per_page;
    $sql = "SELECT * FROM bac_rank LIMIT {$start}, {$row_per_page}";
    //cho các thiết lập vào session để view có thể dùng
    $_SESSION['total_page'] = $total_page;
    $_SESSION['prev_page'] = ($current_page > 1) ? ($current_page - 1) : 1;
    $_SESSION['next_page'] = ($current_page < $total_page) ? ($current_page + 1) : $total_page;
    return pdo_query($sql);
}
/**
 * hàm dùng để lấy thông tin của 1 bản ghi có thể dùng để đăng nhập, dùng cho chức năng sửa
 * 
 */
function rank_get_one($params = [])
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM bac_rank WHERE ma_bac_rank=$id";
    //ghép nối các tham số vào câu lệnh sql
    foreach ($params as $field_name => $value)
        $sql .= " AND {$field_name} = :{$field_name} ";
    //vd: $sql.= "AND username=:username " ;
    return pdo_query_one($sql, $params); //trả về ID khi thêm mới
}
