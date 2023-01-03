<?php
require_once('Models/tinh.php');
class tinhController
{
    var $tinh_model;
    public function __construct()
    {
        $this->tinh_model = new Tinh();
    }

    public function get_all_tinh()
    {
        $data = array();
        $data = $this->tinh_model->All();
        require_once('Views/index.php');
    }

    public function get_tinh()
    {
        $data = array();
        $id = $_GET['id'];
        $data = $this->tinh_model->find($id);
        require_once('Views/index.php');
    }

    public function show_tinh()
    {
        require_once('Views/index.php');
    }
    public function add_tinh()
    {
        $path = '../Others/images/';
        $img = "";
        $target_file = $path . basename($_FILES['img']["name"]);
        $status_upload = move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
        if ($status_upload) {
            $img = 'Others/images/' . basename($_FILES['img']["name"]);
        }

        $img_bg = "";
        $target_file = $path . basename($_FILES['img_bg']["name"]);
        $status_upload = move_uploaded_file($_FILES['img_bg']['tmp_name'], $target_file);
        if ($status_upload) {
            $img_bg = 'Others/images/' . basename($_FILES['img_bg']["name"]);
        }
        $data = array(
            'matinh' => $_POST['matinh'],
            'tentinh' => $_POST['tentinh'],
            'gttinh' => $_POST['gttinh'],
            'img' => $img,
            'img_bg' => $img_bg,
            'mien' => $_POST['mien']
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }

        $this->tinh_model->store($data);
        header('location: ?act=tinh&xuli=all');
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->tinh_model->delete($id);
        header('location: ?act=tinh&xuli=all');
    }
    public function store()
    {
        $path = '../Others/images/';
        $img = "";
        $target_file = $path . basename($_FILES['img']["name"]);
        $status_upload = move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
        if ($status_upload) {
            $img = 'Others/images/' . basename($_FILES['img']["name"]);
        }

        $img_bg = "";
        $target_file = $path . basename($_FILES['img_bg']["name"]);
        $status_upload = move_uploaded_file($_FILES['img_bg']['tmp_name'], $target_file);
        if ($status_upload) {
            $img_bg = 'Others/images/' . basename($_FILES['img_bg']["name"]);
        }
        $data = array(
            'matinh' => $_POST['matinh'],
            'tentinh' => $_POST['tentinh'],
            'gttinh' => $_POST['gttinh'],
            'img' => $img,
            'img_bg' => $img_bg,
            'mien' => $_POST['mien']
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->tinh_model->store($data);
        header('location: ?act=tinh&xuli=all');
    }
    public function update()
    {
        $path = '../Others/images/';
        $img = "";
        $target_file = $path . basename($_FILES['img']["name"]);
        $status_upload = move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
        if ($status_upload) {
            $img = 'Others/images/' . basename($_FILES['img']["name"]);
        }

        $img_bg = "";
        $target_file = $path . basename($_FILES['img_bg']["name"]);
        $status_upload = move_uploaded_file($_FILES['img_bg']['tmp_name'], $target_file);
        if ($status_upload) {
            $img_bg = 'Others/images/' . basename($_FILES['img_bg']["name"]);
        }
        $data = array(
            'matinh' => $_POST['matinh'],
            'tentinh' => $_POST['tentinh'],
            'gttinh' => $_POST['gttinh'],
            'img' => $img,
            'img_bg' => $img_bg,
            'mien' => $_POST['mien']
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        if ($img == "") {
            unset($data['img']);
        }
        if ($img_bg == "") {
            unset($data['img_bg']);
        }
        $this->tinh_model->update_tinh($data);
    }
}