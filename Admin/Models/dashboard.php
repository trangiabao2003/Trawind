<?php
require_once("connection.php");
class dashboard
{
    var $conn;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function tk_dtthang($m){
        $sql = "SELECT SUM(TongTien) as Count FROM donhang WHERE MONTH(ngaydattour) = $m And thanhtoan = 'Đã thanh toán'";

       return $this->conn->query($sql)->fetch_assoc();
    }
    function tk_chude($id){
        $sql = "SELECT count(machude) as Count FROM chu_de_tour WHERE machude = $id";
        
        return $this->conn->query($sql)->fetch_assoc();
    }
    function tk_tour($id){
        $sql = "SELECT count(id) as Count FROM tour_some_info WHERE id = $id";
        
        return $this->conn->query($sql)->fetch_assoc();
    }
  
   
    function tk_nguoidung($id){
        $sql = "SELECT count(username) as Count FROM account WHERE idquyen = $id";
        
        return $this->conn->query($sql)->fetch_assoc();
    }
}
