<title>Chỉnh sửa tour</title>
<div class="mt-5">
    <div class="text-center">
        <h3>CHỈNH SỬA TOUR</h3>
    </div>
    <div class="w-50 m-auto mb-5">
        <form action="?act=tour&xuli=update" method="post" enctype="multipart/form-data">
            <div class="form-group mt-2">
                <label for="">Mã Tour:</label>
                <input type="text" class="form-control" name="id" value="<?= $data_tour[0]['id'] ?>" readonly>
            </div>
            <div class="form-group mt-2">
                <label for="">Loại chủ đề: </label>
                <select class="form-control" name="id_chude" id="" required>
                    <?php
                        foreach ($data_chude as $key => $value)
                        {
                            if ($value['machude'] == $data[0]['id_chude'])
                            {
                                ?>
                                <option value="<?= $value['machude'] ?>" selected><?= $value['tenchude'] ?></option>
                                <?php
                            }
                            else 
                            {
                            ?>
                            <option value="<?= $value['machude'] ?>"><?= $value['tenchude'] ?></option>
                            <?php
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="">Tên miền: </label>
                <select class="form-control" name="mien" id="" required>
                    <?php
                        if ($data_tour[0]['mien'] == 'Bắc')
                        {
                            ?>
                                <option value="Bắc" selected>Bắc</option>
                                <option value="Trung">Trung</option>
                                <option value="Nam">Nam</option>
                            <?php
                        }
                        else if ($data_tour[0]['mien'] == 'Trung')
                        {
                        ?>
                            <option value="Bắc">Bắc</option>
                            <option value="Trung" selected>Trung</option>
                            <option value="Nam">Nam</option>
                        <?php
                        }
                        else
                        {
                            ?>
                                <option value="Bắc">Bắc</option>
                                <option value="Trung">Trung</option>
                                <option value="Nam" selected>Nam</option>
                            <?php
                        }
                    ?>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="">Ảnh Thumbnail: </label>
                <img class="w-25" src="../<?= $data_tour[0]['image']?>" alt="">
                <input type="file" name="img" id="">
            </div>
            <div class="form-group mt-2">
                <label for="">Thời gian: </label>
                <input class="form-control" name="time" type="text" value="<?= $data_tour[0]['time'] ?>" required>
            </div>
            <div class="form-group mt-2">
                <label for="">Tên Tour: </label>
                <input class="form-control" name="locate" type="text" value="<?= $data_tour[0]['locate'] ?>" required>
            </div>
            <div class="form-group mt-2">
                <label for="">Địa điểm đi: </label>
                <select class="form-control" name="start_locate" id="" required>
                    <?php
                        foreach($data_tinh as $key => $value)
                        {
                            if ($value['matinh'] == $data_tour[0]['start_locate'])
                            {
                                ?>
                                <option value="<?= $value['matinh'] ?>" selected><?= $value['tentinh'] ?></option>
                                <?php
                            }
                            else
                            {
                                ?>
                                <option value="<?= $value['matinh'] ?>"><?= $value['tentinh'] ?></option>
                                <?php
                            }
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
                            if ($value['matinh'] == $data_tour[0]['end_locate'])
                            {
                                ?>
                                <option value="<?= $value['matinh'] ?>" selected><?= $value['tentinh'] ?></option>
                                <?php
                            }
                            else
                            {
                                ?>
                                <option value="<?= $value['matinh'] ?>"><?= $value['tentinh'] ?></option>
                                <?php
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="">Giá tiền: </label>
                <input id="price" class="form-control" type="text" name="price" value="<?= $data_tour[0]['price'] ?>" required>
            </div>
            <div class="form-group mt-2">
                <label for="">Giảm giá: </label>
                <select class="form-control" name="sale" id="sale" required>
                    <?php
                        if ($data_tour[0]['sale'] == 0)
                        {
                            ?>
                                <option value="0" selected>Không</option>
                                <option value="1">Có</option>
                            <?php
                        }
                        else
                        {
                            ?>
                                <option value="0">Không</option>
                                <option value="1" selected>Có</option>
                            <?php
                        }
                    ?>
                </select>
            </div>
            <div id="form-giam-gia" class="d-none form-group mt-2">
                <div>
                    <label for="">Phần trăm giảm: </label>
                    <?php
                        if (isset($data_sale))
                        {
                            ?>
                            <input id="percent_sale" class="form-control" type="text" name="percent_sale" value="<?= $data_sale[0]['percent_sale'] ?>">
                            <?php
                        }
                        else
                        {
                            ?>
                            <input id="percent_sale" class="form-control" type="text" name="percent_sale" value="">
                            <?php
                        }
                    ?>
                    
                </div>
                <div>
                    <label for="">Giá còn lại: </label>
                    <?php
                        if (isset($data_sale))
                        {
                            ?>
                            <input id="price_sale" class="form-control" type="text" name="price_sale" value="<?= $data_sale[0]['price_sale'] ?>">
                            <?php
                        }
                        else
                        {
                            ?>
                            <input id="price_sale" class="form-control" type="text" name="price_sale" value="">
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class="form-group mt-2">
                <label for="">Trạng thái: </label>
                <select class="form-control" name="trangthai" id="" required>
                    <?php
                        if ($data_tour[0]['trangthai'] == 0)
                        {
                            ?>
                                <option value="0" selected>Ẩn</option>
                                <option value="1">Hiện</option>
                            <?php
                        }
                        else
                        {
                            ?>
                                <option value="0">Ẩn</option>
                                <option value="1" selected>Hiện</option>
                            <?php
                        }
                    ?>
                </select>
            </div>
            <div class="mt-2 d-flex justify-content-center">
                <input type="submit" class="btn btn-primary" value="Cập nhật">
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready( () => {
        $('#sale').on('change', function () {
            if ($('#sale').find(":selected").val() == 1)
            {
                $('#form-giam-gia').removeClass('d-none')
            }
            else
            {
                $('#form-giam-gia').addClass('d-none')
            }
        })
        if ($('#sale').find(":selected").val() == 1)
        {
            $('#form-giam-gia').removeClass('d-none')
        }
        $('#percent_sale').on('keyup', () => {
            var percent = $('#percent_sale').val()
            var price = $('#price').val();
            var price_sale = price - (price * (percent / 100))
            $('#price_sale').val(price_sale)
        })
        $('#price_sale').on('keyup', () => {
            var price_sale = $('#price_sale').val()
            var price = $('#price').val();
            var percent = ((price - price_sale) / price) * 100
            $('#percent_sale').val(percent)
        })
    })
</script>