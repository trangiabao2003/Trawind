<?php
    require_once('Models/DLTN.php');
    class DLTNController
    {
        var $dltn_model;
        function __construct()
        {
            $this->dltn_model = new DLTN();
        }
        function data()
        {
            $data_chude = $this->dltn_model->chudetour();
            $data_tinhmienbac = $this->dltn_model->tinh_mien('Bắc');
            $data_tinhmientrung = $this->dltn_model->tinh_mien('Trung');
            $data_tinhmiennam = $this->dltn_model->tinh_mien('Nam');
            require_once('Views/index.php');
        }
    }
?>