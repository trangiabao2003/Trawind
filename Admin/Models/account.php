<?php
require_once("model.php");

class account extends Model
{
    var $table = "account";
    var $contens = "username";

    function check_login($username, $password)
    {
        $sql = "SELECT * FROM account WHERE username = '$username' AND password = '$password' AND idquyen = 1";
        require('result.php');
        return $data;
    }
    function xoa($id)
    {
        $sql= "delete from account where username='$id'";
         
        $status = $this->conn->query($sql);
        if ($status == true) {
            setcookie('msg', 'Xóa thành công', time() + 2);
        } else {
            setcookie('msg', 'Xóa không thành công', time() + 2);
        }
    }
}