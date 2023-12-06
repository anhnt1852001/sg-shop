<!DOCTYPE html>
<html>

<head>
    <script src=""></script>


</head>

<body>
    <div class=" text-center">
        <h3 class="" style="font-size: 25px; font-weight: bold; font-family: tahoma;">THỐNG KÊ NICK GAME TỪNG BẬC</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th>BẬC RANK</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tk as $row_tk) {
                        extract($row_tk) ?>
                        <tr>
                            <th><?= $ten_bac_rank ?></th>
                            <th><?= $tong_tai_khoan ?></th>
                            <th><?= $gia_cao_nhat ?></th>
                            <th><?= $gia_thap_nhat ?></th>
                            <th><?= $gia_trung_binh ?></th>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a class="btn btn-primary" href="?module=backend&controller=thong-ke&action=chart">Xem biểu đồ</a>
        </form>
    </div>
</body>

</html>