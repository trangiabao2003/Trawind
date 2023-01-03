<?php
    require_once('Models/tour.php');
    class tourController
    {
        var $tour_model;
        public function __construct()
        {
            $this->tour_model = new Tour();
        }

        public function get_all_tour()
        {
            $data = array();
            $data = $this->tour_model->get_all_tour();
            require_once('Views/index.php');
        }

        public function get_tour()
        {
            $data = array();
            $id = $_GET['id'];
            $data = $this->tour_model->chitiettour($id);
            if ($data[0]['sale'] == 1)
            {
                $data_sale = $this->tour_model->getSalePrice($id);
            }
            if ($data == null)
            {
                header('location: ?act=tour');
                echo "<script>alert('Tour này chưa được cập nhật chi tiết, vui lòng cập nhật chi tiết tour trước!')</script>";
            }
            else
            {
                require_once('Views/index.php');
            }
        }

        public function add_tour()
        {
            $path = '../Others/images/';
            $img = "";
            $target_file = $path . basename($_FILES['img']["name"]);
            $status_upload = move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
            if ($status_upload)
            {
                $img = 'Others/images/' . basename($_FILES['img']["name"]);
            }

            $data = array(
                'id' => $_POST['id'],
                'id_chude' => $_POST['id_chude'],
                'mien' => $_POST['mien'],
                'image' => $img,
                'rate' => '0',
                'time' => $_POST['time'],
                'locate' => $_POST['locate'],
                'start_locate' => $_POST['start_locate'],
                'end_locate' => $_POST['end_locate'],
                'price' => $_POST['price'],
                'sale' => '0'
            );
            foreach ($data as $key => $value) {
                if (strpos($value, "'") != false) {
                    $value = str_replace("'", "\'", $value);
                    $data[$key] = $value;
                }
            }
            $this->tour_model->store($data);
            header('location: ?act=tour&xuli=all');
        }

        public function update()
        {
            $path = '../Others/images/';
            $img = "";
            if (isset($_FILES['img']))
            {
                $target_file = $path . basename($_FILES['img']["name"]);
                $status_upload = move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                if ($status_upload)
                {
                    $img = 'Others/images/' . basename($_FILES['img']["name"]);
                }
            }
            
            $data = array(
                'id' => $_POST['id'],
                'id_chude' => $_POST['id_chude'],
                'mien' => $_POST['mien'],
                'image' => $img,
                'time' => $_POST['time'],
                'locate' => $_POST['locate'],
                'start_locate' => $_POST['start_locate'],
                'end_locate' => $_POST['end_locate'],
                'price' => $_POST['price'],
                'sale' => $_POST['sale'],
                'trangthai' => $_POST['trangthai']
            );
            if ($img == "")
            {
                unset($data['image']);
            }
            foreach ($data as $key => $value) {
                if (strpos($value, "'") != false) {
                    $value = str_replace("'", "\'", $value);
                    $data[$key] = $value;
                }
            }

            if ($_POST['sale'] == 1)
            {
                $check = false;
                $data_sale = array(
                    't_id' => $_POST['id'],
                    'price_sale' => $_POST['price_sale'],
                    'percent_sale' => $_POST['percent_sale']
                );
                foreach ($data_sale as $key => $value) {
                    if (strpos($value, "'") != false) {
                        $value = str_replace("'", "\'", $value);
                        $data_sale[$key] = $value;
                    }
                }
                $tour_sale = $this->tour_model->get_tour_sale();
                foreach($tour_sale as $key => $value)
                {
                    if ($value['t_id'] == $_POST['id'])
                    {
                        $this->tour_model->updateSale($data_sale);
                        $check = true;
                        break;
                    }
                }
                if (!$check)
                {
                    $this->tour_model->storeSale($data_sale);
                }
            }
            else 
            {
                $this->tour_model->delSale($_POST['id']);
            }
            $this->tour_model->updateTour($data);
            header('location: ?act=tour&xuli=all');
        }

        public function modifyTour()
        {
            $id = $_GET['id'];
            $data_tour = $this->tour_model->get_info_tour($id);
            $data_chude = $this->tour_model->getAllChude();
            $data_tinh = $this->tour_model->getAllTinh();
            if ($data_tour[0]['sale'] == 1)
            {
                $data_sale = $this->tour_model->getSalePrice($id);
            }
            require_once('Views/index.php');
        }

        public function add() 
        {
            $data_chude = $this->tour_model->getAllChude();
            $data_tinh = $this->tour_model->getAllTinh();
            require_once('Views/index.php');
        }

        public function delete()
        {
            $id = $_GET['id'];
            $this->tour_model->delTour($id);
            header('location: ?act=tour&xuli=all');
        }
    }
?>