<title>Quản lý chi tiết tour</title>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<div class="mt-3 text-center"><h3>QUẢN LÝ CHI TIẾT TOUR</h3></div>
<hr>
<div class="d-flex justify-content-end">
    <a href="?act=chitiettour&xuli=themtour" class="btn btn-success px-4 py-2 rounded-3 me-3">Thêm chi tiết tour</a>
</div>
    <table class="table table-bordered text-center mt-3" id="chitiettourTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">Mã sản phẩm</th>
                <th scope="col">Thời gian</th>
                <th scope="col">Phương tiện</th>
                <th scope="col">Điểm tham quan</th>
                <th scope="col">Ẩm thực</th>
                <th scope="col">Khách sạn</th>
                <th scope="col">Thời gian lý tưởng</th>
                <th scope="col">Đối tượng</th>
                <th scope="col">Ưu đãi</th>
                <th scope="col">Lịch trình</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row) { ?>
            <tr>
                <th scope="row"><?= $row['id'] ?></th>
                <td><?= $row['thoigian'] ?></td>
                <td><?= $row['phuongtien'] ?></td>
                <td><?= $row['diemthamquan'] ?></td>
                <td><?= $row['amthuc'] ?></td>
                <td><?= $row['khachsan'] ?></td>
                <td><?= $row['tgianlytuong'] ?></td>
                <td><?= $row['doituong'] ?></td>
                <td><?= $row['uudai'] ?></td>
                <td style="max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?= $row['lichtrinh'] ?></td>
                <td>
                    <a href="?act=chitiettour&xuli=chitiet&id=<?= $row['id'] ?>" type="button"
                        class="btn btn-warning">Sửa</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<style>
   
</style>