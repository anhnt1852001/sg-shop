<h1>Sửa Khách Hàng</h1>
<?php echo @$msg; ?>
<form action="" id="form" class="form-group" method="post" enctype="multipart/form-data">
    <div class="row">
        <?php $user = user_get_one(); ?>
        <div class="col-6">
            <label>MÃ KHÁCH HÀNG</label>
            <input class="form-control" id="" name="ma_kh" value="<?= $user['ma_kh'] ?>" readonly>
            <?php echo isset($err['ma_kh']) ? $error['ma_kh'] : ''; ?>
        </div>

        <div class="col-6">
            <label>HỌ VÀ TÊN</label>
            <input class="form-control" id="" name="ho_ten" value="<?= $user['ho_ten'] ?>">
            <?php echo isset($err['ho_ten']) ? $error['ho_ten'] : ''; ?>
        </div>

        <div class="col-6">
            <label class="mt-3">MẬT KHẨU</label>
            <input class="form-control" id="" name="mat_khau" type="password" value="<?= $user['mat_khau'] ?>">
            <?php echo isset($err['mat_khau']) ? $error['mat_khau'] : ''; ?>
        </div>

        <div class=" col-6">
            <label class="mt-3">XÁC NHẬN MẬT KHẨU</label>
            <input class="form-control" id="" name="mat_khau2" type="password">
            <?php echo isset($err['mat_khau2']) ? $error['mat_khau'] : ''; ?>
        </div>
        <div class=" col-6">
            <label class="mt-3">Địa Chỉ</label>
            <input class="form-control" id="" name="dia_chi" value="<?= $user['dia_chi'] ?>">
            <?php echo isset($err['dia_chi']) ? $error['dia_chi'] : ''; ?>
        </div>
        <div class="col-6">
            <label class="mt-3">Ngày Sinh</label>
            <input class="form-control" value="<?= $user['ngay_sinh'] ?>" type="date" name="ngay_sinh" id="ngay_sinh" id="example-datetime-local-input">
            <?php echo isset($err['ngay_sinh']) ? $error['ngay_sinh'] : ''; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="">
                <label class="mt-3"> EMAIL</label>
                <input class="form-control" type="email" id="" name="email" value="<?= $user['email'] ?>">
                <?php echo isset($err['email']) ? $error['email'] : ''; ?>
            </div>

            <div class="">
                <label class="mt-3">SỐ ĐIỆN THOẠI</label>
                <input class="form-control" id="" name="so_dt" value="<?= $user['so_dt'] ?>">
                <?php echo isset($err['so_dt']) ? $error['so_dt'] : ''; ?>
            </div>
            <div class="">
                <label class="mt-3">KÍCH HOẠT?</label>
                <div class="form-control">
                    <label><input name="kich_hoat" class="mr-2" value="$user['kich_hoat']" type="radio">Chưa kích hoạt</label>
                    <label><input name="kich_hoat" class="ml-5 mr-2" value="$user['kich_hoat']" type="radio" checked>Kích hoạt</label>
                </div>
            </div>
            <div class="">
                <label class="mt-3">VAI TRÒ</label>
                <div class="form-control">
                    <label><input name="vai_tro" value="0" class="mr-2" type="radio">Khách hàng</label>
                    <label><input name="vai_tro" class="ml-5 mr-2" value="1" type="radio" checked>Nhân viên</label>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="col-md-6">
                <div class="form-group">
                    <label>HÌNH ẢNH</label>
                    <input name="up_hinh" type="hidden" value="<?= $user['hinh'] ?>">
                    <input class="form-control" name="hinh" type="file"> (<?= $user['hinh'] ?>)
                    <img class="img-fluid" width="150px" src="public/image/<?= $user['hinh'] ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <script>
        // preview image
        hinh.onchange = function() {
            if (hinh.value !== "") {
                render.readAsDataURL(hinh.files[0]);
                desc.style.display = "none";
            }
        };
        var render = new FileReader();
        render.onload = function(e) {
            document.getElementById("result_image").innerHTML =
                '<img class="img-fluid ml-5 mt-3" width=100 src="' +
                e.target.result +
                '"/>';
        };
    </script>

    <div class="text-center mt-4">
        <div>
            <button class="btn btn-primary">cập nhật </button>
            <button class="btn btn-primary" type="reset">Nhập lại</button>
            <a class="btn btn-primary" href="?module=backend&controller=user&action=list">Danh sách</a>
        </div>
    </div>
</form>