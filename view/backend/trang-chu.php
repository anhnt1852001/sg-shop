<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2 style="font-size: 25px; font-weight: bold; font-family: tahoma;">Thông Tin Tài Khoản</h2>
    <table class="mt-5 table table-sm">
        <?php $user = $_SESSION['user']  ?>
        <tbody>
            <tr>
                <th scope="row">ID Của Bạn :</th>
                <td><?= $user['ma_kh'] ?></td>

            </tr>
            <tr>
                <th scope="row">Họ và tên</th>
                <td><?= $user['ho_ten'] ?></td>

            </tr>
            <tr>
                <th scope="row">Hình Ảnh :</th>
                <td colspan="2"><img width="100px" height="100px" src="public/image/<?= $user['hinh'] ?>" alt=""></td>

            </tr>
            <tr>
                <th scope="row">Vai Trò :</th>
                <td colspan="2"><?= $user['vai_tro'] ? 'Nhân viên' : 'Khách hàng' ?></td>

            </tr>
            <tr>
                <th scope="row">Ngày Tham Gia :</th>
                <td colspan="2"><?= $user['ngay_sinh'] ?></td>

            </tr>
        </tbody>
    </table>
</body>

</html>