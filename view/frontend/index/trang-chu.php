<?php
require_once APP_PATH . '/model/product_model.php';

?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/public/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/public/css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/public/css/abc.css" />

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
</head>

<body class="bg">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="public/image/slide.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="public/image/slide 2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="public/image/slide3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container mt-3" style="color: red; font-size: 16px;  font-weight: bold;">
        HÃY ĐỌC KỸ CHÚ Ý DƯỚI KHI MUA TÀI KHOẢN!
        <div class="bg-ye rounded-sm text-xl mt-2 ">
            <div class="text-md ml-4 mt-2 mb-2" style="color: black;">
                <p><strong style="color: rgb(0, 102, 204);">Acc Trắng Thông Tin 100% - Nếu mua acc có SĐT vui lòng inbox vào fanpage để được hỗ trợ đổi thông tin ngay lập tức</strong></p>
            </div>
        </div>
    </div>
    <form class="form-inline my-2 my-lg-0" method="get" action="">
        <div class="sel sel--black-panther">
            <select name="keyword" id="select-profession">
                <option value="" disabled>Chọn Bậc Rank</option>
                <option value="Bạch Kim">Bạch Kim</option>
                <option value="Kim Cương">Kim Cương</option>
                <option value="Cao Thủ">Cao Thủ</option>
                <option value="Thách Đấu">Thách Đấu</option>
            </select>
        </div>
        <button class="ml-2 btn btn-primary mt-2" name="timkiem" style="font-size: 15px;">Tìm Kiếm</button>
    </form>
    <section>
        <div class="container ">
            <h3 class="text-center" style="color: #ffff;font-size: 30px;font-weight: bold;">Tài Khoản Nổi Bật</h3>
            <div class="text-center mt-3">
                <img src="public/image/v-line-home-hlw.png" class="w-full relative v-position-line-navbar " alt="" width="100%">
            </div>

        </div>

        <div class="module-border-wrap">
            <div class="autoplay">
                <?php
                require_once APP_PATH . '/library/functions.php';
                require_once APP_PATH . '/model/product_model.php';
                require_once APP_PATH . '/controller/backend/product.php';
                $list_product = product_list_all();
                foreach ($list_product as $row) {
                ?>

                    <div class="card-deck p-1 ">
                        <div class="card">
                            <a href="?module=frontend&controller=chi-tiet&action=sp_view&ma_tai_khoan=<?= $row['ma_tai_khoan'] ?>">
                                <img class="img-fluid" src="<?= BASE_URL ?>/public/content/images/product/<?= $row['hinh'] ?>" alt="">
                            </a>
                            <div class="card-body" style="background: black;">
                                <div style="font-size:18px;color: #B31919; font-weight: bold;">Mã Tài Khoản:
                                    <?= $row['ma_tai_khoan'] ?>
                                </div>
                                <div style="font-size:15px;color: #fff;"> Tên Tài Khoản:
                                    <?= $row['ten_tai_khoan'] ?>
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
                                    <p style="color:red; font-size:20px; font-weight: bold;"><?= $row['don_gia'] ?>VNĐ</p>

                                    <div>
                                        <a href="?module=frontend&controller=chi-tiet&action=sp_view&ma_tai_khoan=<?= $row['ma_tai_khoan'] ?>">
                                            <button style="font-size:20px;" type="button" class="btn btn-info">XEM</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-5">
            <h3 class="text-center" style="color: #ffff;font-size: 30px;font-weight: bold;">Danh Mục Tài Khoản</h3>
            <div class="text-center mt-3">
                <img src="public/image/v-line-home-hlw.png" class="w-full relative v-position-line-navbar " alt="" width="100%">
            </div>
        </div>
        <div class="row">
            <?php
            require_once APP_PATH . '/library/functions.php';
            require_once APP_PATH . '/model/product_model.php';
            require_once APP_PATH . '/controller/backend/product.php';
            if (isset($_GET['timkiem'])) {
                $keyword = $_GET['keyword'];
                $list_product1 = product_select_keyword($keyword);
            } else {
                $list_product1 = product_list_all();
            }
            foreach ($list_product1 as $row) {
                extract($row);
            ?>
                <div class="col-3 d-block  mt-3">
                    <div class='card-deck'>
                        <div class="card">
                            <a href="?module=frontend&controller=chi-tiet&action=sp_view&ma_tai_khoan=<?= $row['ma_tai_khoan'] ?>">
                                <img class="img-fluid" src="<?= BASE_URL ?>/public/content/images/product/<?= $row['hinh'] ?>" alt="">
                            </a>
                            <div class="card-body" style="background: black;">
                                <div style="font-size:18px;color: #B31919; font-weight: bold;">Mã Tài Khoản:
                                    <?= $row['ma_tai_khoan'] ?>
                                </div>
                                <div class="mt-2" style="font-size:15px;color: #fff; "> Tên Tài Khoản:
                                    <?= $row['ten_tai_khoan'] ?>
                                </div>
                                <div class="d-flex justify-content-between mt-2 mb-2">
                                    <div style="font-size:15px; color: #fff;">
                                        Tướng: 164
                                    </div>
                                    <div style="font-size:15px;color: #fff;">
                                        Trang Phục: 430
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between" style="font-size:15px;color: #fff;">
                                    <p style="color:red; font-size:20px; font-weight: bold;"><?= $row['don_gia'] ?>VNĐ</p>

                                    <div>
                                        <a href="?module=frontend&controller=chi-tiet&action=sp_view&ma_tai_khoan=<?= $row['ma_tai_khoan'] ?>">
                                            <button style="font-size:20px;" type="button" class="btn btn-info">XEM</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

    </section>
    <section>
        <div class="container mt-5">
            <h3 class="text-center" style="color: #ffff;font-size: 30px;font-weight: bold;">Trò Chơi Nhân Phẩm</h3>
            <div class="text-center mt-3">
                <img src="public/image/v-line-home-hlw.png" class="w-full relative v-position-line-navbar " alt="" width="100%">
            </div>
        </div>
        <div class="col-3 d-block  mt-3">
            <div class='card-deck'>
                <div class="card">
                    <a href="?module=frontend&controller=vong_quay&action=vongquay">
                        <img src="public/image/image-2b865ddd-84cb-4ae2-93dd-bc33a9382c1e.gif" alt="" class="img-fluid">
                    </a>
                    <div class="card-body" style="background: black;">
                        <div class="text-light text-center" style="font-weight: bold;">
                            <h3>Vòng Quay Nhân Phẩm</h3>
                            <h4>Lượt chơi: 3,554</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>/public/js/slick.min.js"></script>
    <script src="public/js/abc.js"></script>
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