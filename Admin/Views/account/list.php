<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<title>Quản lý người dùng</title>
<div class="mt-3 text-center"><h3>QUẢN LÝ NGƯỜI DÙNG</h3></div>
<hr>
<div class="d-flex justify-content-end">
  <a href="?act=account&xuli=add" type="button" class="btn btn-success px-4 py-2 rounded-3 me-3">Thêm tài khoản mới</a>
</div>
<table class="table table-bordered text-center mt-3" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Tên tài khoản</th>
      <th scope="col">Mật khẩu</th>
      <th scope="col">Họ tên</th>
      <th scope="col">SĐT</th>
      <th scope="col">Email</th>
      <th scope="col">Quyền tài khoản</th>
      <th scope="col">Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <td><?= $row['username'] ?></td>
        <td><?= $row['password'] ?></td>
        <td><?= $row['hoten'] ?></td>
        <td><?= $row['sdt'] ?></td>
        <td><?= $row['email'] ?></td>
        <td>
          <?php
            if ($row['idquyen'] == 0)
            {
              echo 'Người dùng';
            }
            else
            {
              echo 'Admin';
            }
          ?>
        </td>
        <td>
          <a href="?act=account&xuli=delete&id=<?= $row['username']?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>