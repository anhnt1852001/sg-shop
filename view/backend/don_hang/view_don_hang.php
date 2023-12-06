<h3 class="" style="font-size: 25px; font-weight: bold; font-family: tahoma;">Danh Sách Đơn Hàng</h3>
<div class="">
    <div class="right__tableWrapper">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Tổng tiền</th>
                    <th>Ngày thêm</th>
                    <th>Chi tiết</th>
                    <th>Xóa</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($rows_don_hang as $row_don_hang) {
                    extract($row_don_hang);
                ?>
                    <tr>
                        <td><?= $ma_don_hang ?></td>
                        <td><?= $ho_ten ?></td>
                        <td><?= $email ?></td>
                        <td><?= $dia_chi ?></td>
                        <td><?= $tong_tien ?></td>
                        <td><?= date_format(date_create($ngay_thang), 'd-m-Y') ?></td>
                        <td>
                            <a class="btn btn-success" href="?module=backend&controller=don_hang&action=detail&ma_don_hang=<?= $ma_don_hang ?>">xem</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" onclick="return confirm('Bạn muốn xóa đơn hàng')" href="?module=backend&controller=don_hang&action=delete&ma_don_hang=<?= $ma_don_hang ?>">Xóa</a>
                        </td>
                    </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>
</div>