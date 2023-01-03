<?php
    require_once("model.php");
    class Account extends Model
    {
        var $conn;
        function __construct()
        {   
            $conn_1 = new connection();
            $this->conn = $conn_1->conn;
        }

        function login_action($data)
        {
            $sql = "SELECT * FROM account WHERE username = '" . $data['username'] . "' AND password = '" . $data['password'] . "'";
            $login = $this->conn->query($sql)->fetch_assoc();
            if ($login !== NULL) 
            {
                if($login['idquyen'] == 0)
                {
                    $_SESSION['is_login'] = true;
                    $_SESSION['login'] = $login;  
                    
                }
                $_SESSION['success'] = "Đăng nhập thành công";
                $_SESSION['status'] = "success";  
            } 
            else 
            {
                $_SESSION['thaotac'] = "Đăng nhập";
                $_SESSION['error'] = "Vui lòng kiểm tra lại tài khoản hoặc mật khẩu rồi thử lại";
                $_SESSION['status'] = "error";
            }
            header('Location: '. $_SERVER['HTTP_REFERER']);
        }

        function check_account()
        {
            $sql = "SELECT username, email FROM account";
            require "result.php";
            return $data;
        }

        function logout_action()
        {
            if (isset($_SESSION['is_login']))
            {
                unset($_SESSION['is_login']);
                unset($_SESSION['login']);
                header('location: ?act=home');
                $_SESSION['success'] = "Đăng xuất thành công";
                $_SESSION['status'] = "success";
            }
        }

        function signup_action($data, $check1, $check2)
        {
            if ($check1) 
            {
                if ($check2) 
                {
                    $col = "";
                    $val = "";
                    foreach ($data as $key => $value) 
                    {
                        $col .= $key . ",";
                        $val .= "'" . $value . "',";
                    }
                    $col = trim($col, ",");
                    $val = trim($val, ",");
                    $query = "INSERT INTO account($col) VALUES ($val);";

                    $status = $this->conn->query($query);
                    if ($status) 
                    {
                        header('Location: ?act=home');
                        $_SESSION['success'] = "Đăng ký thành công";
                        $_SESSION['status'] = "success";
                    } 
                    else 
                    {
                        header('Location: ?act=home');
                        $_SESSION['thaotac'] = "Đăng ký";
                        $_SESSION['error'] = "Đăng ký không thành công";
                        $_SESSION['status'] = "error";
                    }
                } 
                else 
                {
                    header('Location: ?act=home');
                    $_SESSION['thaotac'] = "Đăng ký";
                    $_SESSION['error'] = "Mật khẩu không trùng nhau";
                    $_SESSION['status'] = "error";
                }
            } 
            else 
            {
                header('Location: ?act=home');
                $_SESSION['thaotac'] = "Đăng ký";
                $_SESSION['error'] = "Tên tài khoản hoặc email đã được sử dụng";
                $_SESSION['status'] = "error";
            }
            
        }

        function update_action($data)
        {
            $val = "";
            foreach ($data as $key => $value) 
            {
                $val .= $key . "='" . $value . "',";
            }
            $val = trim($val, ",");

            $sql = "UPDATE account SET $val WHERE  username = '" . $_SESSION['login']['username'] . "'";

            $result = $this->conn->query($sql);
            if ($result == true) 
            {
                header('Location: ?act=taikhoan&xuli=tttk');
                $_SESSION['success'] = "Cập nhật thông tin thành công";
                $_SESSION['status'] = "success";
            } 
            else 
            {
                header('Location: ?act=taikhoan&xuli=tttk');
                $_SESSION['thaotac'] = "Cập nhật thông tin";
                $_SESSION['error'] = "Vui lòng kiểm tra lại thông tin";
                $_SESSION['status'] = "error";
            }
        }

        function get_info_account_action()
        {
            $username = $_SESSION['login']['username'];
            $sql = "SELECT * FROM account WHERE username = '" . $username . "'";
            require "result.php";
            return $data;
        }

        function get_list_liked_tour_info()
        {
            $username = $_SESSION['login']['username'];
            $sql = "SELECT * FROM like_tours AS lt, tour_some_info AS tsi WHERE lt.username = '$username' AND lt.tour_id = tsi.id";
            require "result.php";
            return $data;
        }

        function list_order_tour()
        {
            $username = $_SESSION['login']['username'];
            $sql = "SELECT dh.madonhang, dh.t_id, ts.locate, ts.image, dh.thanhtoan FROM donhang AS dh, tour_some_info AS ts WHERE dh.t_id = ts.id AND dh.username = '$username'";
            require "result.php";
            return $data;
        }

        function list_review()
        {
            $sql = "SELECT * FROM danhgia";
            require "result.php";
            return $data;
        }
    }
?>

    