<!DOCTYPE html>



<html>

<body>
    <div class="">
        <h3 style="font-size: 25px; font-weight: bold; font-family: tahoma;">QUẢN LÝ KHÁCH HÀNG</h3>
    </div>


    <div class="form-input">
        <form action="" method="post" enctype="multipart/form-data">
            <table class="table ">
                <thead>
                    <tr>
                        <th></th>
                        <th>Mã KHÁCH HÀNG</th>
                        <th>TÊN KHÁCH HÀNG</th>
                        <th>NGÀY SINH</th>
                        <th>ĐỊA CHỈ EMAIL</th>
                        <th>HÌNH ẢNH</th>
                        <th>Vai trò</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                        <th>ĐỊA CHỈ</th>
                        <th>Số Dư</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $items = khach_hang_select_all();
                    foreach ($items as $item) {
                        extract($item);
                    ?>
                        <tr>
                            <th><input type="checkbox" style="background-color: black;" name="ma_kh"></th>
                            <td><?= $ma_kh ?></td>
                            <td><?= $ho_ten ?></td>
                            <td><?= $ngay_sinh ?></td>
                            <td><?= $email ?></td>
                            <td> <img width="90" class="img-fluid" src="<?= BASE_URL ?>/public/image/<?= $hinh ?>" alt=""></td>
                            <td><?= $vai_tro ? 'Nhân viên' : 'Khách hàng' ?></td>
                            <td><?= $so_dt ?></td>
                            <td><?= $dia_chi ?></td>
                            <td><?= $so_du ?></td>



                            <td>
                                <a class="btn btn-warning" href="?module=backend&controller=user&action=edit&ma_kh=<?= $item['ma_kh'] ?>" name="sua">Sửa</a>
                                <a class="btn btn-warning" name="delete" onclick="return confirm('Bạn Có Chắc xóa Không?')" href="?module=backend&controller=user&action=delete&ma_kh=<?= $item['ma_kh'] ?>">Xóa</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=" 11">
                            <button class="btn btn-primary" id="check-all" type="button">Chọn tất cả</button>
                            <button class="btn btn-danger" id="clear-all" type="button">Bỏ chọn tất cả</button>
                            <button class="btn btn-success" id="delete" name="delete">Xóa các mục chọn</button>
                            <a class="btn btn-warning" href="?module=backend&controller=user&action=add">Nhập thêm</a>

                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
    <ul class=" pagination text-center">
        <li class="page-item"><a class="page-link" href="<?= BASE_URL ?>/?module=backend&controller=user&action=list&page_no=1">|&lt;</a></li>
        <li class="page-item"><a class="page-link" href="<?= BASE_URL ?>/?module=backend&controller=user&action=list&page_no=<?= $_SESSION['prev_page'] ?>">
                <<</a> </li> <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++)
                                    echo '<li class="page-item"><a class="page-link"  href="?module=backend&controller=user&action=list&page_no=' . $i . '">' . $i . '</a></li>  '
                                ?> <li class="page-item"><a class="page-link" href="<?= BASE_URL ?>/?module=backend&controller=user&action=list&page_no=<?= $_SESSION['next_page'] ?>">>></a></li>
        <li class="page-item"><a class="page-link" href="<?= BASE_URL ?>/?module=backend&controller=user&action=list&page_no=<?= $_SESSION['total_page'] ?>">>|</a></li>
    </ul>
</body>


</html>