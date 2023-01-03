<?php
require_once("Models/chitiettour.php");
class ChiTietTourController
{
    var $chitiettour_model;
    public function __construct()
    {
        $this->chitiettour_model = new Chitiettour();
    }
    function getAll()
    {
        $data = $this->chitiettour_model->All();
        require_once('Views/index.php');
    }
    public function store()
    {
        mkdir('../Others/images/' . $_POST['id']);
        $target_dir = '../Others/images/' . $_POST['id'] .'/';  // thư mục chứa file upload

        $anh1 = "";
        $target_file = $target_dir . basename($_FILES["anh1"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["anh1"]["tmp_name"], $target_file);
        var_dump(basename($_FILES["anh1"]["name"]));
        if ($status_upload) { // nếu upload file không có lỗi 
            $anh1 = "Others/images/" . $_POST['id'] .'/' . basename($_FILES["anh1"]["name"]);
        }

        $anh2 = "";
        $target_file = $target_dir . basename($_FILES["anh2"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["anh2"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $anh2 =  "Others/images/" . $_POST['id'] .'/' . basename($_FILES["anh2"]["name"]);
        }

        $anh3 = "";
        $target_file = $target_dir . basename($_FILES["anh3"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["anh3"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $anh3 =  "Others/images/" . $_POST['id'] .'/' . basename($_FILES["anh3"]["name"]);
        }

        $anh4 = "";
        $target_file = $target_dir . basename($_FILES["anh4"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["anh4"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $anh4 =  "Others/images/" . $_POST['id'] .'/' . basename($_FILES["anh4"]["name"]);
        }


        $data = array(
            'id' => $_POST['id'],
            'thoigian' =>  $_POST['thoigian'],
            'phuongtien' =>  $_POST['phuongtien'],
            'diemthamquan' => $_POST["diemthamquan"],
            'amthuc' =>  $_POST['amthuc'],
            'khachsan' =>  $_POST['khachsan'],
            'tgianlytuong' =>  $_POST['tgianlytuong'],
            'doituong' =>  $_POST['doituong'],
            'uudai' =>  $_POST['uudai'],
            'lichtrinh' =>  $_POST['lichtrinh'],
            'anh1' => $anh1,
            'anh2' => $anh2,
            'anh3' => $anh3,
            'anh4' => $anh4,
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }

        $this->chitiettour_model->store($data);
        header('location: ?act=chitiettour&xuli=all');
    }
    public function update()
    {
        $target_dir = '../Others/images/' . $_POST['id'] .'/';  // thư mục chứa file upload
        $anh1 = "";
        $target_file = $target_dir . basename($_FILES["anh1"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["anh1"]["tmp_name"], $target_file);
        var_dump(basename($_FILES["anh1"]["name"]));
        if ($status_upload) { // nếu upload file không có lỗi 
            $anh1 = "Others/images/" . $_POST['id'] .'/' . basename($_FILES["anh1"]["name"]);
        }

        $anh2 = "";
        $target_file = $target_dir . basename($_FILES["anh2"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["anh2"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $anh2 =  "Others/images/" . $_POST['id'] .'/' . basename($_FILES["anh2"]["name"]);
        }

        $anh3 = "";
        $target_file = $target_dir . basename($_FILES["anh3"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["anh3"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $anh3 =  "Others/images/" . $_POST['id'] .'/' . basename($_FILES["anh3"]["name"]);
        }

        $anh4 = "";
        $target_file = $target_dir . basename($_FILES["anh4"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["anh4"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $anh4 =  "Others/images/" . $_POST['id'] .'/' . basename($_FILES["anh4"]["name"]);
        } 
        $data = array(
            'id' => $_POST['id'],
            'thoigian' =>  $_POST['thoigian'],
            'phuongtien' =>  $_POST['phuongtien'],
            'diemthamquan' => $_POST["diemthamquan"],
            'amthuc' =>  $_POST['amthuc'],
            'khachsan' =>  $_POST['khachsan'],
            'tgianlytuong' =>  $_POST['tgianlytuong'],
            'doituong' =>  $_POST['doituong'],
            'uudai' =>  $_POST['uudai'],
            'lichtrinh' =>  $_POST['lichtrinh'],
            'anh1' => $anh1,
            'anh2' => $anh2,
            'anh3' => $anh3,
            'anh4' => $anh4,
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        if ($anh1 == "") {
            unset($data['anh1']);
        }
        if ($anh2 == "") {
            unset($data['anh2']);
        }
        if ($anh3 == "") {
            unset($data['anh3']);
        }
        if ($anh4 == "") {
            unset($data['anh4']);
        }
        $this->chitiettour_model->update_details($data);
    }

    public function get_chitiet()
    {
        $id = $_GET['id'];
        $data = $this->chitiettour_model->get_chitiet($id);
        require_once('Views/index.php');
    }

    public function add_tour()
    {
        $idtour = $this->chitiettour_model->get_idtour();
        require_once('Views/index.php');
    }
}