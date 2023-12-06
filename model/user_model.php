<?php
function user_delete_all()
{

    $user = user_get_one();
    $ma_kh = $user['ma_kh'];
    $sql = "DELETE FROM khach_hang  WHERE ma_kh='$ma_kh'";
    if (is_array($ma_kh)) {
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    return pdo_execute($sql, []);
}
function user_delete($params = [])
{
    $sql = "DELETE FROM khach_hang  WHERE ma_kh =:ma_kh";
    return pdo_execute($sql, $params);
}

function user_add($params = [])
{
    //cải tiến câu lệnh SQL cho phù hợp với truy vấn,nêú cột nào muốn insert dữ liệu vào thì viết tên cột vào câu lệnh SQL tương ứng(Sửa phần chữ màu đỏ)

    // Upload file

    $sql = "INSERT INTO khach_hang(ma_kh,email,mat_khau,ho_ten,so_dt,vai_tro,kich_hoat,hinh,dia_chi,ngay_sinh)VALUES (:ma_kh,:email, :mat_khau, :ho_ten, :so_dt, :vai_tro, :kich_hoat, :hinh, :dia_chi, :ngay_sinh)";
    return pdo_execute($sql, $params); //Trả về ID khi thêm mới
}
function user_add_signup($params = [])
{
    //cải tiến câu lệnh SQL cho phù hợp với truy vấn,nêú cột nào muốn insert dữ liệu vào thì viết tên cột vào câu lệnh SQL tương ứng(Sửa phần chữ màu đỏ)

    // Upload file

    $sql = "INSERT INTO khach_hang(ma_kh,email,mat_khau,ho_ten,hinh)VALUES (:ma_kh,:email, :mat_khau, :ho_ten, :hinh)";
    return pdo_execute($sql, $params); //Trả về ID khi thêm mới
}
function user_update($params = [])
{
    $ma_kh = $_GET['ma_kh'];
    // Upload file
    $sql = "UPDATE khach_hang SET email=:email,mat_khau=:mat_khau,ho_ten=:ho_ten,so_dt=:so_dt,vai_tro=:vai_tro,hinh=:hinh,kich_hoat=:kich_hoat,dia_chi=:dia_chi,ngay_sinh=:ngay_sinh WHERE ma_kh='$ma_kh'";
    return pdo_execute($sql, $params); //Trả về ID khi thêm mới
}
function user_update2($params = [])
{
    $user =   $_SESSION['user'];
    $ma_kh = $user['ma_kh'];
    // Upload file
    $sql = "UPDATE khach_hang SET email=:email,ho_ten=:ho_ten,hinh=:hinh WHERE ma_kh='$ma_kh'";
    return pdo_execute($sql, $params); //Trả về ID khi thêm mới
}
function user_change_password($params = [])
{
    $ma_kh = $_POST['ma_kh'];
    $sql = "UPDATE khach_hang SET mat_khau=:mat_khau_moi WHERE ma_kh='$ma_kh'";
    pdo_execute($sql, $params);
}

function user_get_one($params = [])
{
    $ma_kh = $_GET['ma_kh'];
    $sql = "SELECT * FROM khach_hang WHERE ma_kh='$ma_kh'";
    foreach ($params as $field_name => $value)
        $sql .= "AND {$field_name} = :{$field_name} ";
    return pdo_query_one($sql, $params);
}
function user_get_one_session($params = [])
{
    $user =   $_SESSION['user'];
    $ma_kh = $user['ma_kh'];
    $sql = "SELECT * FROM khach_hang WHERE ma_kh='$ma_kh'";
    //ghép nối các tham số vào câu lệnh sql
    foreach ($params as $field_name => $value)
        $sql .= " AND {$field_name} = :{$field_name} ";
    //vd: $sql.= "AND username=:username " ;
    return pdo_query_one($sql, $params); //trả về ID khi thêm mới
}
function user_get_one1($params = [])
{
    $sql = "SELECT * FROM khach_hang WHERE 1 ";
    foreach ($params as $field_name => $value) {
        $sql .= " AND {$field_name} = :{$field_name} ";
        return pdo_query_one($sql, $params);
    }
}
function user_get_one_by_email($params = [])
{
    $sql = "SELECT * FROM khach_hang WHERE email=:email ";
    //ghép nối các tham số vào câu lệnh sql
    foreach ($params as $field_name => $value)
        $sql .= " AND {$field_name} = :{$field_name} ";
    //vd: $sql.= "AND username=:username " ;
    return pdo_query_one1($sql, $params); //trả về ID khi thêm mới
}
