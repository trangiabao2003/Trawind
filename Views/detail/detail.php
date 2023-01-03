<title><?php echo $data_tour[0]['locate'] ?></title>
<div class="container">
    <!-- Header tour -->
    <div class="row" style="margin-top: 130px">
        <div class="col-7">
            <div class="row">
                <span class="h2"><?php echo $data_tour[0]['locate'] ?></span>
            </div>
            <div class="row ms-3">
                <form action="?act=like-tour&id_tour=<?= $data_tour[0]['id'] ?>" method="post" class="col-md-3 col-sm-12">
                    <input type="hidden" name="id_tour" value="<?php echo $id ?>">
                    <?php
                        if ($data_tour[0]['liked'] == true)
                        {
                            ?>
                            <button type="submit" name="like_tour" class="btn btn-warning p-2" style="font-size: 25px; width:fit-content; color: white"><i class="fa-solid fa-thumbs-up" style="color: red"></i></button>
                            <?php
                        }
                        else
                        {
                            ?>
                            <button type="submit" name="like_tour" class="btn btn-warning p-2" style="font-size: 25px; width:fit-content; color: white"><i class="fa-solid fa-thumbs-up"></i></button>
                            <?php
                        }
                    ?>
                </form>
                <span class="col-9 h5 mt-2">Nơi xuất phát: <?php echo $data_tour[0]['tentinh'] ?></span>
            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <?php
                if ($data_tour[0]['sale'] == 1)
                {
                    ?>
                    <div>Giá <del class="h6"><?php echo currency_format($data_tour[0]['price']) ?></del>/ Khách</div> 
                    <span><b class="text-danger h4"><?php echo currency_format($data_tour[0]['price_sale']) ?></b>/ Khách</span>
                    <?php
                } 
                else
                {
                    ?>
                    <div class="h6 fs-5">Giá <?php echo currency_format($data_tour[0]['price']) ?>/ Khách</div> 
                    <?php
                }
            ?>
        </div>
        <div class="col-md-2 col-sm-12">
            <div class="row">
                <form class="row" action="?act=order&xuli=thongtinkhachhang&tid=<?php echo $data_tour[0]['id']?>" method="post">
                    <button name="muabtn" type="submit" class="btn btn-danger p-3" style="font-size: 20px;"><i class="fa-solid fa-cart-shopping"></i> Đặt ngay</button>
                </form>  
            </div>
            <div class="row mt-2">
                <form class="row" action="" method="">
                    <button type="button" class="btn border border-primary">Liên hệ tư vấn</button>
                </form> 
            </div>
        </div>
    </div>
    <!-- Tour image  -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-7 col-sm-12">
                <div class="image" style="height: 100%;">
                    <img src="<?php echo $data_tour[0]['anh1'] ?>" alt="" class="img-fluid" style="border-radius: 15px; height: 100%">
                </div>
            </div>
            <div class="col-lg-5 col-sm-12">
                <div class="row small">
                    <div class="col">
                        <div class="image">
                            <img src="<?php echo $data_tour[0]['anh2'] ?>" alt="" class="img-fluid" style="border-radius: 15px; height: 100%">
                        </div>
                    </div>
                    <div class="col">
                        <div class="image">
                            <img src="<?php echo $data_tour[0]['anh3'] ?>" alt="" class="img-fluid" style="border-radius: 15px; height: 100%">
                        </div>
                    </div>
                </div>
                <div class="row big mt-2">
                    <div class="image">
                        <img src="<?php echo $data_tour[0]['anh4'] ?>" alt="" class="img-fluid" style="border-radius: 15px; height: 100%">
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <!-- Info tour  -->
    <div class="row mt-3">
        <div class="row text-center">
            <div class="col">
                <p class="row"><i class="fa-solid fa-clock" style="color: blue; font-size: 25px"></i></p>
                <p class="row"><b>Thời gian</b></p>
                <p class="row"><span><?php echo $data_tour[0]['thoigian'] ?></span></p>
            </div>
            <div class="col">
                <p class="row"><i class="fa-solid fa-bus" style="color: blue; font-size: 25px"></i></p>
                <p class="row"><b>Phương tiện di chuyển</b></p>
                <p class="row"><span><?php echo $data_tour[0]['phuongtien'] ?></span></p>
            </div>
            <div class="col">
                <p class="row"><i class="fa-solid fa-map-location-dot" style="color: blue; font-size: 25px"></i></p>
                <p class="row"><b>Địa điểm tham quan</b></p>
                <p class="row"><span><?php echo $data_tour[0]['diemthamquan'] ?></span></p>
            </div>
            <div class="col">
                <p class="row"><i class="fa-solid fa-burger" style="color: blue; font-size: 25px"></i></p>
                <p class="row"><b>Ẩm thực</b></p>
                <p class="row"><span><?php echo $data_tour[0]['amthuc'] ?></span></p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <p class="row"><i class="fa-solid fa-hotel" style="color: blue; font-size: 25px"></i></p>
                <p class="row"><b>Khách sạn</b></p>
                <p class="row"><span><?php echo $data_tour[0]['khachsan'] ?></span></p>
            </div>
            <div class="col">
                <p class="row"><i class="fa-solid fa-calendar-check" style="color: blue; font-size: 25px"></i></p>
                <p class="row"><b>Thời gian lý tưởng</b></p>
                <p class="row"><span><?php echo $data_tour[0]['tgianlytuong'] ?></span></p>
            </div>
            <div class="col">
                <p class="row"><i class="fa-solid fa-people-roof" style="color: blue; font-size: 25px"></i></p>
                <p class="row"><b>Đối tượng thích hợp</b></p>
                <p class="row"><span><?php echo $data_tour[0]['doituong'] ?></span></p>
            </div>
            <div class="col">
                <p class="row"><i class="fa-solid fa-hand-holding-dollar" style="color: blue; font-size: 25px"></i></p>
                <p class="row"><b>Ưu đãi</b></p>
                <p class="row"><span><?php echo $data_tour[0]['uudai'] ?></span></p>
            </div>
        </div>
    </div>
    <!-- Lich trinh -->
    <div class="container border border-secondary p-2" style="border-radius: 10px; background-color:aliceblue;">
        <div class="h2 text-center">LỊCH TRÌNH</div>
        <div class="row m-auto" style="width: 95%">
            <?php echo $data_tour[0]['lichtrinh'] ?>
        </div>
    </div>
    <div class="mt-5">
        <div class="h4 text-center">ĐÁNH GIÁ</div>
        <div class="row">
            <?php
                foreach($data_comment as $key => $value)
                {
                    ?>
                    <div class="border px-5 py-2 mt-2 col-md-5 col-12 rounded-pill border-primary">
                        <div class="fw-bold fs-5">
                            <?php
                                echo $value['username']
                            ?>
                        </div>
                        <div>
                            <?php
                            if ($value['rate'] <= 10 && $value['rate'] > 8)
                            {
                                ?>
                                <img style="width: 7%" src="Others/images/excellent.png" alt="">
                                <span class="mx-1 fs-5 align-middle">
                                <?php
                                echo $value['rate'];
                                ?>
                                </span>
                                <?php
                            }
                            else if ($value['rate'] <= 8 && $value['rate'] > 6)
                            {
                                ?>
                                <img style="width: 7%" src="Others/images/happiness.png" alt="">
                                <span class="mx-1 fs-5 align-middle">
                                <?php
                                echo $value['rate'];
                                ?>
                                </span>
                                <?php
                            }
                            else if ($value['rate'] <= 6 && $value['rate'] > 4)
                            {
                                ?>
                                <img style="width: 7%" src="Others/images/normal.png" alt="">
                                <span class="mx-1 fs-5 align-middle">
                                <?php
                                echo $value['rate'];
                                ?>
                                </span>
                                <?php
                            }
                            else if ($value['rate'] <= 4 && $value['rate'] > 2)
                            {
                                ?>
                                <img style="width: 7%" src="Others/images/sad.png" alt="">
                                <span class="mx-1 fs-5 align-middle">
                                <?php
                                echo $value['rate'];
                                ?>
                                </span>
                                <?php
                            }
                            else
                            {
                                ?>
                                <img style="width: 7%" src="Others/images/sad_cry.png" alt="">
                                <span class="mx-1 fs-5 align-middle">
                                <?php
                                echo $value['rate'];
                                ?>
                                </span>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="mt-1">
                            <?php
                                echo $value['comment']
                            ?>
                        </div>
                        <div class="d-flex justify-content-end fst-italic">
                            <?php
                                echo $value['time']
                            ?>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
    <div class="row mt-5">
        <h5 class="text-center">GỢI Ý CHO BẠN</h5>
        <div class="row m-auto">
            <?php
                if (isset($datalq))
                {
                    foreach ($datalq as $key => $value)
                    {
                        ?>
                        <div class="tours col-md-3 col-sm-6 mt-4" style="height: 300px; ">
                            <div class="image" style="width: 100%; height: 200px;">
                                <img style="width: 100%; object-fit:cover; height: 200px; border-top-left-radius: 10px; border-top-right-radius: 10px" src="<?php echo $value['image']?>" alt="">
                            </div>
                            <div class="tour_content p-2" style="border: 1px solid #DDDDDD; border-top: none; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px">
                                <div class="tentour mt-2 text-center">
                                    <b style="font-size: 17px;"><?php echo $value['locate'] ?></b> <br>
                                    <b style="font-size: 15px;"><?php echo $value['time'] ?></b>
                                </div>
                                <div class="buttons mt-2 d-flex justify-content-between">
                                    <form action="?act=order&xuli=thongtinkhachhang&tid=<?php echo $value['id']?>" method="post">
                                        <button name="muabtn" type="submit" class="btn btn-danger"><i class="fa-solid fa-cart-shopping"></i> Đặt ngay</button>
                                    </form>
                                    <a href="?act=detail&id=<?php echo $value['id']?>"><button class="btn btn-white border border-1 border-primary">Xem chi tiết</button></a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                else
                {
                    ?>
                    <div>
                        <h4 class="m-auto">Không tìm thấy tour liên quan</h4>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
</div>