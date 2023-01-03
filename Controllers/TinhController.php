<?php
    require_once('Models/tour_tinh.php');
    class TinhController
    { 
        var $tinh_model;
        function __construct()
        {
            $this->tinh_model = new Tour_tinh();
        }

        function data()
        {
            $data_chude = $this->tinh_model->chudetour();
            $data_tinhmienbac = $this->tinh_model->tinh_mien('Bắc');
            $data_tinhmientrung = $this->tinh_model->tinh_mien('Trung');
            $data_tinhmiennam = $this->tinh_model->tinh_mien('Nam');
            $data_list_liked_tour = $this->tinh_model->get_list_liked_tour();
            if (isset($_GET['matinh']))
            {
                $data_tour = $this->tinh_model->tour_tinh($_GET['matinh']);
                $info_tinh = $this->tinh_model->info_tinh($_GET['matinh']);
                $numkq = count($data_tour);
                if ($numkq == 0)
                {
                    $data = "Không tìm thấy tour!!!";
                }
                else
                {
                    $limit = 8;
                    $sotrang = $numkq / $limit;
                    $id = isset($_GET['page']) ? $_GET['page'] : 1;
                    $start = ($id - 1) * $limit;
                    $data = array_slice($data_tour,$start,$limit);
                }
                require_once('Views/index.php');
            }   
        }
    }
?>