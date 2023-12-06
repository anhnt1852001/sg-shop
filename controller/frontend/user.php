<?php
require_once APP_PATH . '/model/user_model.php';
require_once APP_PATH . '/public/sendmail-sendgrid/vendor/autoload.php';
switch ($action) {
    case 'login':
        extract(DangNhap());
        break;
    case 'signup':
        extract(DangKy());
        break;
    case 'doi_mk':
        extract(DoiMatKhau());
        break;
    case 'update_tk':
        extract(UpdateTk());
        break;
    case 'quen_mk':
        extract(QuenMK());
        break;
    case 'logout':
        extract(DangXuat());
        break;

    default:
        break;
}
function DangNhap()
{
    $msg = "Hàm đăng nhập";
    if (isset($_POST['ma_kh'])) {
        //Lấy dữ liệu khi người dùng bấm nút gửi dạng post

        $msg .= '<br> xin chào ' . $_POST['ma_kh'];
        $mat_khau = $_POST['mat_khau'];
        $userInfo = user_get_one1(['ma_kh' => $_POST['ma_kh']]);
        if (empty($userInfo))
            $msg = "không tồn tại tài khoản" . $_POST['ma_kh'];
        else {
            if ($mat_khau == $userInfo['mat_khau']) {
                $_SESSION["user"] = $userInfo;
                $msg = "Đăng nhập thành công!";
                header('location:http://localhost/sg-shop');
            } else {
                $msg = "Sai Password";
            }
        }
    }

    return [
        'view_name' => 'user/login.php', 'msg' => $msg

    ];
}
function DangKy()
{
    $err = []; //Mảng Chứa lỗi
    $msg = "";
    if (isset($_POST['ma_kh'])) {
        extract($_POST); //bng mảng post thành các biến tự do
        //validate:
        if (empty($ma_kh)) {
            $err['ma_kh'] = "Bạn Cần Nhập Username";
        }
        if (users_exist($ma_kh)) {
            $err['ma_kh'] = 'Mã này đã được sử dụng';
        }
        if (empty($mat_khau)) {
            $err['mat_khau'] = "Bạn Cần Nhập mật khẩu";
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
        if (empty($err)) {

            $hinh = $_FILES['hinh']['name'];
            move_uploaded_file($_FILES['hinh']['tmp_name'], $path . $hinh);


            $dataInsert = ['ma_kh' => $ma_kh, 'email' => $email, 'ho_ten' => $ho_ten,  'mat_khau' => $mat_khau, 'hinh' => $hinh];
            user_add_signup($dataInsert);
            $msg = "Thêm mới thành công,Mã tài khoản mới : " . $ma_kh;
        } else {
            $msg = implode('</br>', $err);
        }
    }
    return [
        'view_name' => 'user/signup.php', 'msg' => $msg
    ];
}
function DoiMatKhau()
{
    $msg = "";
    if (isset($_POST['ma_kh'])) {
        extract($_POST);
        //Lấy dữ liệu khi người dùng bấm nút gửi dạng post
        $user = user_get_one1(['ma_kh' => $_POST['ma_kh']]);

        if ($user['mat_khau'] == $mat_khau_cu) {
            try {
                $dataInsert = ['mat_khau_moi' => $mat_khau_moi];
                user_change_password($dataInsert);
                $msg = "Đổi mật khẩu thành công!";
            } catch (Exception $exc) {
                $msg = "Đổi mật khẩu thất bại !";
            }
        } else {
            $msg = "Sai mật khẩu!";
        }
    }
    return [
        'view_name' => 'user/doi_mk.php', 'msg' => $msg

    ];
}
function UpdateTk()
{
    $msg = "";

    $err = []; //Mảng Chứa lỗi

    if (isset($_POST['btn_update'])) {
        extract($_POST); //bng mảng post thành các biến tự do
        //validate:

        //ảnh

        if (empty($err)) {

            $path = "public/image/";
            $hinh = $_POST['up_hinh'];
            if ($_FILES['hinh']['size']  > 0) {
                $hinh = $_FILES['hinh']['name'];
            } else {
                $err[] = "Bạn Chưa chọn ảnh";
            }

            move_uploaded_file($_FILES['hinh']['tmp_name'], $path . $hinh);
            try {
                $dataInsert = ['email' => $email, 'ho_ten' => $ho_ten,  'hinh' => $hinh];
                user_update2($dataInsert);
                $msg = "Cập nhật thành công, : ";
            } catch (Exception $exc) {
                $MESSAGE = "Cập nhật thành viên thất bại!";
            }
        } else {
            $msg = implode('</br>', $err);
        }
    }
    return [
        'view_name' => 'user/update_tk.php', 'msg' => $msg

    ];
}
function QuenMK()
{
    $err = ['email' => ''];
    $result = '';
    $msg = '';
    if (isset($_POST['btn_gui'])) {
        extract($_POST);
        if (!filter_var($emailto, FILTER_VALIDATE_EMAIL)) {
            $err['email'] = "<small style='color:yellow;'>*Email sai định dạng hoặc không được để trống!</small>";
        }
        if (!array_filter($err)) {
            $user =  user_get_one_by_email(['email' => $emailto]);
            if (empty($user)) {
                $err['email'] = "<small style='color:yellow;'>*Không tồn tại tài khoản : </small>" . $emailto;
            } else {
                $ho__ten = $user['ho_ten'];
                $mat__khau = $user['mat_khau'];
                $SENDGRID_API_KEY = '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';
                // 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
                // SG._cdWp-SHTmOwow07rID-fg.QUbWdwHVanGCNZGRqrBDqDhpfjQyhqFDsQTHN0j01_Qg
                $email = new \SendGrid\Mail\Mail();
                ///------- bạn chỉnh sửa các thông tin dưới đây cho phù hợp với mục đích cá nhân
                // Thông tin người gửi
                $email->setFrom($emailto, "user");
                // $email->setFrom($emailto, $name);
                // "anhntph12152@fpt.edu.vn"
                // Tiêu đề thư
                $email->setSubject("Quên mật khẩu");
                // Thông tin người nhận
                // $email->addTo($emailto, $ho_ten);
                $email->addTo("anhntph12152@fpt.edu.vn", "SG - Shop");
                // Soạn nội dung cho thư
                // $email->addContent("text/plain", "Nội dung liên hệ:" . $message);
                // $don_hang_gui_mail=order_select_by_order_detail(['ma_hd'=>$last_id]);
                $email->addContent(
                    "text/html",
                    "
                <h4>Dear: $ho__ten </h4>
                <p> Mật khẩu của bạn là : $mat__khau </p>
                "
                );

                // tiến hành gửi thư
                $sendgrid = new \SendGrid($SENDGRID_API_KEY);
                if ($sendgrid->send($email)) {
                    $result = "<small style='color:yellow;'>*Vui lòng check mail để nhận lại mật khẩu! </small>";
                }
            }
        }
    }

    return [
        'view_name' => 'user/quen_mk.php',
        'msg' => $msg,
        'err' => $err,
        'result' => $result

    ];
}
function DangXuat()
{

    session_unset();
    header('?controller=user&action=login');
    if (isset($_SERVER['HTTP_REFERER']))
        header("location: " . $_SERVER['HTTP_REFERER']);
    $ma_kh = get_cookie("ma_kh");
    $mat_khau = get_cookie("mat_khau");
    return [
        'view_name' => 'backend/nav.php'

    ];
}
