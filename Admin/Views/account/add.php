<title>Thêm người dùng</title>
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
<div class="mt-5">
    <div class="text-center">
        <h3>THÊM NGƯỜI DÙNG MỚI</h3>
    </div>
    <div class="w-50 m-auto mb-5">
    <form action="?act=account&xuli=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên tài khoản</label>
            <input type="text" class="form-control" id="" placeholder="" name="username">
        </div>
        <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="text" class="form-control" id="" placeholder="" name="password">
        </div>
        <div class="form-group">
            <label for="">Họ tên</label>
            <input type="text" class="form-control" id="" placeholder="" name="hoten">
        </div>
        <div class="form-group">
            <label for="">SĐT</label>
            <input type="text" class="form-control" id="" placeholder="" name="sdt">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" id="" placeholder="" name="email">
        </div>
        <div class="form-group">
            <label for="">Quyền tài khoản</label>
            <select name="idquyen" id="" class="form-control">
                <option value="0">Người dùng</option>
                <option value="1">Admin</option>
            </select>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </form>
    </div>
</div>
