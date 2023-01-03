<?php
    require_once("model.php");
    class Order extends Model
    {
        function order_action($datadh, $datahk)
        {
            $col = "";
            $val = "";
            foreach ($datadh as $key => $value)
            {
                $col .= $key . ", ";
                $val .= "'" . $value . "', "; 
            }
            $col = trim($col, ", ");
            $val = trim($val, ", ");
            $sql = "INSERT INTO donhang($col) VALUES ($val)";
            $status1 = $this->conn->query($sql);

            $get_madh_sql = "SELECT MAX(madonhang) AS madh FROM donhang";
            $get_madh = $this->conn->query($get_madh_sql)->fetch_assoc();
            $madh = $get_madh['madh'];
            foreach ($datahk as $key => $value)
            {
                $hoten_hk = "'" . $value['hoten'] . "'";
                $gioitinh_hk = "'" . $value['gioitinh'] . "'";
                $ngaysinh_hk = "'" . $value['ngaysinh'] . "'";
                $sql = "INSERT INTO thongtindonhang VALUES ($madh, $hoten_hk, $gioitinh_hk, $ngaysinh_hk)";
                $status2 = $this->conn->query($sql);
                if ($status2 == false)
                {
                    break;
                }
            }
            header('location: ?act=order&xuli=thanhtoan&madh=' . $madh);
        }

        function pay_action($madh)
        {
            $sql = "UPDATE donhang SET thanhtoan = 'Đã thanh toán' WHERE madonhang = $madh";
            $status = $this->conn->query($sql);
            if ($status == true)
            {
                header('location: ?act=order&xuli=thongtindonhang&madh=' . $madh);
            } 
            else
            {
                header('location: ?act=thanhtoan&xuli=fail');
            }
        }

        function get_ttdh($madh)
        {
            $sql = "SELECT * FROM donhang AS d, tour_some_info AS ts WHERE d.madonhang = $madh AND d.t_id = ts.id";
            require('result.php');
            return $data;
        }

        function get_tvdh($madh)
        {
            $sql = "SELECT * FROM thongtindonhang WHERE madonhang = $madh";
            require('result.php');
            return $data;
        }
        function get_detail($id)
        {
            $sql = "SELECT * FROM tour_some_info AS t, tinh AS ti WHERE ti.matinh = t.start_locate AND t.id = '$id'";
            require('result.php');
            return $data;
        }

        function get_info_acc()
        {
            $username = $_SESSION['login']['username'];
            $sql = "SELECT * FROM account WHERE username = '" .$username . "'";
            require('result.php');
            return $data;
        }
    }
?>