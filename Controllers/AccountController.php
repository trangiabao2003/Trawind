<?php
    require_once('Models/account.php');
    class AccountController
    {
        var $account_model;
        function __construct()
        {
            $this->account_model = new Account();
        }

        function login()
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $data = array(
                'username'=>$username,
                'password'=>$password,
            );
            $this->account_model->login_action($data);
        }

        function signup()
        {
            $check1 = true;
            $check2 = false;
            $data_check = $this->account_model->check_account();
            foreach ($data_check as $key => $row)
            {
                if ($row['username'] == $_POST['usernamesu'] || $row['email'] == $_POST['email'])
                {
                    $check1 = false;
                }
            }
            if ($_POST['passwordsu'] == $_POST['passwordsu2'])
            {
                $check2 = true;
            }
            $data = array(
                "email"=> $_POST['email'],
                "username"=> $_POST['usernamesu'],
                "password"=>$_POST['passwordsu'],
                "idquyen" => '0');
            $this->account_model->signup_action($data,$check1,$check2);
        }

        function logout()
        {
            $this->account_model->logout_action();
        }

        function update_account()
        {
            if (isset($_POST['submit_update']))
            {
                $data = array();
                if (isset($_POST['hoten']))
                {
                    $data['hoten'] = $_POST['hoten'];
                }
                if (isset($_POST['sdt']))
                {
                    $data['sdt'] = $_POST['sdt'];
                }
                if (isset($_POST['email']))
                {
                    $data['email'] = $_POST['email'];
                }
                $this->account_model->update_action($data);
            }
        }
        
        function get_info_account()
        {
            $data_chude = $this->account_model->chudetour();
            $data_tinhmienbac = $this->account_model->tinh_mien('Bắc');
            $data_tinhmientrung = $this->account_model->tinh_mien('Trung');
            $data_tinhmiennam = $this->account_model->tinh_mien('Nam');
            $data_account = $this->account_model->get_info_account_action();
            $data_liked_tours = $this->account_model->get_list_liked_tour_info();
            $data_order_tour = $this->account_model->list_order_tour();
            $data_reviews = $this->account_model->list_review();
            require_once('Views/index.php');
        }
    }
?>