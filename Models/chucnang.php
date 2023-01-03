<?php
    require_once('model.php');
    class Chucnang extends Model
    {
        function like_tour_action($id_tour)
        {
            if (!isset($_SESSION['login']['username']))
            { 
                header('Location: '. $_SERVER['HTTP_REFERER']);
                $_SESSION['thaotac'] = "Yêu thích";
                $_SESSION['error'] = "Vui lòng đăng nhập để thực hiện chức năng này";
                $_SESSION['status'] = "error";
            }
            else 
            {
                $username = $_SESSION['login']['username'];
                $sql = "SELECT * FROM like_tours WHERE username = '$username' AND tour_id = '$id_tour'";
                $checkliked = $this->conn->query($sql);
                if (mysqli_num_rows($checkliked) == 0)
                {
                    $sql = "INSERT INTO like_tours VALUES ('$username','$id_tour')";
                    $this->conn->query($sql);
                    $_SESSION['success'] = "Đã thêm tour vào danh sách yêu thích";
                    $_SESSION['status'] = "success";
                }
                else 
                {
                    $sql = "DELETE FROM like_tours WHERE username = '$username' AND tour_id = '$id_tour'";
                    $this->conn->query($sql);
                    $_SESSION['success'] = "Đã xóa tour khỏi danh sách yêu thích";
                    $_SESSION['status'] = "success";
                }
                header('Location: '. $_SERVER['HTTP_REFERER']);
            }
        }

       
    }
    
?>