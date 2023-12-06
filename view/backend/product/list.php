<h1 class="" style="font-size: 25px; font-weight: bold; font-family: tahoma;">Danh Sách Nick Game</h1>
<form action="" method="POST" enctype="multipart/form-data">
    <table class="table table-hover">
        <thead>
            <tr class="text-center">
                <th>Check</th>
                <th>ID</th>
                <th>Tên Nick</th>
                <th>Đơn Giá</th>
                <th>Bậc Rank</th>
                <th>Hình ảnh</th>
                <th>Số Lượt Xem</th>
                <th>Mô Tả</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php foreach ($list_product as $row) : ?>
            <tbody>
                <tr class="text-center">
                    <th><input type="checkbox" name="ma_tai_khoan[]" value="<?= $row['ma_tai_khoan'] ?>"></th>
                    <td><?= $row['ma_tai_khoan'] ?></td>
                    <td><?= $row['ten_tai_khoan'] ?></td>

                    <td><?= $row['don_gia'] ?></td>
                    <?php
                    foreach ($list_rank as $rank) {
                        if ($rank['ma_bac_rank'] == $row['ma_bac_rank']) {
                            echo '<td>' . $rank['ten_bac_rank'] . '</td>';
                        }
                    }
                    ?>
                    <td><img width="100" class="img-fluid" src="<?= BASE_URL ?>/public/content/images/product/<?= $row['hinh'] ?>" alt="photo"></td>
                    <td><?= $row['so_luot_xem'] ?></td>
                    <td><?= $row['mo_ta'] ?></td>
                    <td>
                        <a class="btn btn-danger" href="?module=backend&controller=product&action=edit&id=<?= $row['ma_tai_khoan'] ?>">Sửa</a>
                        <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="?module=backend&controller=product&action=delete&id=<?= $row['ma_tai_khoan'] ?>">Xóa</a>
                    </td>
                </tr>

            </tbody>

        <?php endforeach; ?>
        <tfoot>
            <tr>
                <td colspan="10">
                    <button class="btn btn-primary" id="check-all" type="button">Chọn tất cả</button>
                    <button class="btn btn-danger" id="clear-all" type="button">Bỏ chọn tất cả</button>
                    <button onclick="return confirm('Bạn có muốn xóa  không ?')" class="btn btn-success" id="btn-delete" name="btn-delete-multi">Xóa các mục chọn</button>
                    <a class="btn btn-warning" href="?module=backend&controller=product&action=add">Nhập thêm</a>
                </td>
            </tr>
        </tfoot>
    </table>
</form>
<ul class=" pagination text-center">
    <li class="page-item"><a class="page-link" href="<?= BASE_URL ?>/?module=backend&controller=product&action=list&page_no=1">|&lt;</a></li>
    <li class="page-item"><a class="page-link" href="<?= BASE_URL ?>/?module=backend&controller=product&action=list&page_no=<?= $_SESSION['prev_page'] ?>">
            <<< /a>
    </li> <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++)
                echo '<li class="page-item"><a class="page-link"  href="?module=backend&controller=product&action=list&page_no=' . $i . '">' . $i . '</a></li>  '
            ?> <li class="page-item"><a class="page-link" href="<?= BASE_URL ?>/?module=backend&controller=product&action=list&page_no=<?= $_SESSION['next_page'] ?>">>></a></li>
    <li class="page-item"><a class="page-link" href="<?= BASE_URL ?>/?module=backend&controller=product&action=list&page_no=<?= $_SESSION['total_page'] ?>">>|</a></li>
</ul>