<h1>Thêm Khách Hàng</h1>
<?php echo @$msg; ?>
<form action="" id="form" class="form-group" method="post" enctype="multipart/form-data">
    <div class="row ">
        <div class="col-6">
            <label>MÃ KHÁCH HÀNG</label>
            <input class="form-control" id="" name="ma_kh">
            <?php echo isset($err['ma_kh']) ? $error['ma_kh'] : ''; ?>
        </div>

        <div class="col-6">
            <label>HỌ VÀ TÊN</label>
            <input class="form-control" id="" name="ho_ten">
            <?php echo isset($err['ho_ten']) ? $error['ho_ten'] : ''; ?>
        </div>

        <div class="col-6">
            <label class="mt-3">MẬT KHẨU</label>
            <input class="form-control" id="" name="mat_khau" type="password">
            <?php echo isset($err['mat_khau']) ? $error['mat_khau'] : ''; ?>
        </div>

        <div class="col-6">
            <label class="mt-3">XÁC NHẬN MẬT KHẨU</label>
            <input class="form-control" id="" name="mat_khau2" type="password">
            <?php echo isset($err['mat_khau2']) ? $error['mat_khau'] : ''; ?>
        </div>
        <div class="col-6">
            <label class="mt-3">Địa Chỉ</label>
            <input class="form-control" id="" name="dia_chi">
            <?php echo isset($err['dia_chi']) ? $error['dia_chi'] : ''; ?>
        </div>
        <div class="col-6">
            <label class="mt-3">Ngày Sinh</label>
            <input class="form-control" type="date" name="ngay_sinh" id="ngay_sinh" id="example-datetime-local-input">

            <?php echo isset($err['ngay_sinh']) ? $error['ngay_sinh'] : ''; ?>
        </div>
        <div class="col-6">
            <div class="">
                <label> EMAIL</label>
                <input class="form-control" type="email" id="" name="email">
                <?php echo isset($err['email']) ? $error['email'] : ''; ?>
            </div>

            <div class="">
                <label>SỐ ĐIỆN THOẠI</label>
                <input class="form-control" id="" name="so_dt">
                <?php echo isset($err['so_dt']) ? $error['so_dt'] : ''; ?>
            </div>
            <div class="">
                <label class="mt-3">KÍCH HOẠT?</label>
                <div class="form-control">
                    <label><input name="kich_hoat" class="mr-2" value="0" type="radio">Chưa kích hoạt</label>
                    <label><input name="kich_hoat" class="ml-5 mr-2" value="1" type="radio" checked>Kích hoạt</label>
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
            <div>
                <label class="mt-3">HÌNH ẢNH</label>
                <div class="bg-light py-2 px-3 border rounded">
                    <input name="hinh" id="hinh" type="file">
                    <?php echo isset($err['hinh']) ? $error['hinh'] : ''; ?>
                </div>
            </div>
            <label class="mt-2 text-uppercase text-center">Hình sẽ được upload</label>
            <div id="result_image">
                <p id="desc" class="ml-5 mt-3 text-info"> </p>
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

    <div class="text-center">
        <div>
            <button class="btn btn-primary">Thêm mới</button>
            <button class="btn btn-primary" type="reset">Nhập lại</button>
            <a class="btn btn-primary" href="?module=backend&controller=user&action=list">Danh sách</a>
        </div>
    </div>
</form>