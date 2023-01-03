<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<title>Quản lý chủ đề</title>
<div class="mt-3 text-center"><h3>QUẢN LÝ CHỦ ĐỀ</h3></div>
<hr>
<div class="d-flex justify-content-end">
  <a href="?act=chudetour&xuli=add" type="button" class="btn btn-success px-4 py-2 rounded-3 me-3">Thêm chủ đề mới</a>
</div>

<table class="table table-bordered text-center mt-3" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Mã chủ đề</th>
      <th scope="col">Tên chủ đề</th>
      <th colspan="3">Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <td><?= $row['machude'] ?></td>
        <td><?= $row['tenchude'] ?></td>
        
        <td>
          <a href="?act=chudetour&xuli=edit&id=<?= $row['machude']?>" type="button" class="btn btn-warning">Sửa</a>
        </td>
        <td>
          <a href="?act=chudetour&xuli=delete&id=<?= $row['machude']?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
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