<title>Thêm tỉnh mới</title>
<div class="my-5 mx-5">
    <div class="text-center">
        <h3>THÊM TỈNH MỚI</h3>
    </div>
    <form action="?act=tinh&xuli=add" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Mã tỉnh</label>
            <input type="text" class="form-control" id="" placeholder="Mã tỉnh" name="matinh" required>
        </div>
        <div class="form-group">
            <label for="">Tên tỉnh</label>
            <input type="text" class="form-control" id="" placeholder="Tên tỉnh" name="tentinh" required>
        </div>
        <div class="form-group">
            <label for="">Giới thiệu tỉnh</label>
            <textarea name="gttinh" id="gttinh" placeholder="Giới thiệu tỉnh"></textarea>
        </div>
        <div class="form-group">
            <label for="">Thumbnail</label>
            <input type="file" class="form-control" id="" placeholder="Thumbnail" name="img" required>
        </div>
        <div class="form-group">
            <label for="">Ảnh bìa</label>
            <input type="file" class="form-control" id="" placeholder="Ảnh bìa" name="img_bg" required>
        </div>
        <div class="form-group">
            <label for="">Miền</label>
            <select name="mien" id="" class="form-control" required>
                <option value="Bắc">Bắc</option>
                <option value="Trung">Trung</option>
                <option value="Nam">Nam</option>
            </select>
        </div>
        <br>
        <div class="d-flex justify-content-center">
            <input type="submit" class="btn btn-primary" value="Thêm tỉnh">
        </div>
    </form>
</div>

<script>
ClassicEditor
    .create(document.querySelector('#gttinh'))
    .catch(error => {
        console.error(error);
    });
</script>