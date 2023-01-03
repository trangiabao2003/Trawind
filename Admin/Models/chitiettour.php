<?php
require("model.php");
class Chitiettour extends model
{
    var $table = "info_details";
    var $contens = "id";

    public function get_chitiet($id)
    {
        $sql = "SELECT * FROM info_details WHERE id = '$id'";
        require('result.php');
        return $data;
    }

    function update_details($data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");


        $sql = "UPDATE info_details SET  $v   WHERE id = '" . $data['id'] . "'";
        $result = $this->conn->query($sql);

        if ($result == true) {
            setcookie('msg', 'Cập nhật thành công', time() + 2);
            header('Location: ?act=chitiettour&xuli=all');
        } else {
            setcookie('msg', 'Cập nhật không thành công', time() + 2);
            header('Location: ?act=chitiettour&xuli=chitiet&id=' . $data['id']);
        }
    }

    public function get_idtour()
    {
        $sql = "select * from tour_some_info where id NOT IN (select id from info_details)";
        require('result.php');
        return $data;
    }
}