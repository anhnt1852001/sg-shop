<div class="container mt-5 mb-5">
    <h2 class="text-center text-light">Thông tin đơn hàng</h2>
    <table class="table  text-center">
        <thead class="text-light">
            <tr>
                <th>Stt</th>
                <th>Tên</th>
                <th>Anh</th>
                <th>Giá</th>
                <th>Thành tiền</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody class="text-light">
            <?php $count = 0;
            $sum = 0;
            foreach ($infor_don_hang as $don_hang) {
                extract($don_hang);
                $sum += $don_gia * $so_luong; ?>
                <tr>
                    <td><?= ++$count ?></td>
                    <td><?= $ten_tai_khoan ?></td>
                    <td>
                        <img width="200" class="img-fluid" src="<?= BASE_URL . '/public/content/images/product/' .  $hinh ?>" alt="">
                    </td>
                    <td><?= $don_gia ?></td>
                    <td><?= $don_gia * $so_luong ?></td>
                </tr>
            <?php } ?>
            <tr>
                <th></th>
                <th>Tổng tiền : </th>
                <th></th>
                <th></th>
                <th></th>
                <th><?= $sum ?> đ</th>
            </tr>
        </tbody>
    </table>


    <a class="btn btn-primary" style="font-size:15px;" href="?controller=index&action=trang-chu">Trang Chủ</a>
    <a href="?module=frontend&controller=chi-tiet&action=thongtin&ma_tai_khoan=<?= $ma_tai_khoan ?>">
        <button style="font-size:15px;" type="button" class="btn btn-info">Thông Tin nick</button>
    </a>

</div>