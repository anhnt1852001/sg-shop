<?php
require_once APP_PATH .   '/model/user_model.php';

switch ($action) {
    case 'add':
        extract(AddUser());
        break;
    case 'edit':
        extract(EditUser());
        break;
    case 'delete':
        extract(DeleteUser());
        break;
    case 'list':
        extract(ListUser());
        break;
    default:
        extract(ListUser());
        break;
}
function AddUser()
{
    $err = []; //Mảng Chứa lỗi

    if (isset($_POST['ma_kh'])) {
        extract($_POST); //bng mảng post thành các biến tự do
        //validate:
        if (empty($ma_kh)) {
            $err['ma_kh'] = "Bạn Cần Nhập Username";
        }
        if (empty($mat_khau)) {
            $err['mat_khau'] = "Bạn Cần Nhập mật khẩu";
        }
        if (empty($ngay_sinh)) {
            $err['ngay_sinh'] = "Bạn Chưa nhập ngày sinh";
        }
        if (empty($dia_chi)) {
            $err['dia_chi'] = "Bạn Chưa nhập địa chỉ";
        }
        if (empty($so_dt)) {
            $err['so_dt'] = "Bạn Chưa nhập Số điện thoại";
        }
        if ($mat_khau != $mat_khau2) {
            $err['mat_khau2'] = "Xác Thực mật khẩu không khớp";
        }
        if ($_FILES["hinh"]["name"] != NULL) {

            if (
                $_FILES["hinh"]["type"] == "image/jpeg"
                || $_FILES["hinh"]["type"] == "image/png"
                || $_FILES["hinh"]["type"] == "image/gif"
            ) {
                if ($_FILES["hinh"]["size"] > 1048576) {
                    $err['hinh'] = "file quá Nặng";
                } else {

                    $path = "public/image/"; // file luu vào thu muc chua file upload
                    $tmp_name = $_FILES['hinh']['tmp_name'];
                    $name = $_FILES['hinh']['name'];
                    $type = $_FILES['hinh']['type'];
                    $size = $_FILES['hinh']['size'];
                }
            } else {
                $err['hinh'] = "Bạn Phải nhập file ảnh";
            }
        } else {
            $err['hinh'] = "Bạn chưa nhập file ảnh";
        }
        //ảnh

        if (empty($err)) {

            $hinh = $_FILES['hinh']['name'];
            move_uploaded_file($_FILES['hinh']['tmp_name'], $path . $hinh);

            try {
                $dataInsert = ['ma_kh' => $ma_kh, 'email' => $email, 'mat_khau' => $mat_khau, 'ho_ten' => $ho_ten, 'so_dt' => $so_dt, 'vai_tro' => $vai_tro,  'kich_hoat' => $kich_hoat, 'hinh' => $hinh, 'dia_chi' => $dia_chi, 'ngay_sinh' => $ngay_sinh];
                $last_id = user_add($dataInsert);
                $msg = "Thêm mới thành công,Mã tài khoản mới : " . $ma_kh;
            } catch (Exception $exc) {
                $MESSAGE = "Đăng ký thành viên thất bại!";
            }
        } else {
            $msg = implode('</br>', $err);
        }
    }
    return [
        'view_name' => 'user/add.php', 'new_id' => @$last_id, 'msg' => @$msg
    ];
}
function EditUser()
{
    $err = []; //Mảng Chứa lỗi

    if (isset($_POST['ma_kh'])) {
        extract($_POST); //bng mảng post thành các biến tự do
        //validate:

        if (empty($mat_khau)) {
            $err['mat_khau'] = "Bạn Cần Nhập mật khẩu";
        }
        if (empty($ngay_sinh)) {
            $err['ngay_sinh'] = "Bạn Chưa nhập ngày sinh";
        }
        if (empty($dia_chi)) {
            $err['dia_chi'] = "Bạn Chưa nhập địa chỉ";
        }
        if (empty($so_dt)) {
            $err['so_dt'] = "Bạn Chưa nhập Số điện thoại";
        }
        if ($mat_khau != $mat_khau2) {
            $err['mat_khau2'] = "Xác Thực mật khẩu không khớp";
        }

        //ảnh

        if (empty($err)) {
            $path = "public/image/";
            $hinh = $_POST['up_hinh'];
            if ($_FILES['hinh']['size']  > 0) {
                $hinh = $_FILES['hinh']['name'];
            }

            move_uploaded_file($_FILES['hinh']['tmp_name'], $path . $hinh);

            try {
                $dataInsert = ['email' => $email, 'mat_khau' => $mat_khau, 'ho_ten' => $ho_ten, 'so_dt' => $so_dt, 'vai_tro' => $vai_tro,  'kich_hoat' => $kich_hoat, 'hinh' => $hinh, 'dia_chi' => $dia_chi, 'ngay_sinh' => $ngay_sinh];
                user_update($dataInsert);
                $msg = "Sửa thành công, : " . $ma_kh;
            } catch (Exception $exc) {
                $MESSAGE = "Sửa thành viên thất bại!";
            }
        } else {
            $msg = implode('</br>', $err);
        }
    }
    return [
        'view_name' => 'user/edit.php', 'new_id' => @$last_id, 'msg' => @$msg
    ];
}

function DeleteUser()
{

    // if (isset($_POST['delete'])) {
    //     try {
    //         $ma_kh = $_GET['ma_kh'];
    //         user_delete($ma_kh);
    //         $msg = "Xóa thành công!";
    //     } catch (Exception $exc) {
    //         $msg = "Xóa thất bại!";
    //     }
    // }
    user_delete(['ma_kh' => $_GET['ma_kh']]);
    $msg = "xóa thành công";
    $user = khach_hang_select_all();


    return [
        'view_name' => 'user/list.php', 'items' => $user, 'msg' => @$msg
    ];
}

function ListUser()
{
    return [
        'view_name' => 'user/list.php',
    ];
}
