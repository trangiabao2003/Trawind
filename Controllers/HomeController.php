<?php
    require_once('Models/home.php');
    class HomeController
    {
        var $home_model;
        function __construct()
        {
            $this->home_model = new Home();
        }

        function get_data()
        {
            $data_chude = $this->home_model->chudetour();
            $data_tinhmienbac = $this->home_model->tinh_mien('Bắc');
            $data_tinhmientrung = $this->home_model->tinh_mien('Trung');
            $data_tinhmiennam = $this->home_model->tinh_mien('Nam');
            $data_randomtinh = $this->home_model->random_tinh();
            $data_tournoibat = $this->home_model->tour_noibat();
            $data_toursale = $this->home_model->tour_sale();
            $data_slideshow = $this->home_model->get_slideshow_action();
            $data_list_liked_tour = $this->home_model->get_list_liked_tour();
            require_once('Views/index.php');
        }
    }
?>