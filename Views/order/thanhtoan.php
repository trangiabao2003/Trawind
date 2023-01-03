<title>Thanh toán</title>
<div class="row border-top border-bottom border-3 mx-0 w-100" style="margin-top: 100px;">
    <ul class="d-flex justify-content-between my-auto" style="list-style-type: none; width: 15%; margin-left: 7%;">
        <li style="color: blue">1. Nhập thông tin</li>
        <li style="color: blue">></li>
        <li style="color: blue">2. Thanh toán</li>
    </ul>
</div>
<div class="container">
    <div class="row mt-4" style="background-color:rgba(238, 238, 238, 0.4); border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
        <div class="col-md-4 col-sm-12 p-0">
            <img style="width: 100%; border-top-left-radius: 10px; border-bottom-left-radius: 10px;" src="<?php echo $data_tour[0]['image']?>" alt="">
        </div>
        <div class="col-md-8 col-sm-12 mt-3">
            <div class="row">
                <h5><?php echo $data_tour[0]['locate'] ?></h5>
            </div>
            <div class="row">
                <p>Ngày khởi hành: <?php echo date('d/m/Y', mktime(0,0,0,$thang, $ngay + 2, $nam)) ?></p>
            </div>
            <div class="row">
                <p>Thời gian: <?php echo $data_tour[0]['time'] ?></p>
            </div>
            <div class="row">
                <p>Nơi khởi hành: <?php echo $data_tour[0]['tentinh'] ?></p>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <h4 style="font-weight: 700;">Thanh toán</h4>
        <div class="col-lg-8 col-sm-12 mt-5">
            <div class="row">
                <div class="col-5">
                    <div class="row border border-2 p-3 rounded">
                        <div class="col-2">
                            <input class="form-check-input" type="radio" name="pttoan" id="vnpay">
                        </div>
                        <div class="col-10">
                            <div class="row">
                                <div class="col-4">
                                    <img src="Others/images/vnpay_qr1.png" style="width: 60%; " alt="">
                                </div>
                                <div class="col-8">
                                    <span id="ptttvnpay">Thanh toán qua VNPAY</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 border border-2 p-3 rounded">
                        <div class="col-2">
                            <input class="form-check-input" type="radio" name="pttoan" id="visa">
                        </div>
                        <div class="col-10">
                            <div class="row">
                                <div class="col-4">
                                    <img src="Others/images/vs.png" style="width: 60%" alt="">
                                </div>
                                <div class="col-8">
                                    <span id="ptttvisa">Thanh toán qua thẻ VISA</span>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="row mt-4 border border-2 p-3 rounded">
                        <div class="col-2">
                            <input class="form-check-input" type="radio" name="pttoan" id="jcb">
                        </div>
                        <div class="col-10">
                            <div class="row">
                                <div class="col-4">
                                    <img src="Others/images/jcb.png" style="width: 60%" alt="">
                                </div>
                                <div class="col-8">
                                    <span id="ptttjcb">Thanh toán qua thẻ JCB</span>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="row mt-4 border border-2 p-3 rounded">
                        <div class="col-2">
                            <input class="form-check-input" type="radio" name="pttoan" id="mc">
                        </div>
                        <div class="col-10">
                            <div class="row">
                                <div class="col-4">
                                    <img src="Others/images/mtc.png" style="width: 60%" alt="">
                                </div>
                                <div class="col-8">
                                    <span id="ptttmc">Thanh toán qua thẻ Mastercard</span>
                                </div>
                            </div>     
                        </div>
                    </div>
                    <div class="row mt-4 border border-2 p-3 rounded">
                        <div class="col-2">
                            <input class="form-check-input" type="radio" name="pttoan" id="shopeepay">
                        </div>
                        <div class="col-10">
                            <div class="row">
                                <div class="col-4">
                                    <img src="Others/images/shopeepay.png" style="width: 60%" alt="">
                                </div>
                                <div class="col-8">
                                    <span id="ptttshopeepay">Thanh toán qua ví ShopeePay</span>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="row mt-4 border border-2 p-3 rounded">
                        <div class="col-2">
                            <input class="form-check-input" type="radio" name="pttoan" id="atm">
                        </div>
                        <div class="col-10">
                            <div class="row">
                                <div class="col-4">
                                    <img src="Others/images/atmcard.png" style="width: 60%" alt="">
                                </div>
                                <div class="col-8">
                                    <span id="ptttatm">Thanh toán qua chuyển khoản ngân hàng trong nước</span>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row border border-1 ms-2 me-2 rounded d-none" id="thanhtoan">
                        <h5 class="mt-1">Thông tin thanh toán</h5>
                        <div class="row mt-3">
                            <span class="col-5">Tour đặt mua</span>
                            <span class="col-7"><?php echo $data_tour[0]['locate'] ?></span>
                        </div>
                        <div class="row mt-2">
                            <span class="col-5">Tổng tiền</span>
                            <span class="col-7"><?php echo currency_format($data_dh[0]['tongtien']);?></span>
                        </div>
                        <div class="row mt-2">
                            <span class="col-5">Phương thức thanh toán</span>
                            <span class="col-7" id="input_pttt"></span>
                        </div>
                        <div class="row mt-3">
                            <span style="font-size: 15px; text-align:center">Vui lòng quét mã QR sau để thực hiện giao dịch</span>
                        </div>
                        <div class="row" id="qr_code">
                            <img class="w-75 img-fluid m-auto" src="Others/images/qrcode.png" alt="">
                        </div>
                        <div class="row" style="font-size: 15px; text-align:center">
                            <span>Lưu ý: Mã QR sẽ hết hạn sau 15 phút. Vui lòng hoàn tất thanh toán trong 15 phút</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12 mt-5 p-2" style="height:fit-content; border: 1px solid #BBBBBB; border-radius: 10px">
            <h5>Tóm tắt chuyến đi</h5>
            <div class="row">
                <h6>Tour trọn gói</h6>
            </div>
            <div class="row">
                <div class="col-4">
                    <img style="width: 100%; border-radius: 10px;" src="<?php echo $data_tour[0]['image']?>" alt="">
                </div>
                <div class="col-8">
                    <h5><?php echo $data_tour[0]['locate'] ?></h5>
                </div>
            </div>
            <div class="row mt-3">
                <div class="row"><span style="font-size: 15px"><i class="fa-solid fa-calendar-check text-primary"></i> Bắt đầu chuyến đi</span></div>
                <div class="row">
                    <p class="ms-4" style="font-weight: 700;">
                        <?php 
                            $thu;
                            switch (date("l",mktime(0,0,0,$thang, $ngay + 2, $nam)))
                            {
                                case "Monday":
                                    $thu = "T2";
                                    break;
                                case "Tuesday":
                                    $thu = "T3";
                                    break;
                                case "Wednesday":
                                    $thu = "T4";
                                    break;
                                case "Thursday":
                                    $thu = "T5";
                                    break;
                                case "Friday":
                                    $thu = "T6";
                                    break;
                                case "Saturday":
                                    $thu = "T7";
                                    break;
                                case "Sunday":
                                    $thu = "CN";
                                    break;
                            }
                            echo $thu . ", " . $ngay + 2 . " Tháng " . $thang . ", " . $nam; 
                        ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="row"><span style="font-size: 15px"><i class="fa-solid fa-calendar-check text-primary"></i> Kết thúc chuyến đi</span></div>
                <div class="row">
                    <p class="ms-4" style="font-weight: 700;">
                        <?php 
                            $tgdi = substr($data_tour[0]['time'],0,1);
                            $thu;
                            switch (date("l",mktime(0,0,0,$thang, $ngay + 2 + $tgdi , $nam)))
                            {
                                case "Monday":
                                    $thu = "T2";
                                    break;
                                case "Tuesday":
                                    $thu = "T3";
                                    break;
                                case "Wednesday":
                                    $thu = "T4";
                                    break;
                                case "Thursday":
                                    $thu = "T5";
                                    break;
                                case "Friday":
                                    $thu = "T6";
                                    break;
                                case "Saturday":
                                    $thu = "T7";
                                    break;
                                case "Sunday":
                                    $thu = "CN";
                                    break;
                            }
                            echo $thu . ", " . $ngay + 2 + $tgdi . " Tháng " . $thang . ", " . $nam; 
                        ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col"><p class="mt-5">Hành khách</p></div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <p id="tonghanhkhach" class="mt-5"><?php echo $data_dh[0]['sokhachhang'] ?> Người</p>
                        </div>
                        <div class="col">
                            <div class="row">
                                <p id="songuoilon" style="font-size: 13px"><?php echo $data_dh[0]['nguoilon'] ?> Người lớn</p>
                            <div class="row">
                                <p id="sotreem" style="font-size: 13px"><?php echo $data_dh[0]['treem'] ?> Trẻ em</p>
                            </div>
                            <div class="row">
                                <p id="sotrenho" style="font-size: 13px"><?php echo $data_dh[0]['trenho'] ?> Trẻ nhỏ</p>
                            </div>
                            <div class="row">
                                <p id="soembe" style="font-size: 13px"><?php echo $data_dh[0]['embe'] ?> Em bé</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Người lớn</p>
                </div>
                <div class="col d-flex justify-content-end">
                    <p id="gianguoilon"><?php echo $data_dh[0]['nguoilon'] ?> x </p>
                    <span>&nbsp;<?php 
                        if ($data_tour[0]['sale'] == 1) 
                        {
                            echo currency_format($data_tour[0]['price_sale']);
                        }
                        else echo currency_format($data_tour[0]['price']);
                    ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Trẻ em</p>
                </div>
                <div class="col d-flex justify-content-end">
                    <?php 
                        if ($data_dh[0]['treem'] != "0")
                        {
                            ?>
                            <p><?php echo $data_dh[0]['treem'] ?> x 
                            <?php 
                            if ($data_tour[0]['sale'] == 1) 
                            {
                                echo currency_format($data_tour[0]['price_sale']/2);
                            }
                            else echo currency_format($data_tour[0]['price']/2); ?>
                            </p>
                            <?php
                        } 
                        else
                        {
                            ?>
                            <p>0 VND</p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Trẻ nhỏ</p>
                </div>
                <div class="col d-flex justify-content-end">
                    <?php 
                        if ($data_dh[0]['trenho'] != "0")
                        {
                            ?>
                            <p><?php echo $data_dh[0]['trenho'] ?> x 
                            <?php 
                            if ($data_tour[0]['sale'] == 1) 
                            {
                                echo currency_format($data_tour[0]['price_sale']/8);
                            }
                            else echo currency_format($data_tour[0]['price']/8); ?>
                            </p>
                            <?php
                        } 
                        else
                        {
                            ?>
                            <p>0 VND</p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Em bé</p>
                </div>
                <div class="col d-flex justify-content-end">
                    <?php 
                        if ($data_dh[0]['embe'] != "0")
                        {
                            ?>
                            <p><?php echo $data_dh[0]['embe'] ?> x 
                            <?php 
                            if ($row1['sale'] != 0) 
                            {
                                echo currency_format($data_tour[0]['price_sale']/20);
                            }
                            else echo currency_format($data_tour[0]['price']/20); ?>
                            </p>
                            <?php
                        } 
                        else
                        {
                            ?>
                            <p>0 VND</p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col">
                    <p>Mã giảm giá</p>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-7">
                            <input class="form-control" type="text" name="magiamgia" id="magiamgia" placeholder="Mã giảm giá">
                        </div>
                        <div class="col-5">
                            <input type="submit" value="Áp dụng" class="btn btn-success">
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row mt-2 m-auto" style="border-top: 2px solid red; width: 98%"> 
                <div class="col">
                    <h4 class="mt-1">Tổng cộng</h4>
                </div>
                <div class="col" style="font-size:20px; color: red; text-align:end;margin-top: 5px">
                    <?php 
                        echo currency_format($data_dh[0]['tongtien']);
                    ?>
                </div>
            </div>
            <div class="row m-auto">
                <form action="?act=order&xuli=pay&madh=<?= $madh ?>" method="post">
                    <button id="datngaybtn" type="submit" name="datngaybtn" class="btn btn-danger w-100">Xác nhận thanh toán</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function()
    {
        var vnpay = $('#vnpay');
        var visa = $('#visa');
        var jcb = $('#jcb');
        var mc = $('#mc');
        var shopeepay = $('#shopeepay');
        var atm = $('#atm');
        var pttt;
        vnpay.change(function() {
            vnpay.parent().parent().addClass('border-primary');
            visa.parent().parent().removeClass('border-primary');
            jcb.parent().parent().removeClass('border-primary');
            mc.parent().parent().removeClass('border-primary');
            shopeepay.parent().parent().removeClass('border-primary');
            atm.parent().parent().removeClass('border-primary');
            pttt = $('#ptttvnpay').text();
        })
        visa.change(function() {
            visa.parent().parent().addClass('border-primary');
            vnpay.parent().parent().removeClass('border-primary');
            jcb.parent().parent().removeClass('border-primary');
            mc.parent().parent().removeClass('border-primary');
            shopeepay.parent().parent().removeClass('border-primary');
            atm.parent().parent().removeClass('border-primary');
            pttt = $('#ptttvisa').text();
        })
        jcb.change(function() {
            jcb.parent().parent().addClass('border-primary');
            vnpay.parent().parent().removeClass('border-primary');
            visa.parent().parent().removeClass('border-primary');
            mc.parent().parent().removeClass('border-primary');
            shopeepay.parent().parent().removeClass('border-primary');
            atm.parent().parent().removeClass('border-primary');
            pttt = $('#ptttjcb').text();
        })
        mc.change(function() {
            mc.parent().parent().addClass('border-primary');
            vnpay.parent().parent().removeClass('border-primary');
            jcb.parent().parent().removeClass('border-primary');
            visa.parent().parent().removeClass('border-primary');
            shopeepay.parent().parent().removeClass('border-primary');
            atm.parent().parent().removeClass('border-primary');
            pttt = $('#ptttmc').text();
        })
        shopeepay.change(function() {
            shopeepay.parent().parent().addClass('border-primary');
            vnpay.parent().parent().removeClass('border-primary');
            jcb.parent().parent().removeClass('border-primary');
            mc.parent().parent().removeClass('border-primary');
            visa.parent().parent().removeClass('border-primary');
            atm.parent().parent().removeClass('border-primary');
            pttt = $('#ptttshopeepay').text();
        })
        atm.change(function() {
            atm.parent().parent().addClass('border-primary');
            vnpay.parent().parent().removeClass('border-primary');
            jcb.parent().parent().removeClass('border-primary');
            mc.parent().parent().removeClass('border-primary');
            shopeepay.parent().parent().removeClass('border-primary');
            visa.parent().parent().removeClass('border-primary');
            pttt = $('#ptttatm').text();
        })
        $(':radio').change(function()
        {
            $('#thanhtoan').removeClass("d-none");
            $('#input_pttt').text(pttt);
        })
    })
</script>
</div>