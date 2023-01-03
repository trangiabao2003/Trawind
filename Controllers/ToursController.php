<?php
    require_once('Models/tours.php');
    class ToursController
    {
        var $tours_model;
        function __construct()
        {
            $this->tours_model = new Tours();
        }

        function data()
        {
            $data_chude = $this->tours_model->chudetour();
            $data_tinhmienbac = $this->tours_model->tinh_mien('Bắc');
            $data_tinhmientrung = $this->tours_model->tinh_mien('Trung');
            $data_tinhmiennam = $this->tours_model->tinh_mien('Nam');
            $data_list_liked_tour = $this->tours_model->get_list_liked_tour();
            $data_tour = array();
            if (isset($_GET['machude']))
            {
                $data_tour = $this->tours_model->tour_chude($_GET['machude']);
            }
            else if (isset($_GET['search_key']))
            {
                $data_tour = $this->tours_model->search_action($_GET['search_key']);
            }
            else if (isset($_GET['search_cdt_button']))
            {
                $diemdi = $_GET['diemdi'];
                $diemden = $_GET['diemden'];
                $lichtrinh = $_GET['lichtrinh'];
                $gia = $_GET['gia'];
                $data_tour = $this->tours_model->search_condition_action($diemdi,$diemden,$lichtrinh,$gia);
            }
            else if (isset($_GET['toursale']))
            {
                $data_tour = $this->tours_model->tour_sale();
            }
            else 
            {
                $data_tour = $this->tours_model->all_tour();
            }
            $numkq = count($data_tour);
            if ($numkq == 0)
            {
                $data = "Không tìm thấy tour!!!";
            }
            else
            {
                $limit = 8;
                $sotrang = $numkq / $limit;
                $du = $numkq % $limit;
                if ($du != 0)
                {
                    $sotrang += 1;
                }
                $id = isset($_GET['page']) ? $_GET['page'] : 1;
                $start = ($id - 1) * $limit;
                $data = array_slice($data_tour,$start,$limit);
            }
            require_once('Views/index.php');
        }

        function danhgia()
        {
            $data = array();
            $data['madh'] = $_POST['madh'];
            $data['comment'] = $_POST['comment'];
            $data['rate'] = $_POST['rate'];
            $id = $_POST['t_id'];
            $data_tour = $this->tours_model->get_tour($id);
            $data_update['rate'] = ($data_tour[0]['rate'] * $data_tour[0]['sldanhgia'] + $data['rate']) / ($data_tour[0]['sldanhgia'] + 1);
            $data_update['sldanhgia'] = $data_tour[0]['sldanhgia'] + 1;
            $data_update['id'] = $id;
            $this->tours_model->updateRate($data_update);
            $this->tours_model->danhgia($data);
        }
    }
?>