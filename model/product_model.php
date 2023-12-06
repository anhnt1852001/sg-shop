<?php
function product_add($params = [])
{
    //cải tiến câu lệnh sql cho phù hợp với truy vấn , nếu cột nào trống
    $sql = "INSERT INTO tai_khoan(ten_tai_khoan,password,don_gia,hinh,mo_ta,dac_biet,so_luot_xem,ma_bac_rank) VALUES (:ten_tai_khoan,:password,:don_gia,:hinh,:mo_ta,:dac_biet,:so_luot_xem,:ma_bac_rank) ";
    return pdo_execute($sql, $params); //trả về id khi thêm mới
}
function product_edit($params = [])
{
    $id = $_GET['id'];
    //cải tiến câu lệnh sql cho phù hợp với truy vấn , nếu cột nào trống
    $sql = "UPDATE tai_khoan SET ten_tai_khoan=:ten_tai_khoan,password=:password,don_gia=:don_gia,hinh=:hinh,mo_ta=:mo_ta,dac_biet=:dac_biet,so_luot_xem=:so_luot_xem,ma_bac_rank=:ma_bac_rank WHERE ma_tai_khoan=$id";
    return pdo_execute($sql, $params); //trả về id khi thêm mới
}
function product_delete($params = [])
{

    $sql = "DELETE FROM tai_khoan WHERE ma_tai_khoan=:ma_tai_khoan";
    return pdo_execute($sql, $params);
}
function product_delete_multi($str_ma_tai_khoan)
{
    $sql = "DELETE FROM tai_khoan WHERE ma_tai_khoan IN ($str_ma_tai_khoan)";
    return pdo_execute($sql, []);
}
function product_list_all()
{

    $sql = "SELECT * FROM tai_khoan ORDER BY ma_tai_khoan ASC";
    return pdo_query($sql);
}
function product_list_all1()
{
    $row_per_page = 2; // số bản ghi trên 1 trang
    $current_page = exist_param("page_no") ? $_REQUEST['page_no'] : 1;
    $total_row = pdo_query_value("SELECT count(*) FROM tai_khoan"); //đếm tổng số bản ghi
    $total_page = ceil($total_row / $row_per_page); //tính ra số lượng trang
    if ($current_page < 1)
        $current_page = 1;
    if ($current_page > $total_page)
        $current_page = $total_page;
    $start = ($current_page - 1) * $row_per_page;
    $sql = "SELECT * FROM tai_khoan LIMIT {$start}, {$row_per_page}";
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
function product_get_one($params = [])
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM tai_khoan WHERE ma_tai_khoan=$id";
    //ghép nối các tham số vào câu lệnh sql
    foreach ($params as $field_name => $value)
        $sql .= " AND {$field_name} = :{$field_name} ";
    //vd: $sql.= "AND username=:username " ;
    return pdo_query_one($sql, $params); //trả về ID khi thêm mới
}


//aaaaaaa
function sp_select_one($param)
{
    $sql = "SELECT * FROM tai_khoan WHERE ma_tai_khoan=:ma_tai_khoan";
    return pdo_select_one($sql, $param);
}
function sp_dm_select_one($params)
{
    $sql = "SELECT * FROM tai_khoan tk INNER JOIN bac_rank br ON tk.ma_bac_rank=br.ma_bac_rank WHERE ma_tai_khoan=:ma_tai_khoan";
    return pdo_select_one($sql, $params);
}
function sp_tang_so_luot_xem($params)
{
    $sql = "UPDATE tai_khoan SET so_luot_xem=so_luot_xem + 1 WHERE ma_tai_khoan=:ma_tai_khoan";
    pdo_execute($sql, $params);
}

function sp_select_all_ma_dm($params)
{
    $sql = "SELECT * FROM tai_khoan WHERE ma_bac_rank=:ma_bac_rank";
    return pdo_query_all($sql, $params);
}
function product_select_keyword($keyword)
{
    $sql = "SELECT * FROM tai_khoan tk JOIN bac_rank br ON br.ma_bac_rank=tk.ma_bac_rank WHERE ten_tai_khoan LIKE '%$keyword%' OR ten_bac_rank LIKE '%$keyword%' ";

    return pdo_query($sql);
}
function product_select_cart($params, $string)
{
    $sql = "SELECT * FROM tai_khoan WHERE ma_tai_khoan IN ($string)";
    return pdo_query($sql, $params);
}
