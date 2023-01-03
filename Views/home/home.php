<title>Trang chủ</title>
<div class="slideshow">
    <div class="slidebox">
        <?php
            foreach ($data_slideshow as $key => $value)
            {
                ?>
                <div class="slide"><img src="<?= $value['img'] ?>" alt=""></div>
                <?php
            }
        ?>
    </div>
</div>
<div class="booking">
    <div class="row">
        <h2 class="col" style="text-decoration:underline; text-decoration-color:red; margin-left: 24px">
            TÌM KIẾM TOUR
        </h2>
        <span class="col">
            <form action="?" method="get" class="d-flex justify-content-end">
                <input type="hidden" name="act" value="tour">
                <input type="text" name="search_key" id="search_key" size="30" placeholder="Tìm kiếm nhanh" style="padding: 3px; border: 1px solid black; border-top-left-radius: 5px; border-bottom-left-radius: 5px; outline:0px">
                <button type="submit" style="border-left: 0; border: 1px solid black; border-top-right-radius: 5px; border-bottom-right-radius: 5px; cursor:pointer"><i class="fa-solid fa-magnifying-glass" style="font-size: 20px; padding: 3px;"></i></button>
            </form>
        </span>  
    </div>
    <form action="?" method="get">
        <input type="hidden" name="act" value="tour">
        <div class="row" id="book">
            <div class="col-5 col-lg mx-3 boxbook mt-2 d-flex flex-column align-items-center">
                <label for="diemdi" style="font-size: 16px;">
                    <i class="fa-solid fa-location-dot" style="color: blue;"></i>
                    Điểm đi</label>
                <select class="mx-5" name="diemdi" id="diemdi">
                    <option value="">Chọn điểm đi</option>
                    <option value="41">TP. Hồ Chí Minh</option>
                    <option value="29">Hà Nội</option>
                    <option value="43">Đà Nẵng</option>
                    <option value="24">Lào Cai</option>
                    <option value="15">Hải Phòng</option>
                    <option value="86">Bình Thuận</option>
                    <option value="79">Khánh Hòa</option>
                    <option value="75">Huế</option>
                    <option value="77">Bình Định</option>
                    <option value="72">Bà Rịa - Vũng Tàu</option>
                </select>
            </div>
            <div class="col-5 col-lg mx-3 boxbook mt-2 d-flex flex-column align-items-center">
                <label for="diemden" style="font-size: 16px;">
                    <i class="fa-solid fa-location-dot" style="color: blue;"></i>
                    Điểm đến
                </label>
                <select class="mx-5" name="diemden" id="diemden">
                    <option value="">Chọn điểm đến</option>
                    <option value="29">Hà Nội</option>
                    <option value="75">Huế</option>
                    <option value="24">Lào Cai</option>
                    <option value="43">Đà Nẵng</option>
                    <option value="92">Quảng Nam</option>
                    <option value="49">Lâm Đồng</option>
                    <option value="77">Bình Định</option>
                    <option value="14">Quảng Ninh</option>
                    <option value="73">Quảng Bình</option>
                    <option value="79">Khánh Hòa</option>
                </select>
            </div>
            <div class="col-5 col-lg mx-3 boxbook mt-2 d-flex flex-column align-items-center">
                <label for="lichtrinh" style="font-size: 16px;">
                    <i class="fa-solid fa-calendar-days" style="color: blue;"></i>
                    Lịch trình
                </label>
                <select class="mx-5" name="lichtrinh" id="lichtrinh">
                    <option value="">Chọn lịch trình</option>
                    <option value="1 Ngày - 0 Đêm">1 Ngày - 0 Đêm</option>
                    <option value="1 Ngày - 1 Đêm">1 Ngày - 1 Đêm</option>
                    <option value="2 Ngày - 1 Đêm">2 Ngày - 1 Đêm</option>
                    <option value="2 Ngày - 2 Đêm">2 Ngày - 2 Đêm</option>
                    <option value="3 Ngày - 2 Đêm">3 Ngày - 2 Đêm</option>
                    <option value="3 Ngày - 3 Đêm">3 Ngày - 3 Đêm</option>
                    <option value="4 Ngày - 3 Đêm">4 Ngày - 3 Đêm</option>
                    <option value="5 Ngày - 5 Đêm">5 Ngày - 5 Đêm</option>
                    <option value="7 Ngày - 7 Đêm">7 Ngày - 7 Đêm</option>
                </select>
            </div>
            <div class="col-5 col-lg mx-3 boxbook mt-2 d-flex flex-column align-items-center">
                <label for="khoanggia" style="font-size: 16px;">
                    <i class="fa-solid fa-dollar-sign" style="color: blue;"></i>
                    Khoảng giá
                </label>
                <select class="mx-5" name="gia" id="khoanggia">
                    <option value="">Chọn khoảng giá</option>
                    <option value="Dưới 2 triệu">Dưới 2 triệu</option>
                    <option value="Từ 2 - 5 triệu">Từ 2 - 5 triệu</option>
                    <option value="Từ 5 - 10 triệu">Từ 5 - 10 triệu</option>
                    <option value="Từ 10 - 50 triệu">Từ 10 - 50 triệu</option>
                    <option value="Trên 50 triệu">Trên 50 triệu</option>
                </select>
            </div>
        </div>
        <div class="row text-center">
            <div id="submitbt">
                <button name="search_cdt_button" type="submit">Tìm kiếm</button>
            </div> 
        </div>
    </form>
