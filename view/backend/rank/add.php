<h1 class="">Thêm BẬC RANK</h1>
<?php echo @$msg; ?>
<form action="" class="form-group" method="post" enctype="multipart/form-data">
    <div class="">
        <div class="">
            <label>MÃ BẬC RANK</label>
            <input class="form-control" id="" name="ma_bac_rank" value="auto_number" readonly>
        </div>

        <div class="">
            <label>TÊN BẬC RANK</label>
            <input class="form-control" id="ten_bac_rank" name="ten_bac_rank">
            <?= (isset($err['ten_bac_rank']) ? $err['ten_bac_rank'] : '') ?>
        </div>
    </div>
    <div class="text-center mt-4">
        <div>
            <button class="btn btn-primary" name="btnSave">Thêm mới</button>
            <button class="btn btn-primary" type="reset">Nhập lại</button>
            <a class="btn btn-primary" href="?module=backend&controller=rank&action=list">Danh sách</a>
        </div>
    </div>
</form>