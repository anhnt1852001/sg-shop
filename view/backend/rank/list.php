<!DOCTYPE html>
<html>

<body>
    <div class="heading">
        <h3 style="font-size: 25px; font-weight: bold; font-family: tahoma;">QUẢN LÝ BẬC RANK</h3>
    </div>


    <div class="form-input">
        <form action="" method="post" enctype="multipart/form-data">
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th></th>
                        <th>ID BẬC RANK</th>
                        <th>TÊN BẬC RANK</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <?php foreach ($list_rank as $row) : ?>
                    <tbody>
                        <tr class="text-center">
                            <th><input type="checkbox" name="ma_bac_rank[]" value="<?= $row['ma_bac_rank'] ?>"></th>
                            <td><?= $row['ma_bac_rank'] ?></td>
                            <td><?= $row['ten_bac_rank'] ?></td>
                            <td>
                                <a class="btn btn-success" href="?module=backend&controller=rank&action=edit&id=<?= $row['ma_bac_rank'] ?>">Sửa</a>
                                <a class="btn btn-success" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="?module=backend&controller=rank&action=delete&id=<?= $row['ma_bac_rank'] ?>">
                                    Xóa
                                </a>
                            </td>
                        </tr>

                    </tbody>
                <?php endforeach; ?>
                <tfoot>
                    <tr>
                        <td colspan="4">
                            <button class="btn btn-primary" id="check-all" type="button">Chọn tất cả</button>
                            <button class="btn btn-danger" id="clear-all" type="button">Bỏ chọn tất cả</button>
                            <button onclick="return confirm('Bạn có muốn xóa  không ?')" class="btn btn-success" id="btn-delete" name="btn-delete-multi">Xóa các mục chọn</button>
                            <a class="btn btn-warning" href="?module=backend&controller=rank&action=add">Nhập thêm</a>
                        </td>
                    </tr>
                </tfoot>

            </table>
        </form>
        <ul class=" pagination text-center">
            <li class="page-item"><a class="page-link" href="<?= BASE_URL ?>/?module=backend&controller=rank&action=list&page_no=1">|&lt;</a></li>
            <li class="page-item"><a class="page-link" href="<?= BASE_URL ?>/?module=backend&controller=rank&action=list&page_no=<?= $_SESSION['prev_page'] ?>">
                    <<</a> </li> <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++)
                                        echo '<li class="page-item"><a class="page-link"  href="?module=backend&controller=rank&action=list&page_no=' . $i . '">' . $i . '</a></li>  '
                                    ?> <li class="page-item"><a class="page-link" href="<?= BASE_URL ?>/?module=backend&controller=rank&action=list&page_no=<?= $_SESSION['next_page'] ?>">>></a></li>
            <li class="page-item"><a class="page-link" href="<?= BASE_URL ?>/?module=backend&controller=rank&action=list&page_no=<?= $_SESSION['total_page'] ?>">>|</a></li>
        </ul>
    </div>
</body>

</html>