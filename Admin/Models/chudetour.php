<?php
require_once("model.php");

class chudetour extends Model
{
    var $table = "chu_de_tour";
    var $contens = "machude";
    function xoa($id)
    {
        $sql= "delete from chu_de_tour where machude='$id'";
         
        $status = $this->conn->query($sql);
        if ($status == true) {
            setcookie('msg', 'Xóa thành công', time() + 2);
        } else {
            setcookie('msg', 'Xóa không thành công', time() + 2);
        }
    }
    function find($id)
    {
        $sql = "select * from chu_de_tour where machude ='$id'";
        return $this->conn->query($sql)->fetch_assoc();
    }
    function sua($data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");
        $sql= "UPDATE chu_de_tour SET $v WHERE machude = '" .  $data['machude'] . "'";
         
        $result = $this->conn->query($sql);
        
        if ($result == true) {
            setcookie('msg', 'Cập nhật thành công', time() + 2);
            
        } else {
            setcookie('msg', 'Cập nhật không thành công', time() + 2);
          
        }
    }
   
   
}