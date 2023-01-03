<style>
    .tours b
    {
        box-shadow: inset 0 0 0 0 #54b3d6;
        color: #54b3d6;
        margin: 0;
        padding: 0;
        transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
    }
    .tours:hover > b
    {
        box-shadow: inset 306px 0 0 0 #54b3d6;
        color: white;
    }
</style>
<title>Du lịch trong nước</title>
<div class="container">
    <div class="row" style="margin-top: 150px">
        <h3 style="text-decoration:underline; text-decoration-color:red;">Miền Bắc</h3>
    </div>
    <div class="row">
        <?php
            foreach ($data_tinhmienbac as $key => $value)
            {
                ?>
                <div class="tours mt-5 col-lg-3 col-sm-6 col-12" style="height: 250px; position:relative">
                    <div class="image" style="width: 100%; height: 250px;">
                        <img class="img-fluid" style="width: 100%; object-fit:cover; height: 250px; border-radius: 10px;" src="<?php echo $value['img']?>" alt="">
                    </div>
                    <b style="font-size: 23px; position:absolute; bottom: 10px; width:95%; text-align:center"><a style="text-decoration: none; color: white;" href="?act=tinh&matinh=<?php echo $value['matinh']?>"><?php echo $value['tentinh']?></a></b>
                </div>
                <?php
            }
        ?>
    </div>
    <div class="row mt-5">
        <h3 style="text-decoration:underline; text-decoration-color:red;">Miền Trung</h3>
    </div>
    <div class="row">
        <?php
            foreach ($data_tinhmientrung as $key => $value)
            {
                ?>
                <div class="tours mt-5 col-lg-3 col-sm-6 col-12" style="height: 250px; position:relative">
                    <div class="image" style="width: 100%; height: 250px;">
                        <img class="img-fluid" style="width: 100%; object-fit:cover; height: 250px; border-radius: 10px;" src="<?php echo $value['img']?>" alt="">
                    </div>
                    <b style="font-size: 23px; position:absolute; bottom: 10px; width:95%; text-align:center"><a style="text-decoration: none; color: white;" href="?act=tinh&matinh=<?php echo $value['matinh']?>"><?php echo $value['tentinh']?></a></b>
                </div>
                <?php
            }
        ?>
    </div>
    <div class="row mt-5">
        <h3 style="text-decoration:underline; text-decoration-color:red;">Miền Nam</h3>
    </div>
    <div class="row">
        <?php
            foreach ($data_tinhmiennam as $key => $value)
            {
                ?>
                <div class="tours mt-5 col-lg-3 col-sm-6 col-12" style="height: 250px; position:relative">
                    <div class="image" style="width: 100%; height: 250px;">
                        <img class="img-fluid" style="width: 100%; object-fit:cover; height: 250px; border-radius: 10px;" src="<?php echo $value['img']?>" alt="">
                    </div>
                    <b style="font-size: 23px; position:absolute; bottom: 10px; width:95%; text-align:center"><a style="text-decoration: none; color: white;" href="?act=tinh&matinh=<?php echo $value['matinh']?>"><?php echo $value['tentinh']?></a></b>
                </div>
                <?php
            }
        ?>
    </div>
</div>