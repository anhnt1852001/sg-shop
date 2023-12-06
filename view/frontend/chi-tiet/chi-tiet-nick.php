<!DOCTYPE html>
<html lang="en">
<style>
    .module-border-wrap {
        max-width: 100%;
        padding: 1rem;
        position: relative;
        background: linear-gradient(70deg, red 0%, blue 50%, red 100%);
        padding: 5px;
        background-size: 200%;
        animation: glow 10s linear infinite;
        border-radius: 5px;
    }

    @keyframes glow {
        0% {
            background-position: 0%;
        }

        100% {
            background-position: 700%;
        }
    }

    .module {
        background: #222;
        color: white;
        padding: 2rem;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/public/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/public/css/slick-theme.css" />
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Tài khoản</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Tướng</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Trang phục</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Thông tin khác</a>
            </div>
        </div>
        <div class="col-8">
            <div class="d-flex justify-content-between">
                <div class="d-flex justify-content-start">
                    <h4 class="text-light ">CARD:</h4>
                    <h3 class="text-light ml-3 " style="font-size: 20px; ">
                        <?= $row_sp_ma_sp['don_gia'] ?> -
                    </h3>
                    <h4 class="text-light ml-3 ">ATM: </h4>
                    <h3 class="text-light  ml-3" style=" font-size: 20px; "> 248000 VNĐ</h3>
                </div>
                <div class=" d-flex justify-content-end">
                    <div>
                        <h4 class="text-light mr-2">Rank:</h4>
                        <h3 class="text-light mr-2">
                            <?= $row_sp_ma_sp['ten_bac_rank'] ?>
                        </h3>
                    </div>

                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <table class="mt-2 table table-sm">
                        <tbody class="text-light">
                            <tr>
                                <th scope="row">Mã nick :</th>
                                <td><?= $row_sp_ma_sp['ma_tai_khoan'] ?></td>

                            </tr>
                            <tr>
                                <th scope="row">Tên nick :</th>
                                <td><?= $row_sp_ma_sp['ten_tai_khoan'] ?> </td>

                            </tr>
                            <tr>
                                <th scope="row">Tướng :</th>
                                <td colspan="2">84</td>

                            </tr>
                            <tr>
                                <th scope="row">Hình ảnh :</th>
                                <td colspan="2"><img width="100" class="img-fluid" src="<?= BASE_URL ?>/public/content/images/product/<?= $row_sp_ma_sp['hinh'] ?>" alt=""></td>

                            </tr>
                        </tbody>
                    </table>
                </div>
                <form action="?module=frontend&controller=cart&action=add" method="post">
                    <div>
                        <span class="text-light" style="font-weight: bold;">Số lượng:
                            <div class="family">
                                <div class="buttons_added">
                                    <!-- <input class="minus is-form" type="button" value="-"> -->

                                    <input style="border-radius: 5px; height: 30px; width: 100px;" aria-label="so_luong" class="input-qty" max="100" min="1" name="so_luong[<?= $row_sp_ma_sp['ma_tai_khoan'] ?>]" type="number" value="1">

                                    <!-- <input class="plus is-form" type="button" value="+"> -->
                                </div>
                            </div>
                        </span>
                    </div>
                    <hr>
                    <button class="btn btn-primary" type="submit" style="font-size: 15px;">Thêm giỏ hàng</button>
                </form>

                <div class="tab-pane fade text-center" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <div class="v-account-detail-1 d-flex align-content-start flex-wrap">
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-8809cc86-51b1-4afe-85cc-ee5ad785ff3e.png" class="lazyLoad isLoaded">
                            <div>
                                <p><span class="block">Akali</span></p>
                            </div>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-2d9ba5e2-1d1f-40f7-8d96-9bc796ed2eb0.png" class="lazyLoad isLoaded">
                            <p><span class="block">Amumu</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-e7d2a49d-8f0d-4704-8959-ecf6cb5c9efc.png" class="lazyLoad isLoaded">
                            <p><span class="block">Ashe</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-cb6e71c4-306c-401e-a9e2-1d458bc6b960.png" class="lazyLoad isLoaded">
                            <p><span class="block">Caitlyn</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-ac4123d3-3999-4ae1-a568-d4729c1c4a32.png" class="lazyLoad isLoaded">
                            <p><span class="block">Darius</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-8930d7ba-ae1f-4102-8cf0-083178a9e8ec.png" class="lazyLoad isLoaded">
                            <p><span class="block">DrMundo</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-0af5163c-db32-4d0c-9768-54506a40c21e.png" class="lazyLoad isLoaded">
                            <p><span class="block">Evelynn</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-d35b7e23-d249-430c-b570-b9ffd91ed412.png" class="lazyLoad isLoaded">
                            <p><span class="block">Ezreal</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-481ff858-1cc9-427d-80e8-22a8afa168b9.png" class="lazyLoad isLoaded">
                            <p><span class="block">Galio</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-fa008a8c-f7a8-4c6b-992b-3c68e64b36d8.png" class="lazyLoad isLoaded">
                            <p><span class="block">Garen</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-bde0cfa7-17e8-4108-a2f2-c5780d6974e4.png" class="lazyLoad isLoaded">
                            <p><span class="block">Hecarim</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-9a71d61f-d91b-4170-a949-4d48e7d0daf3.png" class="lazyLoad isLoaded">
                            <p><span class="block">Janna</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-0688223e-6ea0-4521-8bca-ed053f174f3f.png" class="lazyLoad isLoaded">
                            <p><span class="block">Jax</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-05ada5cd-58e6-4d1f-8ac4-db460a50b9c3.png" class="lazyLoad isLoaded">
                            <p><span class="block">Kayle</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-10e7ed64-fa6b-47c7-b9f9-bd18cb165e94.png" class="lazyLoad isLoaded">
                            <p><span class="block">Kayn</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-675abdd5-26f7-4cfb-bccf-cd1a556b35a2.png" class="lazyLoad isLoaded">
                            <p><span class="block">Lucian</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-daab627a-fafa-40ef-8bca-bdd6d355e6e1.png" class="lazyLoad isLoaded">
                            <p><span class="block">Malphite</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-5708f65e-d25d-4e34-a6ce-6af3875bdfc0.png" class="lazyLoad isLoaded">
                            <p><span class="block">MasterYi</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-6a8ad689-c7ce-483b-9c80-76d73c40ae7d.png" class="lazyLoad isLoaded">
                            <p><span class="block">MissFor</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-a2935850-480b-432e-9b88-4444813dc1d9.png" class="lazyLoad isLoaded">
                            <p><span class="block">KKaiser</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-d45bbb28-8d3c-4089-b3e5-c45d024b0a0a.png" class="lazyLoad isLoaded">
                            <p><span class="block">Morga</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-bb9d9ee0-8223-4acd-95a0-de441eee9136.png" class="lazyLoad isLoaded">
                            <p><span class="block">Nasus</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-bf338114-7cfd-4590-90d7-3b24c74539b9.png" class="lazyLoad isLoaded">
                            <p><span class="block">Nida</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-948984df-12dd-42d8-9704-6a22a9f54dbb.png" class="lazyLoad isLoaded">
                            <p><span class="block">Nunu</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-82428216-1a8a-4899-98b7-92cf334e4f0a.png" class="lazyLoad isLoaded">
                            <p><span class="block">Panth</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-dada06c4-da4c-452c-833a-f91d7711183d.png" class="lazyLoad isLoaded">
                            <p><span class="block">Poppy</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-7da350cc-c2cc-439c-9959-c3df9f247dd1.png" class="lazyLoad isLoaded">
                            <p><span class="block">Pyke</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-672b0ec8-dd2f-4ebd-9f0b-7ff468968ba9.png" class="lazyLoad isLoaded">
                            <p><span class="block">Rammus</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-9d9eb92d-8865-46d6-9f1c-74c571a259f2.png" class="lazyLoad isLoaded">
                            <p><span class="block">Ryze</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-7b189255-5a90-4aa0-8643-0d35664af2aa.png" class="lazyLoad isLoaded">
                            <p><span class="block">Shaco</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-5745c3e3-a23e-4a02-b4ff-89b3e7e2653a.png" class="lazyLoad isLoaded">
                            <p><span class="block">Shen</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-56a53214-f84f-43fd-b599-3196cdd07a26.png" class="lazyLoad isLoaded">
                            <p><span class="block">Sing</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-06098c18-c27d-4ba3-aa6f-bb2b4d33f40f.png" class="lazyLoad isLoaded">
                            <p><span class="block">Sion</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-b3163afb-c98a-4c6c-9f39-0fe5a0ec2819.png" class="lazyLoad isLoaded">
                            <p><span class="block">Sivir</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-a69eda3c-3306-49d7-a30b-7d07f3ebf57e.png" class="lazyLoad isLoaded">
                            <p><span class="block">Sona</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-0e382192-058a-42ae-acd3-5f52d824f036.png" class="lazyLoad isLoaded">
                            <p><span class="block">Soraka</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-6a047c54-eef0-4a89-8c45-529f655ebd1b.png" class="lazyLoad isLoaded">
                            <p><span class="block">Sylas</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-473b59dc-31b5-4a5d-862e-fcddb134478f.png" class="lazyLoad isLoaded">
                            <p><span class="block">Syndra</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-c0dcc490-4b70-4da5-8fdc-3f65a8db09b2.png" class="lazyLoad isLoaded">
                            <p><span class="block">Teemo</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-a9af254e-bc0b-4a10-be05-686d780d11f5.png" class="lazyLoad isLoaded">
                            <p><span class="block">Tristana</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-1683bc50-b72f-4b39-b654-24463d4e6b84.png" class="lazyLoad isLoaded">
                            <p><span class="block">Trynda</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-63cbe131-a20a-4374-ab39-f1ea0e0c6427.png" class="lazyLoad isLoaded">
                            <p><span class="block">Twisted</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-36b2820e-52dd-460f-8617-c40ab76ba4f3.png" class="lazyLoad isLoaded">
                            <p><span class="block">Udyr</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-23153759-5b35-44db-93f6-d5e4e3d15d65.png" class="lazyLoad isLoaded">
                            <p><span class="block">Veigar</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-6c6c2832-d52c-4570-8e36-cb97f0901a50.png" class="lazyLoad isLoaded">
                            <p><span class="block">Warwick</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-e4818c5e-f7c0-4af6-80a8-d3cde885c229.png" class="lazyLoad isLoaded">
                            <p><span class="block">Xayah</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-4681b54c-8ece-48cd-a131-f9e083bbe6b2.png" class="lazyLoad isLoaded">
                            <p><span class="block">XinZhao</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-81aa8915-993b-4e7e-bcef-f10fbfe57d4a.png" class="lazyLoad isLoaded">
                            <p><span class="block">Yasuo</span></p>
                        </div>
                        <div class="  justify-content col-span-3 sm:col-span-2 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-98ba5a58-f973-43ea-9ba9-d738c6d758e8.png" class="lazyLoad isLoaded">
                            <p><span class="block">Zed</span></p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade text-center" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                    <div class="v-account-detail-1 d-flex align-content-start flex-wrap">
                        <div class="col-span-4 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-d0b2b858-e3a8-4654-ac08-2daeafc267c3.jpeg" class="w-full lazyLoad isLoaded">
                            <p><span class="block">Annie Gấu Bé Bỏng</span></p>
                        </div>
                        <div class="col-span-4 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-e70d6932-2b9b-4c6f-96ca-dd11e7ef5c09.jpeg" class="w-full lazyLoad isLoaded">
                            <p><span class="block">Annie Sinh Nhật</span></p>
                        </div>
                        <div class="col-span-4 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-31d76325-b7a6-41e2-b373-e2bd0c6c3547.jpeg" class="w-full lazyLoad isLoaded">
                            <p><span class="block">Fiddlesticks TC</span></p>
                        </div>
                        <div class="col-span-4 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-3f9ec51c-f3a5-40b2-a6d9-df53e8abd2b5.jpeg" class="w-full lazyLoad isLoaded">
                            <p><span class="block">Master Yi Sát Thủ</span></p>
                        </div>
                        <div class="col-span-4 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-9b699c51-1a4e-426d-9f63-bd9c1c99d176.jpeg" class="w-full lazyLoad isLoaded">
                            <p><span class="block">Master Yi Thợ Săn </span></p>
                        </div>
                        <div class="col-span-4 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-f95e6d02-f3f7-42ca-a44c-364ab264bd45.jpeg" class="w-full lazyLoad isLoaded">
                            <p><span class="block">Master Yi Kiếm Sĩ</span></p>
                        </div>
                        <div class="col-span-4 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-c08f5b35-fd12-4570-96de-9af5325378b3.jpeg" class="w-full lazyLoad isLoaded">
                            <p><span class="block">Sion Tiều Phu</span></p>
                        </div>
                        <div class="col-span-4 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-a0f86603-45a6-44f0-af07-c7df805d0da9.jpeg" class="w-full lazyLoad isLoaded">
                            <p><span class="block">Sion Chiến Thần</span></p>
                        </div>
                        <div class="col-span-4 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-b6b2cbf2-637b-4146-b315-ea62c7847578.jpeg" class="w-full lazyLoad isLoaded">
                            <p><span class="block">Soraka Tử Thần</span></p>
                        </div>
                        <div class="col-span-4 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-b954c9d4-5741-4f1c-8042-a5092345012d.jpeg" class="w-full lazyLoad isLoaded">
                            <p><span class="block">Miss Fortune Nữ CB</span></p>
                        </div>
                        <div class="col-span-4 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-f4a2d60d-8b42-4697-b71b-f3cbf9247a9f.jpeg" class="w-full lazyLoad isLoaded">
                            <p><span class="block">Cho'Gath Cỗ Máy HD</span></p>
                        </div>
                        <div class="col-span-4 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-cce1ddfc-803f-467e-905b-5bafb7c42c33.jpeg" class="w-full lazyLoad isLoaded">
                            <p><span class="block">Shaco Hoàng Gia</span></p>
                        </div>
                        <div class="col-span-4 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-fc06fb7a-aea7-4c46-87f4-d995fc27932b.jpeg" class="w-full lazyLoad isLoaded">
                            <p><span class="block">Shaco Hắc Tinh</span></p>
                        </div>
                        <div class="col-span-4 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-cea3de46-18e2-48a0-b9e3-59af5cabbff7.jpeg" class="w-full lazyLoad isLoaded">
                            <p><span class="block">Ezreal Vệ Binh Tinh Tú</span></p>
                        </div>
                        <div class="col-span-4 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-2b7d094a-83c7-4615-a0f1-9178b0aef36c.jpeg" class="w-full lazyLoad isLoaded">
                            <p><span class="block">Mordekaiser Địa Ngục</span></p>
                        </div>
                        <div class="col-span-4 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-d15c27a4-75f0-4622-802b-6844c62727a4.jpeg" class="w-full lazyLoad isLoaded">
                            <p><span class="block">Pentakill Mordekaiser</span></p>
                        </div>
                        <div class="col-span-4 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-a18b6a3c-4ff9-4b47-8ec5-7bc89ca88891.jpeg" class="w-full lazyLoad isLoaded">
                            <p><span class="block">Garen Huyết Kiếm</span></p>
                        </div>
                        <div class="col-span-4 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-96e3b02f-fb3c-4ab3-99bf-5db7d18cae44.jpeg" class="w-full lazyLoad isLoaded">
                            <p><span class="block">Garen Biệt Kích</span></p>
                        </div>
                        <div class="col-span-4 md:col-span-1 border border-gray-400"><img src="https://cdns.vtteam.net/image-6567b9be-145b-4c0b-a675-3bf58d433b1f.jpeg" class="w-full lazyLoad isLoaded">
                            <p><span class="block">Shen Hoàng Kim Giáp</span></p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Chưa có thông tin khác</div>
            </div>
        </div>
    </div>
    <div class="comment p-3 mt-4" style="background-color: white;">
        <h2>BÌNH LUẬN</h2>
        <div class="comment-user mb-4 mt-4">

            <?php foreach ($rows_sp_bl as $row_bl) {
                extract($row_bl) ?>
                <li class='list-group-item' style="background-color: rgb(247, 247, 247);"> <?= $noi_dung ?> <i class='pull-right float-right'><b><?= $ma_kh ?></b>, <?= date_format(date_create($ngay_bl), "d-m-Y") ?></i></li>
            <?php } ?>
        </div>
        <form class="row" action="?module=frontend&controller=chi-tiet&action=sp_bl&ma_tai_khoan=<?= $row_sp_ma_sp['ma_tai_khoan'] ?>" method="post">
            <div class="form-group col-md-10">
                <input type="text" name="noi_dung" class="form-control">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary mb-2" name="btn_send_bl">Gửi</button>
            </div>
        </form>
    </div>
    <div>
        <h2 class="text-center mt-4 mb-3 text-light"> NICK GAME CÙNG BẬC RANK</h2>
    </div>
    <div class="module-border-wrap">
        <div class="autoplay">

            <?php foreach ($rows_sp_ma_dm as $row_sp) { ?>
                <div class="card-deck p-1 ">
                    <div class="card">
                        <a href="?module=frontend&controller=chi-tiet&action=sp_view&ma_tai_khoan=<?= $row_sp['ma_tai_khoan'] ?>">
                            <img class="img-fluid" src="<?= BASE_URL ?>/public/content/images/product/<?= $row_sp['hinh'] ?>" alt="">
                        </a>
                        <div class="card-body" style="background: black;">
                            <div style="font-size:18px;color: #B31919; font-weight: bold;">Mã Tài Khoản:
                                <?= $row_sp['ma_tai_khoan'] ?>
                            </div>
                            <div style="font-size:15px;color: #fff;"> Tên Tài Khoản:
                                <?= $row_sp['ten_tai_khoan'] ?>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div style="font-size:15px;color: #fff;">
                                    Tướng: 164
                                </div>
                                <div style="font-size:15px;color: #fff;">
                                    Trang Phục: 430
                                </div>
                            </div>
                            <div class="d-flex justify-content-between" style="font-size:15px;color: #fff;">
                                <p style="color:red; font-size:20px; font-weight: bold;"><?= $row_sp['don_gia'] ?>VNĐ</p>

                                <div>
                                    <a href="?module=frontend&controller=chi-tiet&action=sp_view&ma_tai_khoan=<?= $row_sp['ma_tai_khoan'] ?>">
                                        <button style="font-size:20px;" type="button" class="btn btn-info">XEM</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>/public/js/slick.min.js"></script>
    <script>
        $('.autoplay').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    </script>
</body>

</html>