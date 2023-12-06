<div class="container mt-5 mb-5">
    <h1 class="text-center special text-danger">Giỏ Hàng</h1>
    <h5 class="text-center special"><?php echo $msg ?></h5>
    <?php if (count($rows_cart) > 0) { ?>
        <form action="?module=frontend&controller=cart&action=update" method="post">
            <table class="table">
                <thead class="text-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên Nick</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Thành Tiền</th>
                        <th scope="col">Hành Động</th>
                    </tr>
                </thead>
                <tbody class="text-light">
                    <?php
                    $count = 0;
                    $sum = 0;
                    foreach ($rows_cart as $cart) {

                        ++$count;
                        extract($cart);

                        $sum += $don_gia * $_SESSION['cart'][$ma_tai_khoan];  ?>
                        <tr>
                            <td><?= $count ?></td>
                            <td><?= $ten_tai_khoan ?></td>
                            <td>

                                <img width="200" class="img-fluid" src="<?= BASE_URL . '/public/content/images/product/' .  $hinh ?>" alt="">
                            </td>
                            <td>
                                <?= $don_gia ?> đ
                            </td>
                            <td>
                                <?= $don_gia * $_SESSION['cart'][$ma_tai_khoan] ?> đ
                            </td>
                            <td>
                                <a style="font-size: 15px;" class="btn btn-danger" onclick="return confirm('Bạn muốn xóa sản phẩm này')" href="?module=frontend&controller=cart&action=delete&ma_tai_khoan=<?= $ma_tai_khoan ?>">Xóa</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" name="btn_update" class="btn btn-info" style="font-size: 15px;">Cập nhật</button>
                </div>
                <div class="col-md-3">
                    <h5 class="justify-content-end special text-light">Tổng : <?= $sum ?> đ</h5>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-warning" type="button">
                        <a class="card-link text-white" href="?controller=index&action=trang-chu" style="font-size: 15px;">Mua Thêm</a>
                    </button>
                    <button class="btn btn-danger" type="button">
                        <a class="card-link text-white" href="?module=frontend&controller=cart&action=order" style="font-size: 15px;">Thanh Toán</a>
                    </button>
                </div>
            </div>

        </form>
    <?php } ?>
</div>