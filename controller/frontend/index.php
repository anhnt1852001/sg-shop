<?php
require_once APP_PATH . '/model/user_model.php';
require_once APP_PATH . '/model/nap_the_model.php';
switch ($action) {
    case 'nap-the':
        extract(NapThe());

        break;
    case 'lien-he':
        extract(LienHe());
        break;
    case 'lich-su':
        extract(LichSuNapThe());
        break;
    default:
        extract(TrangChu());
        break;
}
function TrangChu()
{
    $msg = "";
    return [
        'view_name' => 'index/trang-chu.php',
        'msg' => $msg
    ];
}

function LienHe()
{
    if (isset($_POST['btn_gui'])) {
        //1. Key dưới đây chỉ dùng tạm, khi chạy dịch vụ chính thức bạn cần đăng ký tài khoản của sendgrid.com
        // website nhỏ thì dùng tài khoản miễn phí ok
        // tham khảo cách đăng ký để lấy key https://saophaixoan.net/search-tut?q=sendgrid
        // trong code này chỉ cần lấy key là ok, sau khi gửi thử xong thì verify là ok.
        $SENDGRID_API_KEY = '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';
        extract($_POST);
        require_once APP_PATH . '/public/sendmail-sendgrid/vendor/autoload.php';
        $user = user_get_one_by_email(['email' => $email1]);
        // print_r($user);
        $email = new \SendGrid\Mail\Mail();
        ///------- bạn chỉnh sửa các thông tin dưới đây cho phù hợp với mục đích cá nhân
        // Thông tin người gửi
        $email->setFrom($email1, $user['ho_ten']);
        // Tiêu đề thư
        $email->setSubject($tieu_de);
        // Thông tin người nhận
        $email->addTo("anhntph12152@fpt.edu.vn", "anhntph12152");
        // Soạn nội dung cho thư
        // $email->addContent("text/plain", "Nội dung text thuần không có thẻ html");
        $email->addContent(
            "text/html",
            $noi_dung
        );
        // tiến hành gửi thư
        $sendgrid = new \SendGrid($SENDGRID_API_KEY);
        try {
            $response = $sendgrid->send($email);
            //--- mấy dòng print này thích in ra thì in.
            // print $response->statusCode() . "\n";
            // print_r($response->headers());
            // print $response->body() . "\n";
            echo "Đã gửi thành công";
        } catch (Exception $e) {
            echo 'Caught exception: ' . $e->getMessage() . "\n";
        }
    }
    return [
        'view_name' => 'index/lien-he.php',

    ];
}
function NapThe()
{
    $err = []; //Mảng Chứa lỗi 
    $msg = '';

    if (isset($_POST['price'])) {

        extract($_POST);
        $parttern = "/^[0-9]{13,13}$/";
        $partternss = "/^[0-9]{11,11}$/";
        $partterns = "/^[a-zA-Z]$/";
        if ($nha_mang == '1') {
            $err[]  = "<h2 style='color:yellow;'>*Bạn Phải chọn nhà mạng !!!</h2>";
        }
        if ($price == '1') {
            $err[]  = "<h2 style='color:yellow;'>*Bạn Phải Mệnh Giá !!!</h2>";
        }
        if (!preg_match($parttern, $ma_the)) {
            $err[]  = "<h2 style='color:yellow;'>*Mã thẻ không được nhỏ hoặc lớn hơn 13 ký tự !!!</h2>";
        }
        if (!preg_match($partternss, $seri)) {
            $err[]  = "<h2 style='color:yellow;'>*Seri không được nhỏ hoặc lớn hơn 11 ký tự !!!</h2>";
        }


        if (preg_match($partterns, $ma_the)) {
            $err[]  = "<h2 style='color:yellow;'>*Mã thẻkhông đúng,mã thẻ không được là  ký tự !!!</h2>";
        }
        if (preg_match($partterns, $seri)) {
            $err[]  = "<h2 style='color:yellow;'>*Số seri không đúng,số seri không được là  ký tự !!!</h2>";
        }
        if (empty($err)) {
            $dataInsert = ['so_du' => $price];
            nap_the($dataInsert);

            $msg = "<h2 style='color:yellow;' >*Nạp thẻ thành công !!!</h2>";
            if ($msg == "<h2 style='color:yellow;' >*Nạp thẻ thành công !!!</h2>") {
                $user =   $_SESSION['user'];
                $ma_kh = $user['ma_kh'];
                $dataInsertss = ['ma_the' => $ma_the, 'seri' => $seri, 'nha_mang' => $nha_mang, 'price' => $price];
                nap_the_ls($dataInsertss);
            }
        } else {
            $msg = implode('</br>', $err);
        }
    }
    return [
        'view_name' => 'index/nap-the.php',
        'msg' => $msg
    ];
}

function LichSuNapThe()
{
    return [
        'view_name' => 'index/lich-su.php',
    ];
}
