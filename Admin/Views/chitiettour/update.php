<title>Cập nhật chi tiết tour</title>
<div class="mt-5 mx-5">
    <div class="text-center">
        <h3>CẬP NHẬT CHI TIẾT TOUR</h3>
    </div>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <form action="?act=chitiettour&xuli=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã tour</label>
                <input type="text" class="form-control" id="" placeholder="Mã tour" name="id" value="<?= $data[0]['id'] ?>"
                    required readonly>
            </div>
            <div class="form-group">
                <label for="">Thời gian</label>
                <input type="text" class="form-control" id="" placeholder="Thời gian" name="thoigian"
                    value="<?= $data[0]['thoigian'] ?>" required>
            </div>
            <div class="form-group">
                <label for="">Phương tiện</label>
                <input type="text" class="form-control" id="" placeholder="Phương tiện" name="phuongtien"
                    value="<?= $data[0]['phuongtien'] ?>" required>
            </div>
            <div class="form-group">
                <label for="">Điểm tham quan</label>
                <input type="text" class="form-control" id="" placeholder="Điểm tham quan" name="diemthamquan"
                    value="<?= $data[0]['diemthamquan'] ?>" required>
            </div>
            <div class="form-group">
                <label for="">Ẩm thực</label>
                <input type="text" class="form-control" id="" placeholder="amthuc" name="amthuc"
                    value="<?= $data[0]['amthuc'] ?>" required>
            </div>
            <div class="form-group">
                <label for="">Khách sạn</label>
                <input type="text" class="form-control" id="" placeholder="khachsan" name="khachsan"
                    value="<?= $data[0]['khachsan'] ?>" required>
            </div>
            <div class="form-group">
                <label for="">Thời gian lý tưởng</label>
                <input type="text" class="form-control" id="" placeholder="Thời gian lý tưởng" name="tgianlytuong"
                    value="<?= $data[0]['tgianlytuong'] ?>" required>
            </div>
            <div class="form-group">
                <label for="">Đối tượng</label>
                <input type="text" class="form-control" id="" placeholder="Đối tượng" name="doituong"
                    value="<?= $data[0]['doituong'] ?>" required>
            </div>
            <div class="form-group">
                <label for="">Ưu đãi</label>
                <input type="text" class="form-control" id="" placeholder="Ưu đãi" name="uudai"
                    value="<?= $data[0]['uudai'] ?>">
            </div>
            <div class="form-group">
                <label for="">Lịch trình</label>
                <textarea class="form-control" id="lichtrinh" cols="30" rows="10" name="lichtrinh"
                    placeholder="Lịch trình"><?php echo $data[0]['lichtrinh'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="">Hình ảnh 1</label>
                <img src="../<?= $data[0]['anh1'] ?>" height="200px" width="200px">
                <input type="file" class="form-control" id="" placeholder="Hình ảnh 1" name="anh1"
                    value="<?= $data[0]['anh1'] ?>">
            </div>
            <div class="form-group">
                <label for="">Hình ảnh 2</label>
                <img src="../<?= $data[0]['anh2'] ?>" height="200px" width="200px">
                <input type="file" class="form-control" id="" placeholder="Hình ảnh 2" name="anh2"
                    value="<?= $data[0]['anh2'] ?>">
            </div>
            <div class="form-group">
                <label for="">Hình ảnh 3</label>
                <img src="../<?= $data[0]['anh3'] ?>" height="200px" width="200px">
                <input type="file" class="form-control" id="" placeholder="Hình ảnh 3" name="anh3"
                    value="<?= $data[0]['anh3'] ?>">
            </div>
            <div class="form-group">
                <label for="">Hình ảnh 4</label>
                <img src="../<?= $data[0]['anh4'] ?>" height="200px" width="200px">
                <input type="file" class="form-control" id="" placeholder="Hình ảnh 4" name="anh4"
                    value="<?= $data[0]['anh4'] ?>">
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
    .create(document.querySelector('#lichtrinh'))
    .catch(error => {
        console.error(error);
    });
</script>