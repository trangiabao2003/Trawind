<title>Thêm Tour Mới</title>
<div class="mt-5">
    <div class="text-center">
        <h3>THÊM TOUR MỚI</h3>
    </div>
    <div class="w-50 m-auto mb-5">
        <form action="?act=tour&xuli=store" method="post" enctype="multipart/form-data">
            <div class="form-group mt-2">
                <label for="">Mã Tour:</label>
                <input type="text" class="form-control" name="id" value="" required>
            </div>
            <div class="form-group mt-2">
                <label for="">Loại chủ đề: </label>
                <select class="form-control" name="id_chude" id="" required>
                    <?php
                        foreach ($data_chude as $key => $value)
                        {
                            ?>
                            <option value="<?= $value['machude'] ?>"><?= $value['tenchude'] ?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="">Tên miền: </label>
                <select class="form-control" name="mien" id="" required>
                    <option value="Bắc">Bắc</option>
                    <option value="Trung">Trung</option>
                    <option value="Nam">Nam</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="">Ảnh Thumbnail: </label>
                <input type="file" name="img" id="" required>
            </div>
            <div class="form-group mt-2">
                <label for="">Thời gian: </label>
                <input class="form-control" name="time" type="text" value="" required>
            </div>
            <div class="form-group mt-2">
                <label for="">Tên Tour: </label>
                <input class="form-control" name="locate" type="text" value="" required>
            </div>
            <div class="form-group mt-2">
                <label for="">Địa điểm đi: </label>
                <select class="form-control" name="start_locate" id="" required>
                    <?php
                        foreach($data_tinh as $key => $value)
                        {
                            ?>
                            <option value="<?= $value['matinh'] ?>"><?= $value['tentinh'] ?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="">Địa điểm đến: </label>
                <select class="form-control" name="end_locate" id="" required>
                    <?php
                        foreach($data_tinh as $key => $value)
                        {
                            ?>
                            <option value="<?= $value['matinh'] ?>"><?= $value['tentinh'] ?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="">Giá tiền: </label>
                <input id="price" class="form-control" type="text" name="price" value="" required>
            </div>
            <div class="form-group mt-2">
                <label for="">Trạng thái: </label>
                <select class="form-control" name="trangthai" id="" required>
                    <option value="0">Ẩn</option>
                    <option value="1">Hiện</option>
                </select>
            </div>
            <div class="mt-2 d-flex justify-content-center">
                <input type="submit" class="btn btn-primary" value="Lưu">
            </div>
        </form>
    </div>
</div>
