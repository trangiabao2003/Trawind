<title>Thêm chủ đề</title>
<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-warning">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<div class="mt-5">
    <div class="text-center">
        <h3>THÊM CHỦ ĐỀ MỚI</h3>
    </div>
    <div class="w-50 m-auto mb-5">
        <form action="?act=chudetour&xuli=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã chủ đề</label>
                <input type="text" class="form-control" id="" placeholder="" name="machude">
            </div>
            <div class="form-group">
                <label for="">Tên chủ đề</label>
                <input type="text" class="form-control" id="" placeholder="" name="tenchude">
            </div>
            <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </form>
    </div>
</div>