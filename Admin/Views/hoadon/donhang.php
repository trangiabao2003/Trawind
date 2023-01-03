<title>Quản lý đơn hàng</title>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<div class="mt-3 text-center"><h3>QUẢN LÝ ĐƠN HÀNG</h3></div>
<hr>
<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">Tour ID</th>
            <th scope="col">Username</th>
            <th scope="col">Tên Khách Hàng</th>
            <th scope="col">Ngày đặt tour</th>
            <th scope="col">Số khách hàng</th>
            <th scope="col">Tổng tiền</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Quyền Admin</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row) { ?>
        <tr>
            <td><?= $row['t_id'] ?></td>
            <td><?= $row['username'] ?></td>
            <td><?= $row['hoten'] ?></td>
            <td><?= $row['ngaydattour'] ?></td>
            <td><?= $row['sokhachhang'] ?></td>
            <td><?= number_format($row['tongtien']) ?>VNĐ</td>
            <td><?= $row['thanhtoan'] ?></td>
            <td>
                <a href="?act=hoadon&xuli=chitiet&id=<?= $row['madonhang'] ?>" class="btn btn-success">Xem chi
                    tiết</a>
            </td>
        </tr>
        <?php } ?>
</table>
<!-- <script>
$(document).ready(function() {
    $('#dataTable').DataTable();
});
</script> -->