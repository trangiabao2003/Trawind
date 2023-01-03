<title>Quản lý tour</title>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<div class="mt-3 text-center"><h3>QUẢN LÝ TOUR</h3></div>
<hr>
<div class="d-flex justify-content-end">
  <a href="?act=tour&xuli=add" type="button" class="btn btn-success px-4 py-2 rounded-3 me-3">Thêm tour mới</a>
</div>
<table class="mt-3 table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Mã Tour</th>
      <th scope="col">Chủ Đề Tour</th>
      <th scope="col">Tên Tour</th>
      <th scope="col">Thời Gian Đi</th>
      <th scope="col">Giá</th>
      <th scope="col">Sale</th>
      <th scope="col">Trạng thái</th>
      <th colspan="3">Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <th scope="row"><?= $row['id'] ?></th>
        <td><?= $row['tenchude'] ?></td>
        <td><?= $row['locate'] ?></td>
        <td><?= $row['time'] ?></td>
        <td><?php echo currency_format($row['price']) ?></td>
        <?php
            if ($row['sale'] == 0)
            {
                ?>
                <td>Không</td>
                <?php
            }
            else
            {
                ?>
                <td>Có</td>
                <?php
            }
            
        ?>
        <?php
            if ($row['trangthai'] == 0)
            {
                ?>
                <td>Ẩn</td>
                <?php
            }
            else
            {
                ?>
                <td>Hiện</td>
                <?php
            }     
        ?>
        <td>
          <a href="?act=tour&xuli=chitiet&id=<?= $row['id']?>" type="button" class="btn btn-success">Xem</a>
        </td>
        <td>
          <a href="?act=tour&xuli=edit&id=<?= $row['id']?>" type="button" class="btn btn-warning">Sửa</a>
        </td>
        <td>
          <a href="?act=tour&xuli=delete&id=<?= $row['id']?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
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
