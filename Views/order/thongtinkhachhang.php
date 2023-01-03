<title>Đặt mua</title>
<div class="row border-top border-bottom border-3 w-100 mx-0" style="margin-top: 100px;">
    <ul class="d-flex justify-content-between my-auto" style="list-style-type: none; width: 15%; margin-left: 7%;">
        <li style="color: blue">1. Nhập thông tin</li>
        <li style="color: blue">></li>
        <li>2. Thanh toán</li>
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
        <h4 style="font-weight: 700;">Tổng quan về chuyến đi</h4>
        <div class="col-lg-8 col-sm-12 mt-5">
            <h5>Thông tin liên lạc</h5>
            <form action="?act=order&xuli=dattour" method="post" name="form-donhang" id="form-donhang" style="background-color:rgba(238, 238, 238, 0.4); padding: 10px; border-radius: 10px; margin-top: 20px">
                <input name="t_id" id="t_id" type="hidden" value="<?php echo $data_tour[0]['id'] ?>">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <label for="hoten_datmua">Họ và Tên <i style="color: red">*</i></label>
                        </div>
                        <div class="row w-100 ms-1">
                            <input class="form-control"  type="text" name="hoten_datmua" id="hoten_datmua" value="<?= $hoten ?>" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                                <label for="sdt">Số Điện Thoại <i style="color: red">*</i></label>
                        </div>
                        <div class="row w-100 ms-1">
                            <input class="form-control"  type="tel" name="sdt" id="sdt" value="<?= $sdt?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <label for="email">Email <i style="color: red">*</i></label>
                        </div>
                        <div class="row w-100 ms-1">
                            <input class="form-control"  type="text" name="email" id="email" value="<?php echo $email?>" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                                <label for="diachi">Địa Chỉ</label>
                        </div>
                        <div class="row w-100 ms-1">
                            <input  class="form-control" type="text" name="diachi" id="diachi" value="<?php echo $diachi?>">
                        </div>
                    </div>
                </div>
            </form>
            <h5 class="mt-5">Hành khách</h5>
            <div class="row">
                <div class="col border border-2 ms-5" style="border-radius: 10px;">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <b style="font-size: 18px">Người lớn</b><br>
                            <span>> 12 tuổi</span>
                        </div>
                        <div class="col-md-12 col-lg-8 my-auto text-end" id="nguoilon">
                            <i style="font-size: 25px; cursor:pointer" class="fa-solid fa-circle-minus mx-3 remove"></i>
                            <input form="form-donhang" type="text" name="songuoilon" id="" value="1" readonly size="1" style="border: none; outline: none; text-align:center; font-size:25px">
                            <i style="font-size: 25px; cursor:pointer" class="fa-solid fa-circle-plus mx-3 add"></i>
                        </div>
                    </div>
                </div>
                <div class="col border border-2  ms-5 me-5" style="border-radius: 10px;">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <b style="font-size: 18px">Trẻ em</b><br>
                            <span>Từ 5 - 12 tuổi</span>
                        </div>
                        <div class="col-md-12 col-lg-8 my-auto text-end" id="treem">
                            <i style="font-size: 25px; cursor:pointer" class="fa-solid fa-circle-minus mx-3 remove"></i>
                            <input form="form-donhang" type="text" name="sotreem" id="" value="0" readonly size="1" style="border: none; outline: none; text-align:center; font-size:25px">
                            <i style="font-size: 25px; cursor:pointer" class="fa-solid fa-circle-plus mx-3 add"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col border border-2 ms-5" style="border-radius: 10px">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <b style="font-size: 18px">Trẻ nhỏ</b><br>
                            <span>Từ 2 - 4 tuổi</span>
                        </div>
                        <div class="col-md-12 col-lg-8 my-auto text-end" id="trenho">
                            <i style="font-size: 25px; cursor:pointer" class="fa-solid fa-circle-minus mx-3 remove"></i>
                            <input form="form-donhang" type="text" name="sotrenho" id="" value="0" readonly size="1" style="border: none; outline: none; text-align:center; font-size:25px">
                            <i style="font-size: 25px; cursor:pointer" class="fa-solid fa-circle-plus mx-3 add"></i>
                        </div>
                    </div>
                </div>
                <div class="col border border-2  ms-5 me-5" style="border-radius: 10px">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <b style="font-size: 18px">Em bé</b><br>
                            <span>Từ 0 - 2 tuổi</span>
                        </div>
                        <div class="col-md-12 col-lg-8 my-auto text-end" id="embe">
                            <i style="font-size: 25px; cursor:pointer" class="fa-solid fa-circle-minus mx-3 remove"></i>
                            <input form="form-donhang" type="text" name="soembe" id="" value="0" readonly size="1" style="border: none; outline: none; text-align:center; font-size:25px">
                            <i style="font-size: 25px; cursor:pointer" class="fa-solid fa-circle-plus mx-3 add"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4" style="background-color:rgba(238, 238, 238, 0.4); padding: 20px; border-radius: 10px;">
                <div class="col">
                    <div class="row">
                        - Người lớn sinh trước ngày <?php echo date('d/m/Y', mktime(0,0,0,$thang, $ngay + 1, $nam - 12))?>
                    </div>
                    <div class="row">
                        - Trẻ nhỏ sinh từ ngày <?php echo date('d/m/Y', mktime(0,0,0,$thang, $ngay + 2, $nam - 4))?> đến ngày <?php echo date('d/m/Y', mktime(0,0,0,$thang, $ngay + 1, $nam - 2))?>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                    - Trẻ em sinh từ ngày <?php echo date('d/m/Y', mktime(0,0,0,$thang, $ngay + 2, $nam - 11))?> đến ngày <?php echo date('d/m/Y', mktime(0,0,0,$thang, $ngay + 1, $nam - 5))?>
                    </div>
                    <div class="row">
                    - Em bé sinh từ ngày <?php echo date('d/m/Y', mktime(0,0,0,$thang, $ngay + 2, $nam - 2))?> đến ngày <?php echo date('d/m/Y', mktime(0,0,0,$thang, $ngay + 1, $nam))?>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <h5>Thông tin hành khách</h5>
                    <div class="row form-nguoilon-container" style="background-color:rgba(238, 238, 238, 0.4); padding: 10px; border-radius: 10px;">
                        <h6 style="font-weight: 700;" class="mt-3">Người lớn</h6>
                        <div class="row">
                            <div class="col-4"><label for="hoten">Họ tên</label></div>
                            <div class="col-2"><label for="gioitinh">Giới tính</label></div>
                            <div class="col-6"><label class="ms-2" for="day">Ngày sinh</label></div>
                        </div>
                        <div class="form-nguoilon row mt-2">
                            <div class="col-4">
                                <div class="row w-100">
                                    <input class="form-control ms-2" type="text" name="hoten[]" id="hoten" placeholder="Nhập họ tên" form="form-donhang" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <select class="form-control ms-2" name="gioitinh[]" id="gioitinh" style="padding: 6px;" form="form-donhang" required>
                                        <option value="gt">Giới tính</option>
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <option value="Không xác định">Không xác định</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control ms-2" id="day" name="day[]" style="padding: 6px;" form="form-donhang" required>
                                            <option value="ngay">Ngày</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control ms-2" id="month" name="month[]" style="padding: 6px;" form="form-donhang" required>
                                            <option value="thang">Tháng</option>
                                            <option value="Tháng 1">Tháng 1</option>
                                            <option value="Tháng 2">Tháng 2</option>
                                            <option value="Tháng 3">Tháng 3</option>
                                            <option value="Tháng 4">Tháng 4</option>
                                            <option value="Tháng 5">Tháng 5</option>
                                            <option value="Tháng 6">Tháng 6</option>
                                            <option value="Tháng 7">Tháng 7</option>
                                            <option value="Tháng 8">Tháng 8</option>
                                            <option value="Tháng 9">Tháng 9</option>
                                            <option value="Tháng 10">Tháng 10</option>
                                            <option value="Tháng 11">Tháng 11</option>
                                            <option value="Tháng 12">Tháng 12</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control ms-2" id="year" name="year[]" style="padding: 6px;" form="form-donhang" required>
                                            <option value="Nam">Năm</option>
                                            <?php 
                                                $year = date("Y");
                                                $min = $year - 80;
                                                $max = $year - 12;
                                                for ($i = $max; $i >= $min; $i--)
                                                {
                                                    ?>
                                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-treem-container d-none mt-3" style="background-color:rgba(238, 238, 238, 0.4); padding: 10px; border-radius: 10px; ">
                        <h6 style="font-weight: 700;" class="mt-1">Trẻ em</h6>
                        <div class="row">
                            <div class="col-4"><label for="hoten">Họ tên</label></div>
                            <div class="col-2"><label for="gioitinh">Giới tính</label></div>
                            <div class="col-6"><label class="ms-2" for="day">Ngày sinh</label></div>
                        </div>
                        <div class="row form-treem mt-2">
                            <div class="col-4">
                                <div class="row w-100">
                                    <input class="form-control ms-2" type="text" name="hoten[]" id="hoten_treem" placeholder="Nhập họ tên" form="form-donhang" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <select class="form-control ms-2" name="gioitinh[]" id="gioitinh_treem" style="padding: 6px;" form="form-donhang" required>
                                        <option value="gt">Giới tính</option>
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <option value="Không xác định">Không xác định</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control ms-2" id="day_treem" name="day[]" style="padding: 6px;" form="form-donhang" required>
                                            <option value="ngay">Ngày</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control ms-2" id="month_treem" name="month[]" style="padding: 6px;" form="form-donhang" required>
                                            <option value="thang">Tháng</option>
                                            <option value="Tháng 1">Tháng 1</option>
                                            <option value="Tháng 2">Tháng 2</option>
                                            <option value="Tháng 3">Tháng 3</option>
                                            <option value="Tháng 4">Tháng 4</option>
                                            <option value="Tháng 5">Tháng 5</option>
                                            <option value="Tháng 6">Tháng 6</option>
                                            <option value="Tháng 7">Tháng 7</option>
                                            <option value="Tháng 8">Tháng 8</option>
                                            <option value="Tháng 9">Tháng 9</option>
                                            <option value="Tháng 10">Tháng 10</option>
                                            <option value="Tháng 11">Tháng 11</option>
                                            <option value="Tháng 12">Tháng 12</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control ms-2" id="year_treem" name="year[]" style="padding: 6px;" form="form-donhang" required>
                                            <option value="Nam">Năm</option>
                                            <?php 
                                                $year = date("Y");
                                                $min = $year - 11;
                                                $max = $year - 5;
                                                for ($i = $max; $i >= $min; $i--)
                                                {
                                                    ?>
                                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-trenho-container d-none mt-3" style="background-color:rgba(238, 238, 238, 0.4); padding: 10px; border-radius: 10px;">
                        <h6 style="font-weight: 700;" class="mt-1">Trẻ nhỏ</h6>
                        <div class="row">
                            <div class="col-4"><label for="hoten">Họ tên</label></div>
                            <div class="col-2"><label for="gioitinh">Giới tính</label></div>
                            <div class="col-6"><label class="ms-2" for="day">Ngày sinh</label></div>
                        </div>
                        <div class="row form-trenho mt-2" >
                            <div class="col-4">
                                <div class="row w-100">
                                    <input class="form-control ms-2" type="text" name="hoten[]" id="hoten_trenho" placeholder="Nhập họ tên" form="form-donhang" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <select class="form-control ms-2" name="gioitinh[]" id="gioitinh_trenho" style="padding: 6px;" form="form-donhang" required>
                                        <option value="gt">Giới tính</option>
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <option value="Không xác định">Không xác định</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control ms-2" id="day_trenho" name="day[]" style="padding: 6px;" form="form-donhang" required>
                                            <option value="ngay">Ngày</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control ms-2" id="month_trenho" name="month[]" style="padding: 6px;" form="form-donhang" required>
                                            <option value="thang">Tháng</option>
                                            <option value="Tháng 1">Tháng 1</option>
                                            <option value="Tháng 2">Tháng 2</option>
                                            <option value="Tháng 3">Tháng 3</option>
                                            <option value="Tháng 4">Tháng 4</option>
                                            <option value="Tháng 5">Tháng 5</option>
                                            <option value="Tháng 6">Tháng 6</option>
                                            <option value="Tháng 7">Tháng 7</option>
                                            <option value="Tháng 8">Tháng 8</option>
                                            <option value="Tháng 9">Tháng 9</option>
                                            <option value="Tháng 10">Tháng 10</option>
                                            <option value="Tháng 11">Tháng 11</option>
                                            <option value="Tháng 12">Tháng 12</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control ms-2" id="year_trenho" name="year[]" style="padding: 6px;" form="form-donhang" required>
                                            <option value="Nam">Năm</option>
                                            <?php 
                                                $year = date("Y");
                                                $min = $year - 4;
                                                $max = $year - 2;
                                                for ($i = $max; $i >= $min; $i--)
                                                {
                                                    ?>
                                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-embe-container d-none mt-3" style="background-color:rgba(238, 238, 238, 0.4); padding: 10px; border-radius: 10px;">
                        <h6 style="font-weight: 700;" class="mt-1">Em bé</h6>
                        <div class="row">
                            <div class="col-4"><label for="hoten">Họ tên</label></div>
                            <div class="col-2"><label for="gioitinh">Giới tính</label></div>
                            <div class="col-6"><label class="ms-2" for="day">Ngày sinh</label></div>
                        </div>
                        <div class="row form-embe mt-2">
                            <div class="col-4">
                                <div class="row w-100">
                                    <input class="form-control ms-2" type="text" name="hoten[]" id="hoten_embe" placeholder="Nhập họ tên" form="form-donhang" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <select class="form-control ms-2" name="gioitinh[]" id="gioitinh_embe" style="padding: 6px;" form="form-donhang" required>
                                        <option value="gt">Giới tính</option>
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <option value="Không xác định">Không xác định</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control ms-2" id="day_embe" name="day[]" style="padding: 6px;" form="form-donhang" required>
                                            <option value="ngay">Ngày</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control ms-2" id="month_embe" name="month[]" style="padding: 6px;" form="form-donhang" required> 
                                            <option value="thang">Tháng</option>
                                            <option value="Tháng 1">Tháng 1</option>
                                            <option value="Tháng 2">Tháng 2</option>
                                            <option value="Tháng 3">Tháng 3</option>
                                            <option value="Tháng 4">Tháng 4</option>
                                            <option value="Tháng 5">Tháng 5</option>
                                            <option value="Tháng 6">Tháng 6</option>
                                            <option value="Tháng 7">Tháng 7</option>
                                            <option value="Tháng 8">Tháng 8</option>
                                            <option value="Tháng 9">Tháng 9</option>
                                            <option value="Tháng 10">Tháng 10</option>
                                            <option value="Tháng 11">Tháng 11</option>
                                            <option value="Tháng 12">Tháng 12</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control ms-2" id="year_embe" name="year[]" style="padding: 6px;" form="form-donhang" required>
                                            <option value="Nam">Năm</option>
                                            <?php 
                                                $year = date("Y");
                                                $min = $year - 2;
                                                $max = $year;
                                                for ($i = $max; $i >= $min; $i--)
                                                {
                                                    ?>
                                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row mt-5">
                <h5>Lưu ý của quý khách</h5>
                <div class="row" style="background-color:rgba(238, 238, 238, 0.4); padding: 20px; border-radius: 10px; ">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col">
                                <input type="checkbox" name="anchay" id="anchay">
                                <label for="anchay">Ăn chay</label>
                            </div>
                            <div class="col">
                                <input type="checkbox" name="phunumangthai" id="phunumangthai">
                                <label for="phunumangthai">Phụ nữ mang thai</label>
                            </div>
                            <div class="col">
                                <input type="checkbox" name="nguoikhuyettat" id="nguoikhuyettat">
                                <label for="phunumangthai">Người khuyết tật</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <p>Ghi chú thêm</p>
                        </div>
                        <div class="row">
                            <textarea name="ghichuthem" id="ghichuthem" cols="30" rows="7" placeholder="Vui lòng nhập nội dung ghi chú thêm ở đây" class="form-control"></textarea></textarea>
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
                            <p id="tonghanhkhach" class="mt-5">1 Người</p>
                        </div>
                        <div class="col">
                            <div class="row">
                                <p id="songuoilon" style="font-size: 13px">1 Người lớn</p>
                            <div class="row">
                                <p id="sotreem" style="font-size: 13px">0 Trẻ em</p>
                            </div>
                            <div class="row">
                                <p id="sotrenho" style="font-size: 13px">0 Trẻ nhỏ</p>
                            </div>
                            <div class="row">
                                <p id="soembe" style="font-size: 13px">0 Em bé</p>
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
                    <p id="gianguoilon">1 x </p>
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
                    <p id="giatreem1">0 VND</p>
                    <span id="giatreem2" class="d-none">&nbsp;
                        <?php 
                        if ($data_tour[0]['sale'] == 1) 
                        {
                            echo currency_format($data_tour[0]['price_sale']/2);
                        }
                        else echo currency_format($data_tour[0]['price']/2); ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Trẻ nhỏ</p>
                </div>
                <div class="col d-flex justify-content-end">
                    <p id="giatrenho1">0 VND</p>
                    <span id="giatrenho2" class="d-none">&nbsp;
                        <?php if ($data_tour[0]['sale'] == 1) 
                        {
                            echo currency_format($data_tour[0]['price_sale']/8);
                        }
                        else echo currency_format($data_tour[0]['price']/8); ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Em bé</p>
                </div>
                <div class="col d-flex justify-content-end">
                    <p id="giaembe1">0 VND</p>
                    <span id="giaembe2" class="d-none">&nbsp;<?php 
                        if ($data_tour[0]['sale'] == 1) 
                        {
                            echo currency_format($data_tour[0]['price_sale']/20);
                        }
                        else echo currency_format($data_tour[0]['price']/20); ?></span>
                </div>
            </div>
            <div class="row">
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
            </div>
            <div class="row mt-2 m-auto" style="border-top: 2px solid red; width: 98%"> 
                <div class="col">
                    <h4 class="mt-1">Tổng cộng</h4>
                </div>
                <div class="col">
                    <?php 
                        if ($data_tour[0]['sale'] == 1) 
                        {
                            ?>
                            <input form="form-donhang" type="text" name="tongtien" id="tongtien" value="<?php echo $data_tour[0]['price_sale'] ?>" hidden>
                            <input type="text" id="tongtienshow" value="<?php echo currency_format($data_tour[0]['price_sale']) ?>" readonly maxlength="20" style="border: none; outline: none; font-size:20px; color: red; text-align:end;margin-top: 5px">
                            <?php
                        }
                        else 
                        {
                            ?>
                            <input form="form-donhang" type="text" name="tongtien" id="tongtien" value="<?php echo $data_tour[0]['price'] ?>" hidden>
                            <input type="text" id="tongtienshow" value="<?php echo currency_format($data_tour[0]['price']) ?>" readonly maxlength="20" style="border: none; outline: none; font-size:20px; color: red; text-align:end;margin-top: 5px">
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class="row m-auto">
                <button id="datngaybtn" type="submit" form="form-donhang" name="datngaybtn" class="btn btn-danger w-100">Đặt ngay</button>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function()
    {
        document.getElementById('hoten_embe').disabled = true;
        document.getElementById('gioitinh_embe').disabled = true;
        document.getElementById('day_embe').disabled = true;
        document.getElementById('month_embe').disabled = true;
        document.getElementById('year_embe').disabled = true;

        document.getElementById('hoten_treem').disabled = true;
        document.getElementById('gioitinh_treem').disabled = true;
        document.getElementById('day_treem').disabled = true;
        document.getElementById('month_treem').disabled = true;
        document.getElementById('year_treem').disabled = true;

        document.getElementById('hoten_trenho').disabled = true;
        document.getElementById('gioitinh_trenho').disabled = true;
        document.getElementById('day_trenho').disabled = true;
        document.getElementById('month_trenho').disabled = true;
        document.getElementById('year_trenho').disabled = true;
    })
    var tonghanhkhach = jQuery('#tonghanhkhach');
    var songuoilon = jQuery('#nguoilon').children(':input');
    var sotrenho = jQuery('#trenho').children(':input');
    var sotreem = jQuery('#treem').children(':input');
    var soembe = jQuery('#embe').children(':input');
    var settongtienshow = jQuery('#tongtienshow');
    var settongtien = jQuery('#tongtien');
    jQuery(document).ready(function()
    {
        jQuery(".add").click(function()
        {
            var parent = jQuery(this).parent().attr('id');
            if (parent == "nguoilon")
            {
                jQuery(".form-nguoilon:last").clone().insertAfter(".form-nguoilon:last");
                var i = jQuery('#nguoilon').children(':input').val();
                songuoilon.val(parseInt(i) + parseInt(1)) ;
                jQuery('#songuoilon').text(parseInt(i) + parseInt(1) + " Người lớn");
                tonghanhkhach.text(parseInt(songuoilon.val()) + parseInt(sotrenho.val()) + parseInt(sotreem.val()) + parseInt(soembe.val()) + " Người");
                jQuery('#gianguoilon').text(songuoilon.val() + " x");
            }
            else if (parent == "trenho")
            {
                if(jQuery('#trenho').children(':input').val() == "0")
                {
                    jQuery('.form-trenho-container').removeClass("d-none");
                    document.getElementById('hoten_trenho').disabled = false;
                    document.getElementById('gioitinh_trenho').disabled = false;
                    document.getElementById('day_trenho').disabled = false;
                    document.getElementById('month_trenho').disabled = false;
                    document.getElementById('year_trenho').disabled = false;
                }
                else 
                {
                    jQuery(".form-trenho:last").clone().insertAfter(".form-trenho:last");
                }
                var i = jQuery('#trenho').children(':input').val();
                sotrenho.val(parseInt(i) + parseInt(1)) ;
                jQuery('#sotrenho').text(parseInt(i) + parseInt(1) + " Trẻ nhỏ");
                tonghanhkhach.text(parseInt(songuoilon.val()) + parseInt(sotrenho.val()) + parseInt(sotreem.val()) + parseInt(soembe.val()) + " Người");
                jQuery('#giatrenho1').text(sotrenho.val() + " x");
                jQuery('#giatrenho2').removeClass('d-none');
            }
            else if (parent == "treem")
            {
                if(jQuery('#treem').children(':input').val() == "0")
                {
                    jQuery('.form-treem-container').removeClass("d-none");
                    document.getElementById('hoten_treem').disabled = false;
                    document.getElementById('gioitinh_treem').disabled = false;
                    document.getElementById('day_treem').disabled = false;
                    document.getElementById('month_treem').disabled = false;
                    document.getElementById('year_treem').disabled = false;
                }
                else 
                {
                    jQuery(".form-treem:last").clone().insertAfter(".form-treem:last");
                }
                var i = jQuery('#treem').children(':input').val();
                sotreem.val(parseInt(i) + parseInt(1)) ;
                jQuery('#sotreem').text(parseInt(i) + parseInt(1) + " Trẻ em");
                tonghanhkhach.text(parseInt(songuoilon.val()) + parseInt(sotrenho.val()) + parseInt(sotreem.val()) + parseInt(soembe.val()) + " Người");
                jQuery('#giatreem1').text(sotreem.val() + " x");
                jQuery('#giatreem2').removeClass('d-none');
            }
            else if (parent == "embe")
            {
                if(jQuery('#embe').children(':input').val() == "0")
                {
                    jQuery('.form-embe-container').removeClass("d-none");             
                    document.getElementById('hoten_embe').disabled = false;
                    document.getElementById('gioitinh_embe').disabled = false;
                    document.getElementById('day_embe').disabled = false;
                    document.getElementById('month_embe').disabled = false;
                    document.getElementById('year_embe').disabled = false;
                }
                else 
                {
                    jQuery(".form-embe:last").clone().insertAfter(".form-embe:last");
                }
                var i = jQuery('#embe').children(':input').val();
                soembe.val(parseInt(i) + parseInt(1)) ;
                jQuery('#soembe').text(parseInt(i) + parseInt(1) + " Em bé");
                tonghanhkhach.text(parseInt(songuoilon.val()) + parseInt(sotrenho.val()) + parseInt(sotreem.val()) + parseInt(soembe.val()) + " Người");
                jQuery('#giaembe1').text(soembe.val() + " x");
                jQuery('#giaembe2').removeClass('d-none');
            }
            var gianguoilon = <?php if ($data_tour[0]['sale'] == 1) 
                                {       
                                    echo $data_tour[0]['price_sale'];
                                }
                                else echo $data_tour[0]['price']; ?> 
            var tiennguoilon = songuoilon.val() * gianguoilon;
            var giatreem = <?php if ($data_tour[0]['sale'] == 1) 
                                {       
                                    echo $data_tour[0]['price_sale']/2;
                                }
                                else echo $data_tour[0]['price']/2; ?> 
            var tientreem = sotreem.val() * giatreem;
            var giatrenho = <?php if ($data_tour[0]['sale'] == 1) 
                                {       
                                    echo $data_tour[0]['price_sale']/8;
                                }
                                else echo $data_tour[0]['price']/8; ?> 
            var tientrenho = sotrenho.val() * giatrenho;
            var giaembe =  <?php if ($data_tour[0]['sale'] == 1) 
                                {       
                                    echo $data_tour[0]['price_sale']/20;
                                }
                                else echo $data_tour[0]['price']/20; ?> 
            var tienembe = soembe.val() * giaembe;
            var tongtien = parseInt(tiennguoilon) + parseInt(tientreem) + parseInt(tientrenho) + parseInt(tienembe);
            var vnd = Intl.NumberFormat("it-IT",
            {
                style: "currency",
                currency: "VND",
            }).format(tongtien);
            settongtienshow.val(vnd);
            settongtien.val(tongtien);
        });
            
    })
    jQuery(document).ready(function()
    {
        jQuery(".remove").click(function()
        {
            var parent = jQuery(this).parent().attr('id');
            if (parent == "nguoilon" && jQuery('#nguoilon').children(':input').val() != "1")
            {
                jQuery(".form-nguoilon:last").remove();
                var i = jQuery('#nguoilon').children(':input').val();
                songuoilon.val(parseInt(i) - parseInt(1));
                jQuery('#songuoilon').text(parseInt(i) - parseInt(1) + " Người lớn");
                tonghanhkhach.text(parseInt(songuoilon.val()) + parseInt(sotrenho.val()) + parseInt(sotreem.val()) + parseInt(soembe.val()) + " Người");
                jQuery('#gianguoilon').text(songuoilon.val() + " x");
            }
            else if (parent == "trenho" && jQuery('#trenho').children(':input').val() != "0")
            {
                var i = jQuery('#trenho').children(':input').val();
                sotrenho.val(parseInt(i) - parseInt(1));
                jQuery('#sotrenho').text(parseInt(i) - parseInt(1) + " Trẻ nhỏ");
                if (jQuery('#trenho').children(':input').val() == "0")
                {
                    jQuery('.form-trenho-container').addClass("d-none");
                    jQuery('#giatrenho1').text("0 VND");
                    jQuery('#giatrenho2').addClass('d-none');
                    document.getElementById('hoten_trenho').disabled = true;
                    document.getElementById('gioitinh_trenho').disabled = true;
                    document.getElementById('day_trenho').disabled = true;
                    document.getElementById('month_trenho').disabled = true;
                    document.getElementById('year_trenho').disabled = true;
                }
                else
                {
                    jQuery(".form-trenho:last").remove();
                    jQuery('#giatrenho1').text(sotrenho.val() + " x");
                }
                tonghanhkhach.text(parseInt(songuoilon.val()) + parseInt(sotrenho.val()) + parseInt(sotreem.val()) + parseInt(soembe.val()) + " Người");
            }
            else if (parent == "treem" && jQuery('#treem').children(':input').val() != "0")
            {
                var i = jQuery('#treem').children(':input').val();
                sotreem.val(parseInt(i) - parseInt(1)) ;
                jQuery('#sotreem').text(parseInt(i) - parseInt(1) + " Trẻ em");
                if (jQuery('#treem').children(':input').val() == "0")
                {
                    jQuery('.form-treem-container').addClass("d-none");
                    jQuery('#giatreem1').text("0 VND");
                    jQuery('#giatreem2').addClass('d-none');
                    document.getElementById('hoten_treem').disabled = true;
                    document.getElementById('gioitinh_treem').disabled = true;
                    document.getElementById('day_treem').disabled = true;
                    document.getElementById('month_treem').disabled = true;
                    document.getElementById('year_treem').disabled = true;

                }
                else
                {
                    jQuery(".form-treem:last").remove();
                    jQuery('#giatreem1').text(sotreem.val() + " x");
                }
                tonghanhkhach.text(parseInt(songuoilon.val()) + parseInt(sotrenho.val()) + parseInt(sotreem.val()) + parseInt(soembe.val()) + " Người");
            }
            else if (parent == "embe" && jQuery('#embe').children(':input').val() != "0")
            {
                var i = jQuery('#embe').children(':input').val();
                soembe.val(parseInt(i) - parseInt(1)) ;
                jQuery('#soembe').text(parseInt(i) - parseInt(1) + " Em bé");
                if (jQuery('#embe').children(':input').val() == "0")
                {
                    jQuery('.form-embe-container').addClass("d-none");
                    jQuery('#giaembe1').text("0 VND");
                    jQuery('#giaembe2').addClass('d-none');
                    document.getElementById('hoten_embe').disabled = true;
                    document.getElementById('gioitinh_embe').disabled = true;
                    document.getElementById('day_embe').disabled = true;
                    document.getElementById('month_embe').disabled = true;
                    document.getElementById('year_embe').disabled = true;

                }
                else
                {
                    jQuery(".form-embe:last").remove();
                    jQuery('#giaembe1').text(soembe.val() + " x");
                }
                tonghanhkhach.text(parseInt(songuoilon.val()) + parseInt(sotrenho.val()) + parseInt(sotreem.val()) + parseInt(soembe.val()) + " Người");
            }
            var gianguoilon = <?php if ($data_tour[0]['sale'] != 0) 
                                {       
                                    echo $data_tour[0]['price_sale'];
                                }
                                else echo $data_tour[0]['price']; ?> 
            var tiennguoilon = songuoilon.val() * gianguoilon;
            var giatreem = <?php if ($data_tour[0]['sale'] != 0) 
                                {       
                                    echo $data_tour[0]['price_sale']/2;
                                }
                                else echo $data_tour[0]['price']/2; ?> 
            var tientreem = sotreem.val() * giatreem;
            var giatrenho = <?php if ($data_tour[0]['sale'] != 0) 
                                {       
                                    echo $data_tour[0]['price_sale']/8;
                                }
                                else echo $data_tour[0]['price']/8; ?> 
            var tientrenho = sotrenho.val() * giatrenho;
            var giaembe =  <?php if ($data_tour[0]['sale'] != 0) 
                                {       
                                    echo $data_tour[0]['price_sale']/20;
                                }
                                else echo $data_tour[0]['price']/20; ?> 
            var tienembe = soembe.val() * giaembe;
            var tongtien = parseInt(tiennguoilon) + parseInt(tientreem) + parseInt(tientrenho) + parseInt(tienembe);
            var vnd = Intl.NumberFormat("it-IT",
            {
                style: "currency",
                currency: "VND",
            }).format(tongtien);
            settongtienshow.val(vnd);
            settongtien.val(tongtien);
        })
    })
   
    function responlg(x)
    {
        if (x.matches)
        {
            $('#nguoilon').removeClass("text-end");
            $('#treem').removeClass("text-end");
            $('#trenho').removeClass("text-end");
            $('#embe').removeClass("text-end");
        }
    }
    width = window.matchMedia("(max-width: 992px")
    responlg(width);
    x.addListener(responlg);
</script>
</div>