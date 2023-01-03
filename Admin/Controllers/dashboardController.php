<?php 
    require_once("Models/dashboard.php");
    class dashboardController {
        var $dashboard_model;
        public function __construct()
        {
            $this->dashboard_model = new dashboard();
        }
        // public function login()
        // {
        //     require_once("MVC/Views/login/login.php");
        // }
        // public function login_action()
        // {
        //     $this->login_model->login_action();
        // }
        public function admin()
        {
           

            $m = date("m");

            $data_dtthang = $this->dashboard_model->tk_dtthang($m);

            
            $data_chude = $this->dashboard_model->tk_chude(0);
            $data_tour = $this->dashboard_model->tk_tour(0);
      
            $data_nguoidung = $this->dashboard_model->tk_nguoidung(0);

           
            require_once("Views/index.php");
        }
        // public function logout()
        // {
        //     $this->login_model->logout
        // }
    }
?>