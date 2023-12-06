<h3 class="mb-3" style="font-size: 25px; font-weight: bold; font-family: tahoma;">Chi Tiết Đơn Hàng</h3>
<div>
    <div class="">
        <table class="table text-center" style=" font-family: tahoma;">
            <thead>
                <tr>
                    <th>Tên Nick</th>
                    <th>Mã đơn hàng</th>
                    <th>số lượng</th>
                    <th>thành tiền</th>
                    <th>Xóa</th>
                </tr>
            </thead>

            <tbody>
                <?php $count = 0;
                foreach ($detail_order as $order) {
                    extract($order); ?>
                    <tr>
                        <td><?= $ten_tai_khoan ?></td>
                        <td><?= $ma_don_hang ?></td>
                        <td><?= $so_luong ?></td>
                        <td><?= $gia_don_hang ?></td>
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('Bạn muốn xóa đơn hàng')" href="?module=backend&controller=don_hang&action=delete&ma_don_hang=<?= $ma_don_hang ?>">Xóa</a>
                        </td>
                    </tr>

                <?php  } ?>
            </tbody>
        </table>
    </div>
</div>