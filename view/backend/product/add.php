<h1 class="">Thêm Nick</h1>
<?php echo @$msg;
require_once APP_PATH . '/model/rank_model.php';
$rank_select_list = rank_list_all();
?>
<form action="" method="post" id="form" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-6">
            <label class="mt-3">MÃ NICK</label>
            <input class="form-control" name="ma_tai_khoan" readonly value="auto number">
        </div>
        <div class="form-group col-6">
            <label class="mt-3">TÊN NICK</label>
            <input class="form-control" name="ten_tai_khoan" id="">
            <?= (isset($err['ten_tai_khoan']) ? $err['ten_tai_khoan'] : '') ?>

        </div>
        <div class="form-group col-6">
            <label class="mt-3">PASSWORD</label>
            <input class="form-control" name="password" id="" type="password">
            <?= (isset($err['password']) ? $err['password'] : '') ?>
        </div>
        <div class="form-group col-6">
            <label class="mt-3">ĐƠN GIÁ</label>
            <input class="form-control" name="don_gia" id="">
            <?= (isset($err['don_gia']) ? $err['don_gia'] : '') ?>
        </div>
        <div class="form-group col-6">
            <label class="mt-3">MÃ BẬC RANK</label>
            <select class="form-control" name="ma_bac_rank">
                <?php
                foreach ($rank_select_list as $rank) {
                    echo '<option value="' . $rank['ma_bac_rank'] . '">' . $rank['ten_bac_rank'] . '</option>';
                }
                ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group ">
                <label class="mt-3">HÌNH ẢNH</label>
                <div class="bg-light py-2 px-3 border rounded">
                    <input name="hinh" id="hinh" type="file">
                </div>
            </div>
            <div class="form-group">
                <label class="mt-3">SỐ LƯỢT XEM</label>
                <input class="form-control" name="so_luot_xem" readonly value="0">
            </div>
            <div class="form-group ">
                <label class="mt-3">HÀNG ĐẶC BIỆT?</label>
                <div class="bg-light py-2 px-3 rounded border">
                    <label><input name="dac_biet" value="1" class="mr-2" type="radio">Đặc biệt</label>
                    <label><input name="dac_biet" value="0" class="mr-2 ml-5" type="radio" checked>Bình thường</label>
                </div>
            </div>

        </div>
        <div class="col-6 py-3 px-5">
            <label class="ml-5 text-uppercase" for="">Hình ảnh sẽ upload</label>
            <div id="result_image">
                <p id="desc" class="ml-5 mt-3 text-info">( Chưa có ảnh ! ) </p>
            </div>
        </div>
    </div>
    <script>
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
    <div>
        <div class="form-group">
            <label class="mt-3">MÔ TẢ</label>
            <textarea class="form-control" name="mo_ta" id="" rows="4"></textarea>
        </div>
        <?= (isset($err['mo_ta']) ? $err['mo_ta'] : '') ?>
        <div class="mt-4 text-center">
            <button class="btn btn-primary mr-3" name="btnSave">Thêm mới</button>
            <button class="btn btn-primary mr-3" type="reset">Nhập lại</button>
            <a class="btn btn-primary" href="?module=backend&controller=product&action=list">Danh sách</a>
        </div>
    </div>
</form>