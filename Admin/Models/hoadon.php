<?php
require_once("model.php");
class Hoadon extends Model
{
    var $table = "donhang";
    var $contens = "madonhang";

    function chitiethoadon($id)
    {
        $sql = "select * from donhang AS dh, tour_some_info AS t where dh.t_id = t.id AND dh.madonhang = $id ";
        require("result.php");
        return $data;
    }

    function chitietkhachhang($id)
    {
        $sql = "select * from thongtindonhang where madonhang = $id";
        require("result.php");
        return $data;
    }
}