<?php
require_once APP_PATH . '/model/product_model.php';
require_once APP_PATH . '/model/rank_model.php';
require_once APP_PATH . '/library/functions.php';
// Đặt tên các action
// add: thêm mới 
// edit: sửa 
// index: danh sách 
// delete: xóa

switch ($action) {
    case 'add':
        extract(AddProduct());
        break;
    case 'edit':
        extract(EditProduct());
        break;
    case 'delete':
        extract(DeleteProduct());
        break;
    default:
        if (isset($_POST['btn-delete-multi'])) {
            extract(delete_multi());
        }
        extract(ListProduct());
        break;
}
function AddProduct()
{
    $err = ['ten_tai_khoan' => '', 'password' => '', 'don_gia' => '', 'hinh' => '', 'mo_ta' => '']; //mảng chứa lỗi
    if (isset($_POST['btnSave'])) {
        extract($_POST); //bung mảng post thành các biến tự do
        $type_img = ['image/png', 'image/jpeg', 'image/bmp'];
        $name_img = $_FILES['hinh']['type'];
        // validate tên hàng hóa
        if (strlen($ten_tai_khoan) < 5) {
            $err['ten_tai_khoan'] = "<small class='text-danger'>*Tên tài khoản không được < 5 ký tự!!!</small>";
        }
        // validate password
        if (trim($password) == '') {
            $err['password'] = "<small class='text-danger'>*Mật Khẩu không được để trống!!!</small>";
            if ($password > 5) {
                $err['password'] = "<small class='text-danger'>*Mật khẩu không được dưới 5 kí tự !!!</small>";
            }
        }
        // validate đơn giá 
        if (trim($don_gia) == '') {
            $err['don_gia'] = "<small class='text-danger'>*Đơn giá không được để trống!!!</small>";
            if ($don_gia < 0) {
                $err['don_gia'] = "<small class='text-danger'>*Đơn giá phải là 1 số dương !!!</small>";
            }
        }
        //validate file ảnh tải lên
        if ($_FILES['hinh']['size'] > 0 && $_FILES['hinh']['size'] < 2000000) {
            if (in_array($name_img, $type_img) === false) {
                $err['hinh'] = "<small class='text-danger'>*Chỉ được up hình có định dạng là JPG PNG và BMP!!!</small>";
            } else {
                $hinh = $_FILES['hinh']['size'];
            }
        } else {
            $err['hinh'] = "<small class='text-danger'>*Không để trống và < 2MB</small>";
        }
        if (empty($mo_ta)) {
            $err['mo_ta'] = "<small class='text-danger'>*Mô tả không được để trống!!!</small>";
        }
        if (!array_filter($err)) {
            $up_hinh = save_file("hinh", IMAGE_DIR . "/product/");
            $hinh = strlen($up_hinh) > 0 ? $up_hinh : 'product.png';
            $dataInsert = [
                'ten_tai_khoan' => $ten_tai_khoan,
                'password' => $password,
                'don_gia' => $don_gia,
                'hinh' => $hinh,
                'mo_ta' => $mo_ta,
                'dac_biet' => $dac_biet == 1,
                'so_luot_xem' => $so_luot_xem,
                'ma_bac_rank' => $ma_bac_rank
            ];
            $last_id = product_add($dataInsert);
            $msg = "Thêm mới thành công, ID tài khoản mới: " . $last_id;
        }
    }

    return [
        'view_name' => 'product/add.php',
        'new_id' => @$last_id,
        'err' => $err,
        'msg' => @$msg
    ];
}
function EditProduct()
{
    $err = []; {
        if (isset($_POST['btn_update'])) {
            extract($_POST);
            if (empty($err)) {
                $up_hinh = save_file("up_hinh", IMAGE_DIR . "/product/");
                $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
                $dataUpdate = [
                    'ten_tai_khoan' => $ten_tai_khoan,
                    'password' => $password,
                    'don_gia' => $don_gia,
                    'hinh' => $hinh,
                    'mo_ta' => $mo_ta,
                    'dac_biet' => $dac_biet == 1,
                    'so_luot_xem' => $so_luot_xem,
                    'ma_bac_rank' => $ma_bac_rank
                ];
                $last_id = product_edit($dataUpdate);
                $msg = "Cập nhật thành công!";
            } else {
                $msg = implode('<br>', $err);
            }
        }
    }
    return [
        'view_name' => 'product/edit.php',
        'new_id' => @$last_id,
        'msg' => @$msg
    ];
}
function DeleteProduct()
{
    product_delete(['ma_tai_khoan' => $_GET['id']]);
    $msg = "Xóa thành công";
    $list_product = product_list_all();
    $rank = rank_list_all();
    return [
        'view_name' => 'product/list.php',
        'list_product' => $list_product,
        'list_rank' => $rank,
        'msg' => @$msg
    ];
}
function delete_multi()
{
    $mang_id = $_POST['ma_tai_khoan'];
    $msg = implode(',', $mang_id);
    $kqxoa = product_delete_multi(implode(',', $mang_id));
    return [
        'kq' => $kqxoa,
        'msg' => @$msg
    ];
}
function ListProduct()
{
    $rank = rank_list_all();
    $list_product = product_list_all1();
    return [
        'view_name' => 'product/list.php',
        'list_product' => $list_product,
        'list_rank' => $rank
    ];
}
