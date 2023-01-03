<title>Thông tin đơn hàng</title>
<br>
<?php if (isset($data_donhang) and $data_donhang != null) { ?>
<a href="?act=hoadon&xuli=xetduyet&id=<?= $data_donhang['0']['madonhang'] ?>" class="btn btn-success">Duyệt hóa đơn</a>
<a href="?act=hoadon&xuli=delete&id=<?= $data_donhang['0']['madonhang'] ?>"
    onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
<?php } ?>
<?php if (isset($_COOKIE['msg'])) { ?>
<div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
</div>
<?php } ?>
<hr>

<div class="mx-5">
    <div class="text-center">
        <h3>THÔNG TIN ĐƠN HÀNG</h3>
    </div>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

    <div class="form-group">
        <span>Mã đơn hàng</span>
        <input type="text" class="form-control" id="" placeholder="Mã đơn hàng" name=""
            value="<?= $data_donhang[0]['madonhang'] ?>" required disabled>
    </div>
    <div class="form-group">
        <label for="">Tên tour</label>
        <input type="text" class="form-control" id="" placeholder="Tên tour" name=""
            value="<?= $data_donhang[0]['locate'] ?>" required disabled>
    </div>
    <div class="form-group">
        <label for="">Username</label>
        <input type="text" class="form-control" id="" placeholder="Username" name=""
            value="<?= $data_donhang[0]['username'] ?>" required disabled>
    </div>
    <div class="form-group">
        <label for="">Tên Khách Hàng</label>
        <input type="text" class="form-control" id="" placeholder="Tên khách hàng" name=""
            value="<?= $data_donhang[0]['hoten'] ?>" required disabled>
    </div>
    <div class="form-group">
        <label for="">SĐT</label>
        <input type="text" class="form-control" id="" placeholder="SĐT" name="" value="<?= $data_donhang[0]['sdt'] ?>"
            required disabled>
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" id="" placeholder="Email" name=""
            value="<?= $data_donhang[0]['email'] ?>" required disabled>
    </div>
    <div class="form-group">
        <label for="">Địa chỉ</label>
        <input type="text" class="form-control" id="" placeholder="Địa chỉ" name=""
            value="<?= $data_donhang[0]['diachi'] ?>" required disabled>
    </div>
    <div class="form-group">
        <label for="">Ngày đặt tour</label>
        <input type="text" class="form-control" id="" placeholder="Ngày đặt tour" name=""
            value="<?= $data_donhang[0]['ngaydattour'] ?>" required disabled>
    </div>
    <div class="form-group">
        <label for="">Số khách hàng</label>
        <input type="text" class="form-control" id="" placeholder="Số khách hàng" name=""
            value="<?= $data_donhang[0]['sokhachhang'] ?>" required disabled>
    </div>
    <div class="form-group">
        <label for="">Người lớn</label>
        <input type="text" class="form-control" id="" placeholder="Người lớn" name=""
            value="<?= $data_donhang[0]['nguoilon'] ?>" required disabled>
    </div>
    <div class="form-group">
        <label for="">Trẻ nhỏ</label>
        <input type="text" class="form-control" id="" placeholder="Trẻ nhỏ" name=""
            value="<?= $data_donhang[0]['trenho'] ?>" required disabled>
    </div>
    <div class="form-group">
        <label for="">Trẻ em</label>
        <input type="text" class="form-control" id="" placeholder="Trẻ em" name=""
            value="<?= $data_donhang[0]['treem'] ?>" required disabled>
    </div>
    <div class="form-group">
        <label for="">Em bé</label>
        <input type="text" class="form-control" id="" placeholder="Em bé" name=""
            value="<?= $data_donhang[0]['embe'] ?>" required disabled>
    </div>
    <div class="form-group">
        <label for="">Tổng tiền</label>
        <input type="text" class="form-control" id="" placeholder="Tổng tiền" name=""
            value="<?= number_format($data_donhang[0]['tongtien']) ?> VNĐ" required disabled>
    </div>
    <div class="form-group">
        <label for="">Trạng thái</label>
        <input type="text" class="form-control" id="" placeholder="Trạng thái" name=""
            value="<?= $data_donhang[0]['thanhtoan'] ?>" required disabled>
    </div>
    </table>

    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">Họ tên khách hàng</th>
            <th scope="col">Giới tính khách hàng</th>
            <th scope="col">Ngày sinh khách hàng</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_khachhang as $row) { ?>
        <tr>
            <td><?= $row['hoten_hk'] ?></td>
            <td><?= $row['gioitinh_hk'] ?></td>
            <td><?= $row['ngaysinh_hk'] ?></td>
        </tr>
        <?php } ?>
    </table>
</div>




<!-- <script>
$(document).ready(function() {
    $('#dataTable').DataTable();
});
</script> -->