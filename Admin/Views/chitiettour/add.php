<title>Thêm chi tiết tour</title>
<div class="mt-5 mx-5">
    <div class="text-center">
        <h3>THÊM CHI TIẾT TOUR MỚI</h3>
    </div>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <form action="?act=chitiettour&xuli=add" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã tour</label>
                <select name="id" id="" required>
                    <?php
                    foreach ($idtour as $id) {
                    ?>
                    <option value="<?php echo $id['id'] ?>"><?php echo $id['id'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Thời gian</label>
                <input type="text" class="form-control" id="" placeholder="Thời gian" name="thoigian" required>
            </div>
            <div class="form-group">
                <label for="">Phương tiện</label>
                <input type="text" class="form-control" id="" placeholder="Phương tiện" name="phuongtien" required>
            </div>
            <div class="form-group">
                <label for="">Điểm tham quan</label>
                <input type="text" class="form-control" id="" placeholder="Điểm tham quan" name="diemthamquan" required>
            </div>
            <div class="form-group">
                <label for="">Ẩm thực</label>
                <input type="text" class="form-control" id="" placeholder="Ẩm thực" name="amthuc" required>
            </div>
            <div class="form-group">
                <label for="">Khách sạn</label>
                <input type="text" class="form-control" id="" placeholder="Khách sạn" name="khachsan" required>
            </div>
            <div class="form-group">
                <label for="">Thời gian lý tưởng</label>
                <input type="text" class="form-control" id="" placeholder="Thời gian lý tưởng" name="tgianlytuong" required>
            </div>
            <div class="form-group">
                <label for="">Đối tượng</label>
                <input type="text" class="form-control" id="" placeholder="Đối tượng" name="doituong" required>
            </div>
            <div class="form-group">
                <label for="">Ưu đãi</label>
                <input type="text" class="form-control" id="" placeholder="Ưu đãi" name="uudai" required>
            </div>
            <div class="form-group">
                <label for="">Lịch trình</label>
                <textarea class="form-control" id="lichtrinh" cols="30" rows="10" name="lichtrinh"
                    placeholder="Lịch trình"></textarea>
            </div>
            <div class="form-group">
                <label for="">Hình ảnh 1</label>
                <input type="file" class="form-control" id="" placeholder="Hình ảnh 1" name="anh1" required>
            </div>
            <div class="form-group">
                <label for="">Hình ảnh 2</label>
                <input type="file" class="form-control" id="" placeholder="Hình ảnh 2" name="anh2" required>
            </div>
            <div class="form-group">
                <label for="">Hình ảnh 3</label>
                <input type="file" class="form-control" id="" placeholder="Hình ảnh 3" name="anh3" required>
            </div>
            <div class="form-group">
                <label for="">Hình ảnh 4</label>
                <input type="file" class="form-control" id="" placeholder="Hình ảnh 4" name="anh4" required>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Thêm</button>
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