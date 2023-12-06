<?php
require_once APP_PATH . '/model/rank_model.php';
require_once APP_PATH . '/library/functions.php';
switch ($action) {
    case 'add':
        extract(AddRank());
        break;
    case 'edit':
        extract(EditRank());
        break;
    case 'delete':
        extract(DeleteRank());
        break;
    default:
        if (isset($_POST['btn-delete-multi'])) {
            extract(delete_multi());
        }
        extract(ListRank());
        break;
}
function AddRank()
{
    $err = ['ten_mh' => ''];
    if (isset($_POST['btnSave'])) {
        extract($_POST); //bung mảng post thành các biến tự do
        if (strlen($ten_bac_rank) < 5) {
            $err['ten_bac_rank'] = "<small class='text-danger'>*Tên bậc rank không được < 5 ký tự!</small>";
        }
        //nếu k có lỗi thì ghi csdl
        if (!array_filter($err)) {
            //tạo mảng tham số để lưu csdl, key của mảng là tên cột trong csdl
            $dataInsert = [

                'ten_bac_rank' => $ten_bac_rank,
            ];
            $last_id = rank_add($dataInsert);
            $msg = "THÊM MỚI THÀNH CÔNG, MÃ BẬC RANK :" . $last_id;
        }
        // else {
        //     $err;
        // }
    }
    return [
        'view_name' => 'rank/add.php',
        'new_id' => @$last_id,
        'err' => $err,
        'msg' => @$msg
    ];
}
function EditRank()
{
    if (isset($_POST['btn_update'])) {
        extract($_POST); //bung mảng post thành các biến tự do
        //nếu k có lỗi thì ghi csdl
        if (empty($err)) {
            //tạo mảng tham số để lưu csdl, key của mảng là tên cột trong csdl
            $dataUpdate = [
                'ten_bac_rank' => $ten_bac_rank
            ];
            rank_edit($dataUpdate);
            $msg = "Cập nhật thành công!";
        } else {
            $msg = implode('<br>' . $err);
        }
    }
    return [
        'view_name' => 'rank/edit.php',
        'new_id' => @$last_id,
        'msg' => @$msg
    ];
}
function DeleteRank()
{
    rank_delete(['ma_bac_rank' => $_GET['id']]);
    $msg = "Xóa thành công";
    $rank = rank_list_all();
    return [
        'view_name' => 'rank/list.php',
        'list_rank' => $rank,
        'msg' => @$msg
    ];
}
function delete_multi()
{
    $mang_id = $_POST['ma_bac_rank'];
    $msg = implode(',', $mang_id);
    $kqxoa = rank_delete_multi(implode(',', $mang_id));
    return [
        'kq' => $kqxoa,
        'msg' => @$msg
    ];
}
function ListRank()
{
    $list_rank = rank_list_all1();
    return [
        'view_name' => 'rank/list.php',
        'list_rank' => $list_rank
    ];
}
