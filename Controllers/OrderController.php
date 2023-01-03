<?php
    require_once('Models/order.php');
    class OrderController
    {
        var $order_model;
        function __construct()
        {
            $this->order_model = new Order();
        }
        function detail()
        {
            $data_chude = $this->order_model->chudetour();
            $data_tinhmienbac = $this->order_model->tinh_mien('Bắc');
            $data_tinhmientrung = $this->order_model->tinh_mien('Trung');
            $data_tinhmiennam = $this->order_model->tinh_mien('Nam');
            $ngay = date("d");
            $thang = date("m");
            $nam = date("Y");
            $id = $_GET['tid'];
            $data_tour = $this->order_model->get_detail($id);
            if ($data_tour[0]['sale'] == 1)
            {
                $data_temp = $this->order_model->get_info_sale($id);
                if (count($data_temp) > 0)
                {
                    $data_tour[0]['price_sale'] = $data_temp[0]['price_sale'];
                }
            }
            $hoten = "";
            $sdt = "";
            $diachi = "";
            $email = "";
            if (isset($_SESSION['is_login']))
            {
                $data_acc = $this->order_model->get_info_acc();
                $hoten = $data_acc[0]['hoten'];
                $sdt = $data_acc[0]['sdt'];
                $email = $data_acc[0]['email'];
            }
            require_once('Views/index.php');
        }
        function detail_for_pay()
        { 
            $madh = $_GET['madh'];
            $data_chude = $this->order_model->chudetour();
            $data_tinhmienbac = $this->order_model->tinh_mien('Bắc');
            $data_tinhmientrung = $this->order_model->tinh_mien('Trung');
            $data_tinhmiennam = $this->order_model->tinh_mien('Nam');
            $ngay = date("d");
            $thang = date("m");
            $nam = date("Y");
            $data_dh = $this->order_model->get_ttdh($madh);
            $t_id = $data_dh[0]['t_id'];
            $data_tour = $this->order_model->get_detail($t_id);
            if ($data_tour[0]['sale'] == 1)
            {
                $data_temp = $this->order_model->get_info_sale($t_id);
                if (count($data_temp) > 0)
                {
                    $data_tour[0]['price_sale'] = $data_temp[0]['price_sale'];
                }
            }
            require_once('Views/index.php');
        }
        function order()
        {
            $datadh = array();
            if (isset($_SESSION['login']['username']))
            {
                $datadh['username'] = $_SESSION['login']['username'];
            }
            $datadh['t_id'] = $_POST['t_id'];
            $datadh['hoten'] = $_POST['hoten_datmua'];
            $datadh['sdt'] = $_POST['sdt'];
            $datadh['email'] = $_POST['email'];
            $datadh['diachi'] = $_POST['diachi'];
            $datadh['nguoilon'] = $_POST['songuoilon'];
            $datadh['trenho'] = $_POST['sotrenho'];
            $datadh['treem'] = $_POST['sotreem'];
            $datadh['embe'] = $_POST['soembe'];
            $datadh['tongtien'] = $_POST['tongtien'];
            $datadh['sokhachhang'] = $datadh['nguoilon'] + $datadh['trenho'] + $datadh['treem'] + $datadh['embe'];

            $datahk = array();
            for ($i = 0; $i < count((array) $_POST['hoten']); $i++)
            {
                $datahk[$i]['hoten'] = $_POST['hoten'][$i];
                $datahk[$i]['gioitinh'] = $_POST['gioitinh'][$i];
                $day =  $_POST['day'][$i];
                $month = $_POST['month'][$i];
                $year = $_POST['year'][$i];
                $datahk[$i]['ngaysinh'] = $day . " " . $month . ", " . $year;
            }

            $this->order_model->order_action($datadh,$datahk);
        }

        function pay()
        {
            $madh = $_GET['madh'];
            $this->order_model->pay_action($madh);
        }

        function ttdh()
        {
            $data_chude = $this->order_model->chudetour();
            $data_tinhmienbac = $this->order_model->tinh_mien('Bắc');
            $data_tinhmientrung = $this->order_model->tinh_mien('Trung');
            $data_tinhmiennam = $this->order_model->tinh_mien('Nam');
            $madh = "";
            if (isset($_GET['madh']))
            {
                $madh = $_GET['madh'];
            }
            if ($madh == "")
            {
                if (isset($_SESSION['madh']))
                {
                    $madh = $_SESSION['madh'];
                }
            }
            $ttdh = $this->order_model->get_ttdh($madh);
            $tvdh = $this->order_model->get_tvdh($madh);
            require_once('Views/index.php');
        }
    }
?>