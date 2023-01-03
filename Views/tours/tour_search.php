<title>Tìm kiếm</title>
<h4 class="text-center" style="margin-top: 140px">KẾT QUẢ TÌM KIẾM</h4>
<div class="container mt-5">
    <div class="row">
        <?php
        if ($data == "Không tìm thấy tour!!!")
        {
            echo "<h5> $data </h5>";
        }
        else
        {
            foreach($data as $key => $value)
            {
                ?>
                <div class="tour p-0 mt-4 col-lg-3 col-sm-5 col-12 mx-2" style="height: 450px; background-color:rgba(238, 238, 238, 0.3); max-width: 23.5%">
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
                                    <span id="gia">Giá: <?php echo currency_format($value['price']) ?></span>
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
    <div class="d-flex justify-content-center">
        <?php
            if (isset($sotrang))
            {
                for ($i = 1; $i <= $sotrang; $i++)
                {
                    ?>
                    <div class="border m-2">
                        <a class="p-2 text-decoration-none" style="font-size: 15px;" href="?act=tour&page=<?= $i ?>"><?= $i ?></a>
                    </div>
                    <?php
                }
            }
        ?>
    </div>
</div>