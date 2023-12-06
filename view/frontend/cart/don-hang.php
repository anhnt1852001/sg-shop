<div class="container mt-5 mb-5 ">
    <h1 class="text-center special text-light">Thông tin & Địa Chỉ</h1>
    <h5 class="text-center"><?php echo $msg ?></h5>

    <form action="?module=frontend&controller=cart&action=pay" method="post">
        <div class="row">
            <div class="col-md-6">
                <h5 aria-label="fw-bold" class="text-light">Tên KH</h5>
                <input type="text" name="ho_ten" id="" value="<?= $_REQUEST['ho_ten'] ?? '' ?>" class="form-control"><br>
                <i style="color: red;"><?= $err['ho_ten'] ?? '' ?></i>
            </div>
            <div class="col-md-6">

                <h5 aria-label="fw-bold" class="text-light">Email</h5>
                <input type="email" name="email" id="" value="<?= $_REQUEST['email'] ?? '' ?> " class="form-control"><br>
                <i style="color: red;"><?= $err['email'] ?? '' ?></i>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h5 aria-label="fw-bold" class="text-light">Địa Chỉ</h5>
                <input type="text" name="dia_chi" id="" value="<?= $_REQUEST['dia_chi'] ?? '' ?> " class="form-control"><br>
                <i style="color: red;"><?= $err['dia_chi'] ?? '' ?></i>
            </div>
        </div>




        <button style="font-size: 15px;" type="submit" name="btn_pay" class="btn btn-primary">Gửi</button>
    </form>
</div>