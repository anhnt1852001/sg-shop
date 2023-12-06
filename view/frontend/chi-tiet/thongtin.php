<!DOCTYPE html>
<html lang="en">
<style>
    .community_home_search_divider {
        width: 100%;
        height: 1px;
        border-top: 1px solid #FFFF;
        margin: 35px 0;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2 class="text-light" style="font-size: 30px;">Thanh Toán Thành Công</h2>
    <h3 class="text-light mb-5" style="font-size: 25px;">Thông Tin Tài Khoản</h3>
    <h4 class="text-light" style="font-size: 20px;">Tên nick:
        <td><?= $row_sp_ma_sp['ten_tai_khoan'] ?> </td>
    </h4>
    <div class="community_home_search_divider"></div>
    <h4 class="text-light" style="font-size: 20px;">Mật Khẩu:
        <td><?= $row_sp_ma_sp['password'] ?> </td>
    </h4>
    <div class="community_home_search_divider"></div>
    <h4 class="text-light" style="font-size: 20px;">Hình Ảnh:
        <td><img class="img-fluid" src="<?= BASE_URL ?>/public/content/images/product/<?= $row_sp_ma_sp['hinh'] ?>" alt=""> </td>
    </h4>
</body>

</html>