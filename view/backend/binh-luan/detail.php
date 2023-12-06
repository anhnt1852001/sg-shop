<head>

</head>
<h2 style="font-size: 25px; font-weight: bold; font-family: tahoma;">NICK GAME: <?= $row_ten_sp['ten_tai_khoan'] ?></h2>
<form action="?module=backend&controller=binh-luan&action=bl_delete&ma_tai_khoan=<?= $_REQUEST['ma_tai_khoan'] ?>" method="post">


    <table border="" class="table table-hover text-center">
        <tr>
            <th></th>
            <th>Nội Dung Bình Luận</th>
            <th>Người Bình Luận</th>
            <th>Ngày Bình Luận</th>
            <th>HÀNH ĐỘNG</th>
        </tr>
        <tbody>
            <?php foreach ($rows_bl_ma_sp as $row_bl) {
                extract($row_bl) ?>
                <tr>
                    <td>
                        <input type="checkbox" name="ma_bl[]" value="<?= $ma_bl ?>">
                    </td>
                    <td><?= $noi_dung ?></td>
                    <td><?= $ma_kh ?></td>
                    <td><?= date_format(date_create($ngay_bl), 'd-m-Y') ?></td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa')" href="?module=backend&controller=binh-luan&action=bl_delete&ma_bl=<?= $ma_bl ?>&ma_tai_khoan=<?= $ma_tai_khoan ?>">xóa</a>
                    </td>
                </tr>
            <?php } ?>

        </tbody>

    </table>
    <button class="btn btn-primary" id="check-all" type="button">Chọn tất cả</button>
    <button class="btn btn-danger" id="clear-all" type="button">Bỏ chọn tất cả</button>
    <button class="btn btn-success" type="submit" class="" onclick="return confirm('Bạn có chắc muốn xóa mục này')" id="btn-delete" name="btn_delete">Xóa các mục chọn</button>
</form>