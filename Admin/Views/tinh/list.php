<title>Quản lý tỉnh</title>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<div class="mt-3 text-center"><h3>QUẢN LÝ TỈNH</h3></div>
<hr>
<div class="d-flex justify-content-end">
    <a href="?act=tinh&xuli=themtinh" class="btn btn-success px-4 py-2 rounded-3 me-3">Thêm tỉnh</a>
</div>

<table class="table table-bordered text-center mt-3" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">Mã tỉnh</th>
            <th scope="col">Tên tỉnh</th>
            <th scope="col">Giới thiệu tỉnh</th>
            <th scope="col">Thumbnail</th>
            <th scope="col">Ảnh bìa</th>
            <th scope="col">Miền</th>
            <th colspan="2" scope="col">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row) { ?>
        <tr>
            <th scope="row"><?= $row['matinh'] ?></th>
            <td><?= $row['tentinh'] ?></td>
            <td style="max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?= $row['gttinh'] ?></td>
            <td><img src="../<?= $row['img'] ?>" height="200px" width="200px"></td>
            <td><img src="../<?= $row['img_bg'] ?>" height="200px" width="200px"></td>
            <td><?= $row['mien'] ?></td>
            <td>
                <a href="?act=tinh&xuli=chitiet&id=<?= $row['matinh'] ?>" type="button" class="btn btn-warning">Sửa</a>
            </td>
            <td>
                <a href="?act=tinh&xuli=delete&id=<?= $row['matinh'] ?>"
                    onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>

            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>