<?php
    require_once('connection.php');
    class Model
    {
        var $conn;
        function __construct()
        {
            $conn_1 = new connection();
            $this->conn = $conn_1->conn; 
        }
        // lay toan bo tour
        function all_tour()
        {
            $sql = "SELECT * FROM tour_some_info AS t LEFT JOIN tour_sale AS ts ON t.id = ts.t_id, tinh AS ti WHERE t.start_locate = ti.matinh AND t.trangthai = 1";
            require("result.php");
            return $data; 
        }
        // lay cac chu de 
        function chudetour()
        {   
            $sql = "SELECT * FROM chu_de_tour";
            require("result.php");
            return $data;
        }
        // lay tour theo chu de
        function tour_chude($machude)
        {
            $sql = "SELECT * FROM tour_some_info AS t LEFT JOIN tour_sale AS ts ON t.id = ts.t_id, tinh AS ti WHERE t.id_chude = '" . $machude . "' AND t.start_locate = ti.matinh AND t.trangthai = 1" ;
            require("result.php");
            return $data;
        }
        // lay tinh theo mien
        function tinh_mien($mien)
        {
            $sql = "SELECT * FROM tinh WHERE mien = '" .$mien  ."'";
            require("result.php");
            return $data;
        }
        // lay tour theo tinh
        function tour_tinh($matinh)
        {
            $sql = "SELECT * FROM tour_some_info AS t LEFT JOIN tour_sale AS ts ON t.id = ts.t_id, tinh WHERE t.end_locate = $matinh AND t.start_locate = tinh.matinh AND t.trangthai = 1";
            require("result.php");
            return $data;
        }
        // lay random tinh
        function random_tinh()
        {
            $sql = "SELECT * FROM tinh ORDER BY RAND() LIMIT 5";
            require('result.php');
            return $data;
        }
        // lay tour sale
        function tour_sale()
        {
            $sql = "SELECT * FROM tour_some_info AS t, tour_sale AS s, tinh AS ti WHERE t.id = s.t_id AND t.start_locate = ti.matinh AND t.trangthai = 1 LIMIT 6";
            require('result.php');
            return $data;
        }
        // lay tour noi bat
        function tour_noibat()
        {
            $sql = "SELECT * FROM tour_some_info AS t LEFT JOIN tour_sale AS s ON t.id = s.t_id WHERE t.id IN (SELECT t_id FROM donhang GROUP BY t_id ORDER BY COUNT(t_id)) AND t.trangthai = 1 LIMIT 3";
            require('result.php');
            return $data;
        }
        
        function get_list_liked_tour()
        {
            if (isset($_SESSION['login']))
            {
                $username = $_SESSION['login']['username'];
                $sql = "SELECT tour_id FROM like_tours WHERE username ='" .$username . "'";
                require('result.php');
                return $data;
            }
        }

        function get_info_sale($id)
        {
            $sql = "SELECT * FROM tour_sale WHERE t_id = '$id'";
            require('result.php');
            return $data;
        }

        function get_tour($id)
        {
            $sql = "SELECT * FROM tour_some_info WHERE id = '$id'";
            require('result.php');
            return $data;
        }
    }
?>