<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="public/css/css.css">
    <link rel="stylesheet" href="public/css/css_dropdow.css">
    <style>
        .v-bg-1 {
            background-image: url(public/image/wp4220056-min.png);
            background-size: cover;
            background-position: 50%;
            background-attachment: fixed;
        }


        .v-bg-navbar-hlw {
            background-image: url(public/image/bg_.png);
        }

        .bg-ye {
            background-color: #f2dd07 !important;
            border: 2px solid red;
        }

        p {
            font-size: 16px;
            font-family: system-ui;
        }

        .btn-backtotop {
            position: fixed;
            bottom: 0;
            right: 0;
            color: black;
            background: #FFFF33;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-bottom: 30px;
            margin-right: 30px;
            outline: none;

        }
    </style>
</head>

<body>
    <div class="v-bg-1" style="min-height:100vh;background-color:#000;">
        <header class="relative">

            <?php if (!isset($_SESSION['user'])) {
                require_once "nav1.php";
            } else {
                require_once "nav.php";
            } ?>

        </header>

        <div class="container">
            <?php require_once APP_PATH . '/view/' . $module . '/' . $view_name; ?>
        </div>
        <footer class="c-layout-footer c-layout-footer-3  mt-4">
            <div class="c-prefooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="c-container c-first">
                                <p><strong></strong>&nbsp;<strong><span style="color:#2ecc71">VỀ SG-Shop</span>&nbsp;</strong>&nbsp; &nbsp;<img src="https://scontent.fhan2-6.fna.fbcdn.net/v/t1.0-9/125248082_114778900444115_6410241806068716818_n.png?_nc_cat=100&ccb=2&_nc_sid=09cbfe&_nc_ohc=ltcL6hgTLJYAX-4ie5R&_nc_ht=scontent.fhan2-6.fna&oh=1114be5c4f176e8424349338efbf788b&oe=5FD7C368" style="height:103px; width:100px"></p>
                                <p><span style="color:#e74c3c">HỆ THỐNG BÁN ACC ALL GAME&nbsp;</span></p>

                                <p><span style="color:#e74c3c">&nbsp; &nbsp; &nbsp; ĐẢM BẢO UY TÍN VÀ CHẤT LƯỢNG.</span></p>

                                <ul>
                                    <li><strong><a href=""><span style="color:#e74c3c">Hướng Dẫn Bảo Mật Tài Khoản</span></a></strong></li>
                                    <li><strong><a href=""><span style="color:#e74c3c">Hướng Dẫn Mua Tài Khoản</span></a></strong></li>
                                    <li><strong><a href=""><span style="color:#e74c3c">Hướng Dẫn Mua Nick Trả Góp</span></a></strong></li>
                                    <li><strong><a href=""><span style="color:#e74c3c">Tuyển Đại Lý cung cấp nick tại&nbsp;SG-Shop</span></a></strong></li>
                                    <li><strong><a href="?action=lien-he"><span style="color:#e74c3c">Liên hệ/góp ý</span></a></strong></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="c-container c-last">
                                <h2 style="text-align:center"><span style="color:#ffffff"><strong>CHÚNG TÔI Ở ĐÂY</strong></span></h2>

                                <h2 style="text-align:center"><span style="color:#ffffff"><strong>Chúng tôi làm việc một cách chuyên nghiệp, uy tín, nhanh chóng và luôn đặt quyền lợi của bạn lên hàng đầu</strong></span></h2>

                                <p><a href="/" target="_blank"><img src=""></a>&nbsp;<a href=""><img src=""></a>&nbsp;&nbsp;</p>

                                <p><img src=""><i class="fas fa-phone-square"></i><strong>&nbsp;SĐT: 0816.117.222</strong></p>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0" nonce="aotWXC6u"></script>
                            <div class="fb-page" data-href="https://www.facebook.com/SG-Shop-114776823777656" data-tabs="272" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/SG-Shop-114776823777656" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SG-Shop-114776823777656">SG-Shop</a></blockquote>
                            </div>
                            <p class="mt-3" style="color: #ffff;"> <strong>Link FanPage: <a href="https://www.facebook.com/SG-Shop-114776823777656" style="color: #ffff;">https://www.facebook.com/SG-Shop-114776823777656</a></strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>
<button class="btn-backtotop" id="btn-btt" onclick="scrollToTop();return false"><i class="fas fa-angle-up"></i></button>

<script>
    let timneOut = 0;
    let btn_scroll = document.getElementById("btn-btt");
    hideTop = () => {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("btn-btt").style.display = "block";
        } else {
            document.getElementById("btn-btt").style.display = "none";
        }

    }
    scrollToTop = () => {
        if (document.body.scrollTop != 0 || document.documentElement.scrollTop != 0) {
            window.scrollBy(0, -50);
            timneOut = setTimeout('scrollToTop()', 8);
        } else {
            clearTimeout(timeOut);
        }

    }
</script>

</html>