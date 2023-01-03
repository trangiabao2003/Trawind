<title>Thông tin đơn hàng</title>
<div style="margin-top: 100px">
    <div class="text-center">
        <h3>THÔNG TIN ĐƠN HÀNG</h3>
    </div>
    <div class="w-50 m-auto mt-5" style="font-size: 17px;">
        <div>
            <span>Mã đơn hàng: </span>
            <span><?= $ttdh[0]['madonhang'] ?></span>
        </div>
        <div>
            <span>Tên tour: </span>
            <span><?= $ttdh[0]['locate'] ?></span>
        </div>
        <div>
            <span>Thời gian: </span>
            <span><?= $ttdh[0]['time'] ?></span>
        </div>
        <div>
            <span>Họ tên người đặt: </span>
            <span><?= $ttdh[0]['hoten'] ?></span>
        </div>
        <div>
            <span>Số điện thoại: </span>
            <span><?= $ttdh[0]['sdt'] ?></span>
        </div>
        <div>
            <span>Email: </span>
            <span><?= $ttdh[0]['email'] ?></span>
        </div>
        <div>
            <span>Địa chỉ: </span>
            <span><?= $ttdh[0]['diachi'] ?></span>
        </div>
        <div>
            <span>Ngày đặt: </span>
            <span><?= $ttdh[0]['ngaydattour'] ?></span>
        </div>
        <div>
            <span>Số khách hàng: </span>
            <span><?= $ttdh[0]['sokhachhang'] ?></span>
        </div>
        <div class="mx-5">
            <div>Bao gồm:</div>
            <div class="mx-3">
                <span>- Người lớn: </span>
                <span><?= $ttdh[0]['nguoilon'] ?></span>
            </div>
            <?php 
            if($ttdh[0]['trenho'] > 0)
            {
                ?>
                <div class="mx-3">
                    <span>- Trẻ nhỏ: </span>
                    <span><?= $ttdh[0]['trenho'] ?></span>
                </div>
                <?php
            }
            if($ttdh[0]['treem'] > 0)
            {
                ?>
                <div class="mx-3"> 
                    <span>- Trẻ em: </span>
                    <span><?= $ttdh[0]['treem'] ?></span>
                </div>
                <?php
            }
            if($ttdh[0]['embe'] > 0)
            {
                ?>
                <div class="mx-3">
                    <span>- Em bé: </span>
                    <span><?= $ttdh[0]['embe'] ?></span>
                </div>
                <?php
            }
            ?>
        </div>
        <div>
            <div>Danh sách thành viên</div>
            <table class="table">
                <tr class="text-center">
                    <th>Họ tên</th>
                    <th>Giới tính</th>
                    <th>Ngày sinh</th>
                </tr>
                <?php
                    foreach($tvdh as $tv => $value)
                    {
                        ?>
                        <tr class="text-center">
                            <td><?= $value['hoten_hk']?></td>
                            <td><?= $value['gioitinh_hk']?></td>
                            <td><?= $value['ngaysinh_hk']?></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
        <div>
            <span>Tổng tiền: </span>
            <span><?php echo currency_format($ttdh[0]['tongtien']) ?></span>
        </div>
        <div>
            <span>Tình trạng thanh toán: </span>
            <span><?= $ttdh[0]['thanhtoan'] ?></span>
        </div>
    </div>
</div>