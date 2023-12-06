<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/typo/typo.css" />
    <link rel="stylesheet" href="public/css/hc-canvas-luckwheel.css" />
</head>
<style>
    .test {
        width: 550px;
        height: 400px;
        overflow-x: hidden;
        overflow-y: auto;
    }
</style>

<body>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="container">
                <h3 style="color: red;padding-bottom: 5px;font-weight: bold;">VÒng Quay Nhân Phẩm</h3>
            </div>
            <div class="wrapper typo" id="wrapper">
                <section id="luckywheel" class="hc-luckywheel">
                    <div class="hc-luckywheel-container">
                        <canvas class="hc-luckywheel-canvas" width="500px" height="500px"></canvas>
                    </div>
                    <a class="hc-luckywheel-btn" href="javascript:;" style="text-decoration: none;">Xoay</a>
                </section>
            </div>
            </style>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script src="public/js/hc-canvas-luckwheel.js"></script>
            <script>
                var isPercentage = true;
                var prizes = [{
                        text: "Yasuo lãng khách ",
                        img: "public/image/yslk.jpg",
                        number: 1, // 1%,
                        percentpage: 0.01 // 1%
                    },
                    {
                        text: "Skin ngẫu nhiên",
                        img: "public/image/nn.jpg",
                        number: 1,
                        percentpage: 0.05 // 5%
                    },
                    {
                        text: "Leesin nộ long cước",
                        img: "public/image/ls.jpg",
                        number: 1,
                        percentpage: 0.1 // 10%
                    },
                    {
                        text: "Nhận được 1000 rp",
                        img: "public/image/rp.jpg",
                        number: 1,
                        percentpage: 0.24 // 24%
                    },
                    {
                        text: "Yone Tả Ảnh Song Kiếm",
                        img: "public/image/ynlk.jpg",
                        number: 1,
                        percentpage: 0.24 // 24%
                    },
                    {
                        text: "Chúc bạn may mắn lần sau",
                        img: "public/image/miss.png",
                        percentpage: 0.6 // 60%
                    },
                ];
                document.addEventListener(
                    "DOMContentLoaded",
                    function() {
                        hcLuckywheel.init({
                            id: "luckywheel",
                            config: function(callback) {
                                callback &&
                                    callback(prizes);
                            },
                            mode: "both",
                            getPrize: function(callback) {
                                var rand = randomIndex(prizes);
                                var chances = rand;
                                callback && callback([rand, chances]);
                            },
                            gotBack: function(data) {
                                if (data == null) {
                                    Swal.fire(
                                        'Chương trình kết thúc',
                                        'Đã hết phần thưởng',
                                        'error'
                                    )
                                } else if (data == 'Chúc bạn may mắn lần sau') {
                                    Swal.fire(
                                        'Bạn không trúng thưởng',
                                        data,
                                        'error'
                                    )
                                } else {
                                    Swal.fire(
                                        'Đã trúng giải',
                                        data,
                                        'success'
                                    )
                                }
                            }
                        });
                    },
                    false
                );

                function randomIndex(prizes) {
                    if (isPercentage) {
                        var counter = 1;
                        for (let i = 0; i < prizes.length; i++) {
                            if (prizes[i].number == 0) {
                                counter++
                            }
                        }
                        if (counter == prizes.length) {
                            return null
                        }
                        let rand = Math.random();
                        let prizeIndex = null;
                        console.log(rand);
                        switch (true) {
                            case rand < prizes[4].percentpage:
                                prizeIndex = 4;
                                break;
                            case rand < prizes[4].percentpage + prizes[3].percentpage:
                                prizeIndex = 3;
                                break;
                            case rand < prizes[4].percentpage + prizes[3].percentpage + prizes[2].percentpage:
                                prizeIndex = 2;
                                break;
                            case rand < prizes[4].percentpage + prizes[3].percentpage + prizes[2].percentpage + prizes[1].percentpage:
                                prizeIndex = 1;
                                break;
                            case rand < prizes[4].percentpage + prizes[3].percentpage + prizes[2].percentpage + prizes[1].percentpage + prizes[0].percentpage:
                                prizeIndex = 0;
                                break;
                        }
                        if (prizes[prizeIndex].number != 0) {
                            prizes[prizeIndex].number = prizes[prizeIndex].number - 1
                            return prizeIndex
                        } else {
                            return randomIndex(prizes)
                        }
                    } else {
                        var counter = 0;
                        for (let i = 0; i < prizes.length; i++) {
                            if (prizes[i].number == 0) {
                                counter++
                            }
                        }
                        if (counter == prizes.length) {
                            return null
                        }
                        var rand = (Math.random() * (prizes.length)) >>> 0;
                        if (prizes[rand].number != 0) {
                            prizes[rand].number = prizes[rand].number - 1
                            return rand
                        } else {
                            return randomIndex(prizes)
                        }
                    }
                }
            </script>
        </div>
        <div class="col-md-6">
            <div>
                <h3 class="text-light" style="font-size: 25px; font-weight: bold;">Thể Lệ trò chơi</h3>
                <p>1 Lần Quay = 20k - KHI BẠN CÓ ĐỦ 20K THÌ BẠN CÓ THỂ MUA ĐƯỢC 1 LƯỢT QUAY , BẠN CHỈ CẦN NHẤP QUAY LÀ NÓ QUAY VÀ NÓ SẼ TRỪ TIỀN VÀO LẦN QUAY BẠN NHẤN .
                    VÒNG QUAY SẼ XẢY RA LỖI KHI QUAY VÀO SAI Ô NHƯNG QUÀ BẠN SẼ NHẬN ĐƯỢC NÓ SẼ HIỆN LÊN BẢNG THÔNG BÁO VÀ NẰM TRONG LỊCH SỬ NHẬN QUÀ CỦA BẠN NHÉ . VUI LÒNG KHÔNG THẮC MẮC VẤN ĐỀ NÀY BỞI VÌ VÒNG QUAY RẤT ÍT NÊN TỈ LỆ NÓ RA NGON NHIỀU SẼ CÓ LÚC QUAY RA LỖI NHƯ VẬY NHÉ .
                    Sau khi quay xong, bạn mún chuyển RP về tài khoản của mình thì nhấn vào ( Đổi RP về tài khoản của bạn) ở ngay bên GÓC BÊN PHẢI MÀN HÌNH ( CHỖ HIỆN ID CỦA KHÁCH )</p>
            </div>
            <div class="mt-8 w-full">
                <h3 id="modal-headline" class="text-2xl font-bold">
                    <p class="vth-list-title text-gray-900 mt-3">LƯỢT CHƠI GẦN ĐÂY</p>
                    <div class="test mt-3">
                        <table class="table table-hover">
                            <thead>
                                <tr class="border-b-2 border-gray-400">
                                    <th class="text-center" style="color: red; font-size: 18px;">
                                        TÀI KHOẢN
                                    </th>
                                    <th class="text-center" style="color: red; font-size: 18px;">
                                        GIẢI THƯỞNG
                                    </th>
                                    <th class="text-center" style="color: red; font-size: 18px;">
                                        THỜI GIAN
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-sm font-semibold">
                                <tr class="">
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        m*****be
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        Yasuo Ma Kiếm
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        <p>22:34:13</p>
                                        22/11/2020
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        l*****ay
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        RP Ngẫu Nhiên
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        <p>22:33:59</p>
                                        22/11/2020
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        h*****59
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        Trúng 1000 RP
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        <p>22:33:50</p>
                                        22/11/2020
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        l*****ay
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        RP Ngẫu Nhiên
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        <p>22:33:41</p>
                                        22/11/2020
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        m*****ed
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        Kayn Hung Thần Không Gian
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        <p>22:23:43</p>
                                        22/11/2020
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        v*****08
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        RP Ngẫu Nhiên
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        <p>22:23:34</p>
                                        22/11/2020
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        s*****46
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        Darius Lang Vương
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        <p>20:43:05</p>
                                        22/11/2020
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        h*****vc
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        RP Ngẫu Nhiên
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        <p>20:42:59</p>
                                        22/11/2020
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        o*****4d
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        Skin Tự Chọn
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        <p>18:28:01</p>
                                        22/11/2020
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        3*****33
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        RP Ngẫu Nhiên
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        <p>18:27:53</p>
                                        22/11/2020
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        e*****80
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        Darius Lang Vương
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        <p>18:27:53</p>
                                        22/11/2020
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        3*****33
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        RP Ngẫu Nhiên
                                    </td>
                                    <td class="text-center" style="color: #ffff; font-size: 15px;">
                                        <p>18:27:44</p>
                                        22/11/2020
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </h3>
            </div>
        </div>
    </div>
</body>

</html>