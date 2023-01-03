<nav class="row navbar navbar-expand-lg" style="position: fixed; top: 0; left:0; right: 0; z-index: 999; font-size:20px; background-color: rgb(228, 224, 224); padding: 0px;">
    <div class="container-fluid">
        <button class="navbar-toggler d-lg-none bg-white-50 border-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <b class="ms-5" href="javascript:void(0)" id="tenweb" style="color:#0026FF">TRAWIND</b>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto ms-5">
                <li class="nav-item">
                    <a class="nav-link text-black" href="?act=home">TRANG CHỦ</a>
                </li>
                <li class="nav-item" id="tourdulich">
                    <a class="nav-link text-black" href="?act=tour">TOURS DU LỊCH</a>
                    <div id="dschude">
                        <?php
                            foreach ($data_chude as $value)
                            {
                                ?>
                                <div class="row chude p-1"><a href="?act=tour&machude=<?= $value['machude'] ?>"><?= $value['tenchude'] ?></a></div>
                                <?php
                            }
                        ?>
                    </div>
                </li>
                <li class="nav-item" id="dulichtrongnuoc">
                    <a class="nav-link text-black " href="?act=dltn">DU LỊCH TRONG NƯỚC</a>
                    <div id="dltn">
                        <div class="row p-2">
                            <div class="col mienbac">
                                <p class="row"><a href="" class="tenmien">MIỀN BẮC</a></p>
                                <?php
                                    for ($i = 0; $i < 5; $i++)
                                    {
                                        ?>
                                        <p class="row"><a href="?act=tinh&matinh=<?= $data_tinhmienbac[$i]['matinh'] ?>"><?= $data_tinhmienbac[$i]['tentinh'] ?></a></p>
                                        <?php
                                    }
                                ?>
                            </div>
                            <div class="col">
                                <p class="row"><a href="" class="tenmien">MIỀN TRUNG</a></p>
                                <?php
                                    for ($i = 0; $i < 5; $i++)
                                    {
                                        ?>
                                        <p class="row"><a href="?act=tinh&matinh=<?= $data_tinhmientrung[$i]['matinh'] ?>"><?= $data_tinhmientrung[$i]['tentinh'] ?></a></p>
                                        <?php
                                    }    
                                ?>
                            </div>
                            <div class="col">
                                <p class="row"><a href="" class="tenmien">MIỀN NAM</a></p>
                                <?php
                                    for ($i = 0; $i < 5; $i++)
                                    {
                                        ?>
                                        <p class="row"><a href="?act=tinh&matinh=<?= $data_tinhmiennam[$i]['matinh'] ?>"><?= $data_tinhmiennam[$i]['tentinh'] ?></a></p>
                                        <?php
                                    }    
                                ?>                              
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="">CHIA SẺ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="">LIÊN HỆ</a>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0 me-lg-5 mx-5" action="?" method="get">
                <input type="hidden" name="act" value="tour">
                <input name="search_key" class="form-control me-2" type="text" placeholder="Tìm kiếm">
                <button class="btn btn-info" type="submit">Tìm</button>
            </form>
            <span>
                <?php
                    if (isset($_SESSION['is_login']) && $_SESSION['is_login'] == true)
                    {
                        ?>
                        <a class="text-black mx-5" href="?act=taikhoan&xuli=tttk"><i class="fa-solid fa-user" style="font-size: 25px;"></i></a>
                        <?php
                    }
                    else 
                    {
                        ?>
                        <a class="text-black me-5" href="javascript:void(0)" style="text-decoration:none" onclick="clicksign()"><i class="fa-solid fa-user" style="font-size: 25px;"></i></a>
                        <div id="sign" style="display: none;">
                            <div id="signin_contain">
                                <button style="float: right; border: none;background-color:transparent; cursor: pointer;" ><i class="fa-regular fa-circle-xmark" onclick="clickclose()" style="font-size: 30px;"></i></button>
                                <div id="title">
                                    CHÀO MỪNG BẠN TRỞ LẠI
                                </div>
                                <div style="font-size: 25px; margin-top: 20px; border-bottom: 2px solid rgb(219, 203, 203)">Đăng nhập</div>
                                <form action="?act=taikhoan&xuli=dangnhap" method="POST" id="signinform"> 
                                    <input type="text" name="username" id="username" placeholder="Tên đăng nhập" form="signinform" required> <br>
                                    <input type="password" name="password" id="password" placeholder="Mật khẩu" form="signinform" required>
                                    <a href="" style="text-decoration: none; font-style:italic; margin-left: 140px">Quên mật khẩu?</a> <br>
                                    <input name="signinbtn" type="submit" value="Đăng nhập" form="signinform">
                                </form> 
                                <a href="#signup_contain" onclick="clicksignup()">Bạn chưa có tài khoản? Bấm vào đây để đăng ký</a>
                                <br>
                                <i class="fa-brands fa-facebook" style="color: blue; font-size: 40px; margin-top: 15px; cursor:pointer; margin-right: 30px" ></i>
                                <i class="fa-brands fa-google" style="color: red; font-size: 40px; margin-top: 15px; cursor:pointer;"></i>
                            </div>
                            <div id="signup_contain">
                                <button style="float: right; border: none;background-color:transparent; cursor: pointer;" ><i class="fa-regular fa-circle-xmark" onclick="clickclose()" style="font-size: 30px;"></i></button>
                                <div id="title">
                                    CHÀO MỪNG BẠN ĐẾN VỚI TRAWIND
                                </div>
                                <div style="font-size: 25px; margin-top: 20px; border-bottom: 2px solid rgb(219, 203, 203)">Đăng ký</div>
                                <form action="?act=taikhoan&xuli=dangky" method="POST" id="signupform"> </form> 
                                <br>
                                <input type="email" name="email" id="email" form="signupform" required placeholder="Email"> <br>
                                <input type="text" name="usernamesu" id="usernamesu" placeholder="Tên đăng nhập" form="signupform" required> <br>
                                <input type="password" name="passwordsu" id="passwordsu" placeholder="Mật khẩu" form="signupform" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" onkeyup="checkpw()"> <br>
                                <div id="check_input">
                                    <p id="checkchuhoa" style="margin-right: 20px; margin-top: 10px">* Có ít nhất một chữ cái viết hoa</p>
                                    <p id="checkchuso" style="margin-right: 78px;">* Có ít nhất một chữ số</p>
                                    <p id="checkdodai" style="margin-right: 107px;">* Có ít nhất 8 ký tự</p>
                                </div>
                                <input type="password" name="passwordsu2" id="passwordsu2" placeholder="Nhập lại mật khẩu" form="signupform" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" style="margin-top: 20px; border-bottom: 2px solid red;" onkeyup="checkpw2()"> <br>
                                <h6 id="resultcheck"></h6>
                                <br>
                                <span>
                                    Bằng cách nhấp vào Đăng ký, bạn đồng ý với <a href="">Điều khoản, Chính sách dữ liệu</a> và <a href="">Chính sách cookie</a> của chúng tôi 
                                </span>
                                <br>
                                <input name="signupbtn" type="submit" value="Đăng ký" form="signupform" style="margin-top: 50px">
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </span>
        </div>
    </div>
</nav>
<style>
    .nav-link:hover
    {
        background-color: #C0C0C0;
        transition: 0.5s;
    }
</style>
