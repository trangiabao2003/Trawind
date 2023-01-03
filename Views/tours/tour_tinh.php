<style>
    .background
    {
        position: relative;
    }
    .text_tentinh
    {
        width: 100%;
        position: absolute;
        bottom: 40%;
        font-size: 80px;
        color: white;
        text-align: center;
    }
</style>
<title>Du Lịch <?php echo $info_tinh[0]['tentinh'] ?></title>
<div class="container" style="margin-top: 100px;">
    <div class="background" style="width: 100%; height: 400px; ">
        <div class="image_bg" style="width: 100%;height: 400px;">
            <img class="img-fluid" style="width: 100%;height: 400px; border-radius: 10px" src="<?php echo $info_tinh[0]['img_bg'] ?>" alt="">
        </div>
        <div class="text_tentinh">
            <div style="text-transform:uppercase;  font-family: 'Grechen Fuemen', cursive;">DU LỊCH <?php echo $info_tinh[0]['tentinh'] ?></div>
        </div>
    </div>
    <div class="gt_tinh mt-3 p-3 border border-primary border-2 rounded" >
        <div style="display: none;"><?php echo $info_tinh[0]['gttinh'] ?></div>
    </div>
    <h4 class="mt-3" style="text-transform:uppercase; text-align:center;">CÁC TOUR DU LỊCH TẠI <?php echo $info_tinh[0]['tentinh']?></h4>
    <div class="row">
        <?php 
            if ($data == "Không tìm thấy tour!!!")
            {
                echo "Hiện tại chưa có Tour nào ở " . $info_tinh[0]['tentinh'] . ". Xin cảm ơn";
                ?>
                <div style="margin-bottom: 350px"></div>
                <?php
            }
            else
            {
                foreach($data as $key => $value)
                {
                    ?>
                    <div class="tour p-0 mt-4 col-lg-3 col-sm-5 col-12" style="height: 450px; margin-left: 20px; background-color:rgba(238, 238, 238, 0.3);">
                        <div class="image" style="width: 100%; height: 200px; ">
                            <img style="height: 200px; border-top-left-radius: 10px; border-top-right-radius: 10px" src="<?php echo $value['image'] ?>" alt="" class="w-100 img-fluid">
                        </div>
                        <div class="quantam">
                            <form action="?act=like-tour&id_tour=<?= $value['id'] ?>" method="post">
                                <input type="hidden" name="id_tour" value="<?php echo $row['id']?>">
                                <?php
                                    if (isset($_SESSION['is_login']))
                                    {
                                        $liked = false;
                                        for ($i = 0; $i < count($data_list_liked_tour); $i++)
                                        {
                                            if ($value['id'] == $data_list_liked_tour[$i])
                                            {
                                                $liked = true;
                                                ?>
                                                <button type="submit" name="like_tour"><i class="fa-solid fa-heart" style=" border: none;border-radius: 5px;background-color: rgba(202,228,225,0.5);position: absolute;font-size: 25px;top: 20px;left: 10px;padding: 3px;color: red;cursor: pointer;line-height: 0.5;"></i></button>
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
                                        <span id="gia"><?php echo currency_format($value['price']) ?></span>
                                        <?php
                                    }
                                ?>
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
            }
        ?>
    </div>
    <div class="row flex w-25 m-auto">
        <?php
            if (isset($sotrang))
            {
                for ($i = 1; $i <= $sotrang; $i++)
                {
                    ?>
                    <div class="border m-2">
                        <a class="p-2" style="font-size: 13px;" href="?act=tinh&page=<?= $i ?>"><?= $i ?></a>
                    </div>
                    <?php
                }
            }
        ?>
    </div>
</div>
<script>
    $(document).ready(function()
    {
        $('.gt_tinh').children().slideDown(2000);
    })
</script>