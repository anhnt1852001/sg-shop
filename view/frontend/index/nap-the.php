<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .list-group .item {
        background: linear-gradient(70deg, red 0%, blue 50%, red 100%);
        background-size: 200%;
        animation: glow 30s linear infinite;
        color: white;
    }

    @keyframes glow {
        0% {
            background-position: 0%;
        }

        100% {
            background-position: 700%;
        }
    }

    .text {
        font-size: 30px;
        font-weight: bold;
        line-height: 1;
        display: inline-block;
        text-align: center;
        color: #fff;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;

    }

    .text1 {
        border: none;
        width: 60%;
        height: 60%;
        text-align: center;
        background-color: #ffff;
    }

    .text1 {
        background: linear-gradient(70deg, #fca5f1 0%, #b5ffff 50%, #fca5f1 100%);
        background-size: 200%;
        animation: glow 10s linear infinite;
        border-radius: 10px;
        color: white;

    }

    @keyframes glow {
        0% {
            background-position: 0%;
        }

        100% {
            background-position: 700%;
        }
    }

    .clip-textGif {
        padding: 10px 10px 10px 10px;
        background-color: white;
        background-image: url(https://i.pinimg.com/originals/75/a6/d8/75a6d836cf49907ec48a13e9e78b0f21.gif);
        text-transform: uppercase;
        font-style: italic
    }

    .gr {
        background-image: url(https://www.elle.vn/wp-content/uploads/2015/10/28/B%C3%AD-%C4%91%E1%BB%8F-Halloween-.jpg);
        background-size: 100% 100%;
        border-radius: 20px;
    }

    .form-group {
        padding: 20px 20px 20px 20px;
    }
</style>

<body>
    <div>
        <div>
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <button type="button" class="list-group-item list-group-item-action item">
                            Nạp Thẻ
                        </button>
                        <a href="http://localhost/sg-shop/?action=lich-su"> <button type="button" class="list-group-item list-group-item-action">Lịch sử nạp thẻ</button></a>
                    </div>
                </div>
                <div class="col-md-9 gr">
                    <form class="form-group" method="post" action="">
                        <center>
                            <div class="text1">
                                <h2 class="text clip-text clip-textGif">CHƯƠNG TRÌNH Nạp Thẻ</h2>
                            </div>
                            <?php echo '<p>' . @$msg . '</p>'  ?>
                        </center>
                        <div class="">
                            <span class=" ">
                                <label for="" class="text-light" style="font-size: 20px; font-weight: bold;">Chọn nhà mạng</label>
                                <div>
                                    <select name="nha_mang" class="border border-gray-500 rounded bg-white text-gray-800 appearance-none w-full  leading-tight focus:outline-none form-control">
                                        <option value="1">Chọn nhà mạng</option>
                                        <option value="Viettel">VIETTEL</option>
                                        <option value="Vinaphone">VINAPHONE</option>
                                        <option value="Mobifone">MOBIFONE</option>
                                    </select>
                                </div>
                            </span>
                            <span class="mb-2 block ">
                                <label for="" class="text-light mt-3" style="font-size: 20px; font-weight: bold;">Mệnh giá</label>
                                <div class="flex items-center relative">
                                    <select name="price" class="border border-gray-500 rounded bg-white text-gray-800 appearance-none w-full leading-tight focus:outline-none form-control">
                                        <option value="1">Chọn mệnh giá</option>
                                        <option value="10000">10.000 VNĐ - (nhận 100%)</option>
                                        <option value="20000">20.000 VNĐ - (nhận 100%)</option>
                                        <option value="30000">30.000 VNĐ - (nhận 100%)</option>
                                        <option value="50000">50.000 VNĐ - (nhận 100%)</option>
                                        <option value="100000">100.000 VNĐ - (nhận 100%)</option>
                                        <option value="200000">200.000 VNĐ - (nhận 100%)</option>
                                        <option value="500000">500.000 VNĐ - (nhận 100%)</option>

                                    </select>
                                </div>
                            </span>
                            <span class="mb-2 block">
                                <label for="" class="text-light mt-3" style="font-size: 20px; font-weight: bold;">Mã số thẻ</label>
                                <div class="flex items-center relative">
                                    <input name="ma_the" placeholder="Mã số thẻ" class="border border-gray-500 rounded bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none form-control"></div>
                            </span>
                            <span class="mb-2 block">
                                <label for="" class="text-light mt-3" style="font-size: 20px; font-weight: bold;">Số serial</label>
                                <div class="flex items-center relative ">
                                    <input name="seri" placeholder="Số serial" class="border border-gray-500 rounded bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none form-control"></div>
                            </span>

                            <div style="color: yellow; font-weight: bold;">Lưu ý hãy chọn đúng mệnh giá. Sai sẽ mất thẻ !!!</div>

                            <button style="font-size: 15px;" name="btn_nap_the" class="btn btn-success mt-3">Nạp Thẻ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>