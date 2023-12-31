<?php session_start();  // khởi động session
date_default_timezone_set("Asia/Ho_Chi_Minh");  // thiết lập múi giờ

define("APP_PATH", __DIR__);  // định nghĩa hằng lưu trữ đường dẫn tới thư mục gốc của website
define("BASE_URL", '/sg-shop'); // định nghĩa hằng lưu đường dẫn thư mục website dùng cho url
define("IMAGE_DIR", APP_PATH . '/public/content/images/'); //Định nghĩa đường dẫn chứa ảnh sử dụng trong upload
require_once APP_PATH . '/library/functions.php';
require_once APP_PATH . '/library/pdo.php';

// lấy các tham số
$module = isset($_GET['module']) ?  $_GET['module'] : 'frontend';
// nếu là trang chủ thì để mặc định là module frontend

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'index'; // lấy tham sốcontroller
$action = isset($_GET['action']) ? $_GET['action'] : 'index'; // lấy tham số action
// mặc định controller và action nếu không truyền vào ta đặt là index.

// thiết lập đường dẫn tới file controller để nhúng vào index.
$file_controller = APP_PATH . '/controller/' . $module . '/' . $controller . '.php';
// echo $file_controller;
// echo $action;
// thiết lập đường dẫn file layout 
checkACL_V2($module, $controller, $action);
$file_layout = APP_PATH . '/view/' . $module . '/layout.php';


// echo $file_layout;
if (file_exists($file_controller)) {  // nếu có tồn tại file controller trong thư mục thì nhúng vào
    require_once $file_controller; // nhúng file controller

    if (file_exists($file_layout))
        require_once $file_layout; // nhúng file layout
    else
        die("Ban chua co file layout: $file_layout ");
} else {
    die("Ban chua co file controller: $file_controller");
}