</div>
<div class="tour_noibat" style="margin-top: 200px">
    <h2 style="text-decoration:underline; text-decoration-color:red; color: black; text-align:center">HOT TOUR</h2>
    <div class="container">
        <div class="row">
            <?php 
            foreach($data_tournoibat as $key => $value)
            {
                ?>
                <div class="tour p-0 mt-4 col-lg-3 col-md-5 col-12 mx-md-5" style="height: 360px; background-color:rgba(238, 238, 238, 0.3);">
                    <div class="image" style="width: 100%; height: 200px; ">
                        <img style="height: 200px; border-top-left-radius: 10px; border-top-right-radius: 10px" src="<?= $value['image']?>" alt="" class="w-100 img-fluid">
                    </div>
                    <div class="quantam">
                        <form action="?act=like-tour&id_tour=<?= $value['id'] ?>" method="post">
                            <input type="hidden" name="id_tour" value="<?= $value['id']?>">
                            <?php
                                if (isset($_SESSION['is_login']))
                                {
                                    $liked = false;
                                    for ($i = 0; $i < count($data_list_liked_tour); $i++)
                                    {
                                        if ($value['id'] == $data_list_liked_tour[$i]['tour_id'])
                                        {
                                            $liked = true;
                                            ?>
                                            <button type="submit" name="like_tour" style=" border: none;border-radius: 5px;background-color: rgba(202,228,225,0.5);position: absolute;font-size: 25px;top: 20px;left: 10px;padding: 3px;color: red;cursor: pointer;line-height: 0.5;"><i class="fa-solid fa-heart" ></i></button>
                                            <?php
                                            break;
                                        }
                                    }
                                    if ($liked == false)
                                    {
                                        ?>
                                        <button type="submit" name="like_tour" style="border: none;border-radius: 5px;background-color: rgba(202,228,225,0.5);position: absolute;font-size: 25px;top: 20px;left: 10px;padding: 3px;color: white;cursor: pointer;line-height: 0.5;"><i class="fa-solid fa-heart"></i></button>
                                        <?php
                                    }                                   
                                }
                                else
                                {
                                    ?>
                                    <button type="submit" name="like_tour" style="border: none;border-radius: 5px;background-color: rgba(202,228,225,0.5);position: absolute;font-size: 25px;top: 20px;left: 10px;padding: 3px;color: white;cursor: pointer;line-height: 0.5;"><i class="fa-solid fa-heart"></i></button>
                                    <?php
                                }
                            ?>
                        </form>
                    </div>
                    <div class="tourcontent p-2">
                        <p><a style="text-decoration: none; color: rgb(0, 140, 255);" href="?act=detail&id=<?php echo $value['id']?>"><?php echo $value['locate'] ?></a></p>
                        <div class="datngay">
                            <?php
                                if ($value['sale'] == 1)
                                {
                                    ?>
                                    <p>Giá: <del><?php echo currency_format($value['price']) ?></del></p>
                                    <span id="giagoc"><?php echo currency_format($value['price_sale']) ?></span>
                                    <span id="giamgia"><?php echo $value['percent_sale'] ?>% GIẢM</span>
                                    <?php
                                } 
                                else
                                {
                                    ?>
                                    <span id="gia">Giá: <?php echo currency_format($value['price']) ?></span>
                                    <?php
                                }
                            ?>
                            <div class="m-auto mt-2 text-center">
                                <form action="?act=order&xuli=thongtinkhachhang&tid=<?php echo $value['id']?>" method="POST">
                                    <button name="muabtn" type="submit">Đặt Ngay</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<div class="hot_tour mt-5">
    <h2 style="text-decoration:underline; text-decoration-color:red; color: black; text-align:center">TOUR SALE</h2>
    <div id="tour_container">
        <div class="container mt-5">
            <div class="row" >
                <?php
                    foreach($data_toursale as $key => $value)
                    {
                    ?>
                        <div class="tour p-0 mt-4 col-lg-3 col-sm-5 col-12 mx-md-3" style="height: 450px;  background-color:rgba(238, 238, 238, 0.3);">
                            <div class="image" style="width: 100%; height: 200px; ">
                                <img style="height: 200px; border-top-left-radius: 10px; border-top-right-radius: 10px" src="<?= $value['image']?>" alt="" class="w-100 img-fluid">
                            </div>
                            <div class="quantam">
                                <form action="?act=like-tour&id_tour=<?= $value['id'] ?>" method="post">
                                    <input type="hidden" name="id_tour" value="<?= $value['id']?>">
                                    <?php
                                        if (isset($_SESSION['is_login']))
                                        {
                                            $liked = false;
                                            for ($i = 0; $i < count($data_list_liked_tour); $i++)
                                            {
                                                if ($value['id'] == $data_list_liked_tour[$i]['tour_id'])
                                                {
                                                    $liked = true;
                                                    ?>
                                                    <button type="submit" name="like_tour" style=" border: none;border-radius: 5px;background-color: rgba(202,228,225,0.5);position: absolute;font-size: 25px;top: 20px;left: 10px;padding: 3px;color: red;cursor: pointer;line-height: 0.5;"><i class="fa-solid fa-heart" ></i></button>
                                                    <?php
                                                    break;
                                                }
                                            }
                                            if ($liked == false)
                                            {
                                                ?>
                                                <button type="submit" name="like_tour" style="border: none;border-radius: 5px;background-color: rgba(202,228,225,0.5);position: absolute;font-size: 25px;top: 20px;left: 10px;padding: 3px;color: white;cursor: pointer;line-height: 0.5;"><i class="fa-solid fa-heart"></i></button>
                                                <?php
                                            }                                   
                                        }
                                        else
                                        {
                                            ?>
                                            <button type="submit" name="like_tour" style="border: none;border-radius: 5px;background-color: rgba(202,228,225,0.5);position: absolute;font-size: 25px;top: 20px;left: 10px;padding: 3px;color: white;cursor: pointer;line-height: 0.5;"><i class="fa-solid fa-heart"></i></button>
                                            <?php
                                        }
                                    ?>
                                </form>
                                <span>
                                    <i class="fa-solid fa-star" id="danhgia" style="position: absolute;top:10px;right: 5px;font-size: 40px;color: rgb(255, 166, 0);"></i>
                                    <b id="text" style="position: absolute;top:21px;right: 18px;font-size: 15px;color: white;"><?php echo $value['rate'] ?></b>
                                </span>
                            </div>
                            <div class="tourcontent p-2">
                                <p><i class="fa-solid fa-calendar-day"  ></i> <?php echo $value['time'] ?></p>
                                <p><a style="text-decoration: none; color: rgb(0, 140, 255);" href="?act=detail&id=<?php echo $value['id']?>"><?php echo $value['locate'] ?></a></p>
                                <p>Nơi khởi hành: <?php echo $value['tentinh'] ?></p>
                                <div class="datngay">
                                    <p>Giá: <del><?php echo currency_format($value['price']) ?></del></p>
                                    <span id="giagoc"><?php echo currency_format($value['price_sale']) ?></span>
                                    <span id="giamgia"><?php echo $value['percent_sale'] ?>% GIẢM</span>
                                <div>
                                    <form action="?act=order&xuli=thongtinkhachhang&tid=<?php echo $value['id']?>" method="POST">
                                        <button name="muabtn" type="submit">Đặt Ngay</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="khamphavn">
        <a href="?act=dltn">
            <h2 style="text-decoration:underline; text-decoration-color:red; color:black">
                KHÁM PHÁ VIỆT NAM
            </h2>
        </a>
        <p>Việt Nam - một đất nước nhỏ bé nhưng được thiên nhiên ưu ái ban tặng những bức tranh đẹp đến nao lòng. Đó là những bờ biển dài với bãi cát trắng, 
            với tiếng sóng vỗ rì rào, với làn nước trong xanh. Đó là những hang động dài hàng cây số với những khối thạch nhũ kì diệu. Đó là những khu rừng 
            ngập tràn tiếng chim đang gọi bạn, ngập tràn hoa lá thi nhau đua nở. Tất cả những thứ đó đã tạo nên một Việt Nam thơ mộng, đẹp đẽ biết bao! 
        </p>
        <div class="diadiemkhampha">
            <?php
                foreach ($data_randomtinh as $key => $value)
                {
                    ?>
                    <div class="tinh">
                        <a href="?act=tinh&matinh=<?= $value['matinh'] ?>">
                            <img src="<?= $value['img'] ?>">
                            <div class="text">
                                 <?= $value['tentinh'] ?>
                            </div>
                        </a>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
    <div id="chiase">
        <a href="">
            <h2 style="text-decoration:underline; text-decoration-color:red; color: black">CHIA SẺ</h2>
        </a>
        <div id="contain">
            <div id="left">
                <div class="content">
                    <img src="Others/images/bamboo.jpg" alt="">
                    <div class="title_time">
                        <div class="title">
                            CÁC PHƯƠNG TIỆN DI CHUYỂN AN TOÀN MÙA DỊCH
                        </div>
                        <div class="time" style="margin-top: 75px;">
                            <i>22/04/2022</i>
                            <i class="fa-solid fa-eye"></i> 
                            <i>100 lượt xem</i>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <img src="Others/images/phuquoc.jpg" alt="">
                    <div class="title_time">
                        <div class="title">
                            THỜI ĐIỂM THÍCH HỢP NHẤT TRONG NĂM ĐỂ ĐI PHÚ QUỐC
                        </div>
                        <div class="time" style="margin-top: 75px;">
                            <i>22/04/2022</i>
                            <i class="fa-solid fa-eye"></i> 
                            <i>65 lượt xem</i>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <img src="Others/images/condao.jpg" alt="">
                    <div class="title_time">
                        <div class="title">
                            KINH NGHIỆM ĐI CÔN ĐẢO
                        </div>
                        <div class="time" style="margin-top: 120px;">
                            <i>14/04/2022</i>
                            <i class="fa-solid fa-eye"></i> 
                            <i>32 lượt xem</i>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <img src="Others/images/nhatrang2.jpg" alt="">
                    <div class="title_time">
                        <div class="title">
                            NÊN ĐI NHA TRANG HAY PHÚ QUỐC?
                        </div>
                        <div class="time">
                            <i>10/04/2022</i>
                            <i class="fa-solid fa-eye"></i> 
                            <i>105 lượt xem</i>
                        </div>
                    </div>
                </div>
            </div>
            <div id="right">
                <div class="content">
                    <img src="Others/images/monanhue.jpg" alt="">
                    <div class="title_time">
                        <div class="title">
                            10 MÓN ĂN BẠN NÊN THỬ KHI ĐẾN HUẾ
                        </div>
                        <div class="time">
                            <i>15/04/2022</i>
                            <i class="fa-solid fa-eye"></i> 
                            <i>202 lượt xem</i>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <img src="Others/images/sunwheel.jpg" alt="">
                    <div class="title_time">
                        <div class="title">
                            9 ĐỊA ĐIỂM KHÔNG NÊN BỎ LỠ KHI ĐẾN ĐÀ NẴNG
                        </div>
                        <div class="time">
                            <i>13/03/2022</i>
                            <i class="fa-solid fa-eye"></i> 
                            <i>96 lượt xem</i>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <img src="Others/images/hangsondoong.jpg" alt="">
                    <div class="title_time">
                        <div class="title">
                            KINH NGHIỆM KHÁM PHÁ HANG SƠN ĐOÒNG
                        </div>
                        <div class="time">
                            <i>24/04/2022</i>
                            <i class="fa-solid fa-eye"></i> 
                            <i>51 lượt xem</i>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <img src="Others/images/dulich.jpg" alt="">
                    <div class="title_time">
                        <div class="title">
                            LÀM THẾ NÀO ĐỂ CÓ MỘT CHUYẾN DU LỊCH TỐI ƯU?
                        </div>
                        <div class="time">
                            <i>12/04/2022</i>
                            <i class="fa-solid fa-eye"></i> 
                            <i>39 lượt xem</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="other_button">
            <button type="submit">Xem thêm >></button>
        </div>
    </div>
   