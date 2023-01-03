<title>Trang cá nhân</title>
<div class="container" style="margin-top: 100px">
    <div class="row text-center border-bottom border-3">
        <h4>Xin chào 
            <?php 
                if ($data_account[0]['hoten'] != '')
                {
                    echo $data_account[0]['hoten'];
                }
                else
                {
                    echo $data_account[0]['username'];
                }
            ?>
        </h4>
    </div>
    <div class="row mt-1">
        <form action="?act=taikhoan&xuli=dangxuat" method="post" class="d-flex justify-content-end">
            <input class="btn btn-secondary" style="width:fit-content" type="submit" value="Đăng xuất">
        </form>
    </div>
    <div class="row mt-4 w-75 m-auto p-5" style="background-color: #F5F5F5;">
        <h5><b>Thông tin cá nhân</b></h5>
        <h6 class="text-danger">
            <?php
                if ($data_account[0]['hoten'] == '' || $data_account[0]['sdt'] == '')
                {
                    echo "Bạn chưa nhập đầy đủ thông tin, vui lòng cập nhật";
                }
            ?>
        </h6>
        <form action="?act=taikhoan&xuli=update" method="POST">
            <div class="row mt-5">
                <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="hoten">Họ Tên</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <input class="ps-1" type="text" name="hoten" id="hoten" style="width: 97%; margin-left: -3px" value="<?= $data_account[0]['hoten'] ?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="sdt">Số Điện Thoại</label>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <input class="w-100 ps-1" type="tel" name="sdt" id="sdt" value="<?= $data_account[0]['sdt'] ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <div class="row w-50">
                        <div class="col-md-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <input class="w-100 ps-1" type="email" name="email" id="email" value="<?= $data_account[0]['email'] ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 d-flex justify-content-end">
                <input name="submit_update" class="btn btn-success" style="width:fit-content;" type="submit" value="Cập nhật">
            </div>
        </form>     
    </div>
    <div class="row mt-5 ">
        <h5><b>Các tour yêu thích</b></h5>
        <div class="row">
            <?php
                foreach($data_liked_tours as $key => $value)
                {
                    ?>
                    <div class="tours mt-5 col-lg-3 col-md-4 col-sm-6" style="height: 300px; ">
                        <div class="image" style="width: 100%; height: 200px;">
                            <img style="width: 100%; object-fit:cover; height: 200px; border-top-left-radius: 10px; border-top-right-radius: 10px" src="<?php echo $value['image']?>" alt="">
                        </div>
                        <div class="tour_content p-2" style="border: 1px solid #DDDDDD; border-top: none; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px">
                            <div class="tentour mt-2 text-center">
                                <b style="font-size: 17px;"><a style="text-decoration: none; color: rgb(0, 140, 255);" href="?act=detail&id=<?php echo $value['id']?>"><?php echo $value['locate']?></a></b> <br>
                                <b style="font-size: 15px;"><?php echo $value['time'] ?></b>
                            </div>
                            <div class="buttons mt-2 d-flex justify-content-between">
                                <form action="?act=order&xuli=thongtinkhachhang&tid=<?php echo $row['id']?>" method="post">
                                    <button name="muabtn" type="submit" class="btn btn-danger"><i class="fa-solid fa-cart-shopping"></i> Đặt ngay</button>
                                </form> 
                                <form action="?act=like-tour&id_tour=<?= $value['id'] ?>" method="post">
                                    <button type="submit" name="like_tour" class="btn btn-warning"><i class="fa-solid fa-trash-can mx-2"></i>Xóa</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
    <div class="row mt-5 ">
        <h5><b>Các tour đã đặt</b></h5>
        <div class="row">
            <?php
                foreach($data_order_tour as $key => $value)
                {
                    ?>
                    <div class="tours mt-3 col-lg-3 col-md-4 col-sm-6" style="height: 250px; ">
                        <div class="image" style="width: 100%; height: 200px;">
                            <img style="width: 100%; object-fit:cover; height: 200px; border-top-left-radius: 10px; border-top-right-radius: 10px" src="<?php echo $value['image']?>" alt="">
                        </div>
                        <div class="tour_content p-2" style="border: 1px solid #DDDDDD; border-top: none; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px">
                            <div class="tentour mt-2 text-center">
                                <b style="font-size: 17px;"><a style="text-decoration: none; color: rgb(0, 140, 255);" href="?act=order&xuli=thongtindonhang&madh=<?= $value['madonhang'] ?>"><?php echo $value['locate']?></a></b> <br>
                            </div>
                            <div class="mt-2 d-flex justify-content-between">
                        <?php
                            if ($value['thanhtoan'] == 'Chưa thanh toán')
                            {
                                ?>
                                    <a href="?act=order&xuli=thanhtoan&madh=<?=$value['madonhang'] ?>" type="button" class="btn btn-danger">Thanh toán ngay</a>
                                <?php
                            }
                            $check = false;
                            foreach($data_reviews as $key=>$review)
                            {
                                if ($review['madh'] == $value['madonhang'])
                                {
                                    $check = true;
                                }
                            }
                            if (!$check)
                            {
                                ?>
                                    <button type="button" class="btn btn-primary m-auto" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Đánh giá</button>
                                <?php
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Đánh Giá Tour</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="review" action="?act=tour&xuli=danhgia" method="post">
                                    <div class="form-group">
                                        <label for="">Mã đơn hàng</label>
                                        <input type="text" name="madh" class="form-control" value="<?= $value['madonhang'] ?>" readonly>
                                    </div>
                                    <input type="text" name="t_id" class="form-control" value="<?= $value['t_id'] ?>" hidden>
                                    <div class="form-group">
                                        <label for="">Nội dung đánh giá</label>
                                        <textarea name="comment" id="" cols="30" rows="7" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Độ hài lòng</label>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <input type="radio" name="rate" id="" value="1">
                                                <label for="">1</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="rate" id="" value="2">
                                                <label for="">2</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="rate" id="" value="3">
                                                <label for="">3</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="rate" id="" value="4">
                                                <label for="">4</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="rate" id="" value="5">
                                                <label for="">5</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="rate" id="" value="6">
                                                <label for="">6</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="rate" id="" value="7">
                                                <label for="">7</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="rate" id="" value="8">
                                                <label for="">8</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="rate" id="" value="9">
                                                <label for="">9</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="rate" id="" value="10">
                                                <label for="">10</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                <input type="submit" class="btn btn-primary" value="Xác nhận" form="review">
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