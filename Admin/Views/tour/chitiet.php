<title>Xem chi tiết tour</title>
<div class="mt-5">
    <div class="text-center">
        <h3>CHI TIẾT TOUR</h3>
    </div>
    <div>
        <span>Mã Tour: <?= $data[0]['id']?></span>
    </div>
    <div>
        <span>Tên Tour: <?= $data[0]['locate']?></span>
    </div>
    <div>
        <span>Tên Chủ đề: <?= $data[0]['tenchude']?></span>
    </div>
    <div>
        <span>Thời gian đi: <?= $data[0]['time']?></span>
    </div>
    <div>
        <span>Ảnh Thumbnail: <img class="w-25" src="../<?= $data[0]['image'] ?>" alt=""></span>
    </div>
    <div>
        <span>Nơi đi: <?= $data[0]['start_locate']?></span>
    </div>
    <div>
        <span>Nơi đến: <?= $data[0]['end_locate']?></span>
    </div>
    <div>
        <span>Giá: <?php echo currency_format($data[0]['price']) ?></span>
    </div>
    <div>
        <?php
            if ($data[0]['sale'] == 1)
            {
                ?>
                    <div>Giảm giá: Có</div>
                    <div>Phần trăm giảm giá: <?= $data_sale[0]['percent_sale'] ?>%</div>
                    <div>Giá sau giảm: <?php echo currency_format($data_sale[0]['price_sale']) ?></div>
                <?php
            }
            else 
            {
                ?>
                    <span>Giảm giá: Không</span>
                <?php
            } 
        ?>
    </div>
    <div>
        <?php
            if ($data[0]['trangthai'] == 1)
            {
                ?>
                    <span>Trạng thái: Hiện</span>
                <?php
            } 
            else
            {
                ?>
                    <span>Trạng thái: Ẩn</span>
                <?php
            }
        ?>
    </div>
    <div>
        <h5>Thông tin chi tiết</h5>
    </div>
    <div>Ảnh 1: <img class="w-50 mt-2" style="height: 400px" src="../<?= $data[0]['anh1'] ?>" alt=""></div>
    <div>Ảnh 2: <img class="w-50 mt-2" style="height: 400px" src="../<?= $data[0]['anh2'] ?>" alt=""></div>
    <div>Ảnh 3: <img class="w-50 mt-2" style="height: 400px" src="../<?= $data[0]['anh3'] ?>" alt=""></div>
    <div>Ảnh 4: <img class="w-50 mt-2" style="height: 400px" src="../<?= $data[0]['anh4'] ?>" alt=""></div>
    <div>
        <span>Phương tiện di chuyển: <?= $data[0]['phuongtien'] ?></span>
    </div>
    <div>
        <span>Điểm tham quan: <?= $data[0]['diemthamquan'] ?></span>
    </div>
    <div>
        <span>Ẩm thực: <?= $data[0]['amthuc'] ?></span>
    </div>
    <div>
        <span>Khách sạn: <?= $data[0]['khachsan'] ?></span>
    </div>
    <div>
        <span>Thời gian lý tưởng: <?= $data[0]['tgianlytuong'] ?></span>
    </div>
    <div>
        <span>Đối tượng: <?= $data[0]['doituong'] ?></span>
    </div>
    <div>
        <span>Ưu đãi: <?= $data[0]['uudai'] ?></span>
    </div>
    <div>
        <span>Lịch trình: <?= $data[0]['lichtrinh']?></span>
    </div>
</div>
