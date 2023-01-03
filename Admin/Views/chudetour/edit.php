<title>Chỉnh sửa chủ đề</title>
<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>

<div class="mt-5">
    <div class="text-center">
        <h3>CHỈNH SỬA CHỦ ĐỀ</h3>
    </div>
    <div class="w-50 m-auto mb-5">
        <form action="?act=chudetour&xuli=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã chủ đề</label>
                <input type="text" class="form-control" id="" placeholder="" name="machude" value="<?= $data['machude'] ?>">
            </div>
            <div class="form-group">
                <label for="">Tên chủ đề</label>
                <input type="text" class="form-control" id="" placeholder="" name="tenchude" value="<?= $data['tenchude'] ?>">
            </div>
            <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
    </div>
</div>