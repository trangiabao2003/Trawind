<title>Chỉnh sửa tỉnh</title>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<div class="mt-5 mx-5">
    <div class="text-center">
        <h3>CHỈNH SỬA TỈNH</h3>
    </div>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <form action="?act=tinh&xuli=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã tỉnh</label>
                <input type="text" class="form-control" id="" placeholder="Mã tỉnh" name="matinh"
                    value="<?= $data[0]['matinh'] ?>" required readonly>
            </div>
            <div class="form-group">
                <label for="">Tên tỉnh</label>
                <input type="text" class="form-control" id="" placeholder="Tên tỉnh" name="tentinh"
                    value="<?= $data[0]['tentinh'] ?>" required>
            </div>
            <div class="form-group">
                <label for="">Giới thiệu tỉnh</label>
                <textarea class="form-control" name="gttinh" id="gttinh" placeholder="Giới thiệu tỉnh"
                    required><?php echo $data[0]['gttinh'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <img src="../<?= $data[0]['img'] ?>" height="200px" width="200px">
                <input type="file" class="form-control" id="" placeholder="Thumbnail" name="img"
                    value="<?= $data[0]['img'] ?>">
            </div>
            <div class="form-group">
                <label for="">Ảnh bìa</label>
                <img src="../<?= $data[0]['img_bg'] ?>" height="200px" width="200px">
                <input type="file" class="form-control" id="" placeholder="Ảnh bìa" name="img_bg"
                    value="<?= $data[0]['img_bg'] ?>">
            </div>
            <div class="form-group">
                <label for="">Miền</label>
                <select name="mien" id="" class="form-control">
                    <?php
                    if ($data[0]['mien'] == 'Bắc') {
                    ?>
                    <option value="Bắc" selected>Bắc</option>
                    <option value="Trung">Trung</option>
                    <option value="Nam">Nam</option>
                    <?php
                    } else if ($data[0]['mien'] == 'Trung') {
                    ?>
                    <option value="Bắc">Bắc</option>
                    <option value="Trung" selected>Trung</option>
                    <option value="Nam">Nam</option>
                    <?php
                    } else {
                    ?>
                    <option value="Bắc">Bắc</option>
                    <option value="Trung">Trung</option>
                    <option value="Nam" selected>Nam</option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
    </table>
</div>

<script>
ClassicEditor
    .create(document.querySelector('#gttinh'))
    .catch(error => {
        console.error(error);
    });
</script>