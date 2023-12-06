<h1>SỬA BẬC RANK</h1>
<?php echo @$msg;
$rank = rank_get_one();
?>
<form action="" class="form-group" method="post" enctype="multipart/form-data">
    <div class="">
        <div class="">
            <label>MÃ BẬC RANK</label>
            <input class="form-control" id="" name="ma_bac_rank" readonly value="<?= $rank['ma_bac_rank'] ?>">
        </div>

        <div class="">
            <label>TÊN BẬC RANK</label>
            <input class="form-control" id="" name="ten_bac_rank" value="<?= $rank['ten_bac_rank'] ?>">

        </div>
    </div>
    <div class="text-center mt-4">
        <div>
            <button class="btn btn-primary mr-3" name="btn_update">Cập nhật</button>
            <button class="btn btn-primary mr-3" type="reset">Nhập lại</button>
            <a class="btn btn-primary" href="?module=backend&controller=rank&action=list">Danh sách</a>
        </div>
    </div>
</form>