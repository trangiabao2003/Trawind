<?php
require_once('model.php');
class Tinh extends Model
{
    var $table = 'tinh';
    var $contens = 'matinh';


    function update_tinh($data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");

        $idtinh = $data['matinh'];
        $query = "UPDATE tinh SET  $v   WHERE matinh =  '$idtinh'";
        $result = $this->conn->query($query);

        if ($result == true) {
            setcookie('msg', 'Cập nhật thành công', time() + 2);
            header('Location: ?act=tinh&xuli=all');
        } else {
            setcookie('msg', 'Cập nhật không thành công', time() + 2);
            header('Location: ?act=tinh&xuli=chitiet&id=' . $data['id']);
        }
    }
}