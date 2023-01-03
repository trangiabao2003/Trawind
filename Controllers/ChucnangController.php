<?php
    require_once('Models/chucnang.php');
    class ChucnangController
    {
        var $chucnang_model;
        function __construct()
        {
            $this->chucnang_model = new Chucnang();
        }

        function like_tour()
        {
            $id_tour = $_GET['id_tour'];
            $this->chucnang_model->like_tour_action($id_tour);
        }

        
    }
?>
