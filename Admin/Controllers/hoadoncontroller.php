<?php
require_once("Models/hoadon.php");
class HoaDonController
{
    var $hoadon_model;
    public function __construct()
    {
        $this->hoadon_model = new Hoadon();
    }
    function xetduyet()
    {
        $data = array(
            'madonhang' => $_GET['id'],
            'thanhtoan' => "Đã thanh toán",
        );
        $this->hoadon_model->update($data);
        header('location: ?act=hoadon&xuli=all');
    }
    function delete()
    {
        if (isset($_GET['id'])) {
            $this->hoadon_model->delete($_GET['id']);
        }
        header('location: ?act=hoadon&xuli=all');
    }
    function chitiet()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data_donhang = $this->hoadon_model->chitiethoadon($id);
        $data_khachhang = $this->hoadon_model->chitietkhachhang($id);
        require_once("Views/index.php");
    }
    function getAll()
    {
        $data = $this->hoadon_model->All();
        require_once('Views/index.php');
    }
}