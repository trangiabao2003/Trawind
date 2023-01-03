<?php
    require_once('Models/details.php');
    class DetailsController
    {
        var $details_model;
        function __construct()
        {
            $this->details_model = new Details();
        }

        function data()
        {
            $data_chude = $this->details_model->chudetour();
            $data_tinhmienbac = $this->details_model->tinh_mien('Bắc');
            $data_tinhmientrung = $this->details_model->tinh_mien('Trung');
            $data_tinhmiennam = $this->details_model->tinh_mien('Nam');
            $id = $_GET['id'];
            $data_tour = $this->details_model->details_tour($id);
            $data_tour[0]['liked'] = false;
            if ($data_tour[0]['sale'] == 1)
            {
                $data_temp = $this->details_model->get_info_sale($id);
                $data_tour[0]['price_sale'] = $data_temp[0]['price_sale'];
            }
            if (isset($_SESSION['login']['username']))
            {
                $check_liked = $this->details_model->check_liked_tour($id);
                if (count($check_liked) > 0)
                {
                    $data_tour[0]['liked'] = true;
                }
            }
            if ($data_tour != "")
            {
                $datalq = $this->details_model->tour_chude($data_tour[0]['id_chude']);
                $datalq = array_slice($datalq,0,4);
            }
            $data_comment = $this->details_model->get_comment($id);
            require_once('Views/index.php');
        }
    
    }
?>