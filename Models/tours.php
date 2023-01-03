<?php
    require_once('model.php');
    class Tours extends Model 
    {
        function search_action($key)
        {
            $sql = "SELECT * FROM tour_some_info AS t LEFT JOIN tour_sale AS ts ON t.id = ts.t_id, tinh AS ti WHERE t.locate LIKE '%$key%' AND t.start_locate = ti.matinh" ;
            require('result.php');
            return $data;
        }

        function search_condition_action($diemdi, $diemden, $lichtrinh, $gia)
        {
            if ($gia == "Dưới 2 triệu")
            {
                if ($diemdi == "" && $diemden == "" && $lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price < 2000000 AND t.trangthai = 1";
                }
                else if ($diemdi == "" && $diemden == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price < 2000000 AND t.time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
                else if ($diemdi == "" && $lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price < 2000000 AND t.end_locate = '$diemden' AND t.trangthai = 1";
                }
                else if ($diemdi == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price < 2000000 AND t.end_locate = '$diemden' AND t.time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
                else if ($diemden == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price < 2000000 AND t.start_locate = '$diemdi' AND time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
                else if ($diemden == "" && $lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price < 2000000 AND t.start_locate = '$diemdi' AND t.trangthai = 1";
                }
                else if ($lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price < 2000000 AND t.start_locate = '$diemdi' AND t.end_locate = '$diemden' AND t.trangthai = 1";
                }
                else 
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price < 2000000 AND t.start_locate = '$diemdi' AND t.end_locate = '$diemden' AND time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
            }
            else if ($gia == "Từ 2 - 5 triệu")
            {
                if ($diemdi == "" && $diemden == "" && $lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price >= 2000000 AND t.price <= 5000000 AND t.trangthai = 1";
                }
                else if ($diemdi == "" && $diemden == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price >= 2000000 AND t.price <= 5000000 AND t.time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
                else if ($diemdi == "" && $lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price >= 2000000 AND t.price <= 5000000 AND t.end_locate = '$diemden' AND t.trangthai = 1";
                }
                else if ($diemdi == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price >= 2000000 AND t.price <= 5000000 AND t.end_locate = '$diemden' AND t.time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
                else if ($diemden == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price >= 2000000 AND t.price <= 5000000 AND t.start_locate = '$diemdi' AND time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
                else if ($diemden == "" && $lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price >= 2000000 AND t.price <= 5000000 AND t.start_locate = '$diemdi' AND t.trangthai = 1";
                }
                else if ($lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price >= 2000000 AND t.price <= 5000000 AND t.start_locate = '$diemdi' AND t.end_locate = '$diemden' AND t.trangthai = 1";
                }
                else 
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price >= 2000000 AND t.price <= 5000000 t.start_locate = '$diemdi' AND t.end_locate = '$diemden' AND time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
            }
            else if ($gia == "Từ 5 - 10 triệu")
            {
                if ($diemdi == "" && $diemden == "" && $lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 5000000 AND t.price <= 10000000 AND t.trangthai = 1";
                }
                else if ($diemdi == "" && $diemden == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 5000000 AND t.price <= 10000000 AND t.time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
                else if ($diemdi == "" && $lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 5000000 AND t.price <= 10000000 AND t.end_locate = '$diemden' AND t.trangthai = 1";
                }
                else if ($diemdi == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 5000000 AND t.price <= 10000000 AND t.end_locate = '$diemden' AND t.time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
                else if ($diemden == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 5000000 AND t.price <= 10000000 AND t.start_locate = '$diemdi' AND time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
                else if ($diemden == "" && $lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 5000000 AND t.price <= 10000000 AND t.start_locate = '$diemdi' AND t.trangthai = 1";
                }
                else if ($lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 5000000 AND t.price <= 10000000 AND t.start_locate = '$diemdi' AND t.end_locate = '$diemden' AND t.trangthai = 1";
                }
                else 
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 5000000 AND t.price <= 10000000 t.start_locate = '$diemdi' AND t.end_locate = '$diemden' AND time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
            }
            else if ($gia == "Từ 10 - 50 triệu")
            {
                if ($diemdi == "" && $diemden == "" && $lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 10000000 AND t.price <= 50000000 AND t.trangthai = 1";
                }
                else if ($diemdi == "" && $diemden == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 10000000 AND t.price <= 50000000 AND t.time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
                else if ($diemdi == "" && $lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 10000000 AND t.price <= 50000000 AND t.end_locate = '$diemden' AND t.trangthai = 1";
                }
                else if ($diemdi == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 10000000 AND t.price <= 50000000 AND t.end_locate = '$diemden' AND t.time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
                else if ($diemden == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 10000000 AND t.price <= 50000000 AND t.start_locate = '$diemdi' AND time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
                else if ($diemden == "" && $lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 10000000 AND t.price <= 50000000 AND t.start_locate = '$diemdi' AND t.trangthai = 1";
                }
                else if ($lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 10000000 AND t.price <= 50000000 AND t.start_locate = '$diemdi' AND t.end_locate = '$diemden' AND t.trangthai = 1";
                }
                else 
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 10000000 AND t.price <= 50000000 t.start_locate = '$diemdi' AND t.end_locate = '$diemden' AND time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
            }
            else if ($gia == "Trên 50 triệu")
            {
                if ($diemdi == "" && $diemden == "" && $lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 50000000 AND t.trangthai = 1";
                }
                else if ($diemdi == "" && $diemden == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 50000000 AND t.time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
                else if ($diemdi == "" && $lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 50000000 AND t.end_locate = '$diemden' AND t.trangthai = 1";
                }
                else if ($diemdi == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 50000000 AND t.end_locate = '$diemden' AND t.time LIKE '%$lichtrinh%'AND t.trangthai = 1" ;
                }
                else if ($diemden == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 50000000 AND t.start_locate = '$diemdi' AND time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
                else if ($diemden == "" && $lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 50000000 AND t.start_locate = '$diemdi' AND t.trangthai = 1";
                }
                else if ($lichtrinh == "")
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 50000000 AND t.start_locate = '$diemdi' AND t.end_locate = '$diemden' AND t.trangthai = 1";
                }
                else 
                {
                    $sql = "SELECT *, IF (t.sale = 1, (SELECT s.price_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS price_sale, IF (t.sale = 1, (SELECT s.percent_sale FROM tour_sale AS s WHERE t.id = s.t_id), 0) AS percent_sale FROM tour_some_info AS t, tinh AS ti 
                    WHERE t.start_locate = ti.matinh AND t.price > 50000000 t.start_locate = '$diemdi' AND t.end_locate = '$diemden' AND time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
            }
            else 
            {
                if ($diemdi == "" && $diemden == "" && $lichtrinh == "")
                {
                    $sql = "SELECT * FROM tour_some_info AS t LEFT JOIN tour_sale AS ts ON t.id = ts.t_id, tinh AS ti WHERE t.start_locate = ti.matinh AND t.trangthai = 1";
                }
                else if ($diemdi == "" && $diemden == "")
                {
                    $sql = "SELECT * FROM tour_some_info AS t LEFT JOIN tour_sale AS ts ON t.id = ts.t_id, tinh AS ti WHERE t.start_locate = ti.matinh AND time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
                else if ($diemdi == "" && $lichtrinh == "")
                {
                    $sql = "SELECT * FROM tour_some_info AS t LEFT JOIN tour_sale AS ts ON t.id = ts.t_id, tinh AS ti WHERE t.start_locate = ti.matinh AND t.end_locate = $diemden AND t.trangthai = 1";
                }
                else if ($diemdi == "")
                {
                    $sql = "SELECT * FROM tour_some_info AS t LEFT JOIN tour_sale AS ts ON t.id = ts.t_id, tinh AS ti WHERE t.start_locate = ti.matinh AND t.end_locate = $diemden AND time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
                else if ($diemden == "")
                {
                    $sql = "SELECT * FROM tour_some_info AS t LEFT JOIN tour_sale AS ts ON t.id = ts.t_id, tinh AS ti WHERE t.start_locate = ti.matinh AND start_locate = $diemdi AND time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
                else if ($diemden == "" && $lichtrinh == "")
                {
                    $sql = "SELECT * FROM tour_some_info AS t LEFT JOIN tour_sale AS ts ON t.id = ts.t_id, tinh AS ti WHERE t.start_locate = ti.matinh AND t.start_locate = $diemdi AND t.trangthai = 1";
                }
                else if ($lichtrinh == "")
                {
                    $sql = "SELECT * FROM tour_some_info AS t LEFT JOIN tour_sale AS ts ON t.id = ts.t_id, tinh AS ti WHERE t.start_locate = ti.matinh AND t.start_locate = $diemdi AND t.end_locate = $diemden AND t.trangthai = 1";
                }
                else
                {
                    $sql = "SELECT * FROM tour_some_info AS t LEFT JOIN tour_sale AS ts ON t.id = ts.t_id, tinh AS ti WHERE t.start_locate = ti.matinh AND t.start_locate = '$diemdi' AND t.end_locate = '$diemden' AND time LIKE '%$lichtrinh%' AND t.trangthai = 1";
                }
            }
            require('result.php');
            return $data;
        }

        function danhgia($data)
        {
            $col = "";
            $val = "";
            foreach ($data as $key => $value)
            {
                $col .= $key . ", ";
                $val .= "'" . $value . "', "; 
            }
            $col = trim($col, ", ");
            $val = trim($val, ", ");
            $sql = "INSERT INTO danhgia($col) VALUES ($val)";
            $this->conn->query($sql);
            $_SESSION['success'] = "Cảm ơn bạn đã đóng góp ý kiến cho Tour. Chúng tôi xin chân thành cảm ơn!";
            $_SESSION['status'] = "success";
            header('location: ?act=taikhoan&xuli=tttk');
        }

        function updateRate($data)
        {
            $rate = $data['rate'];
            $sldanhgia = $data['sldanhgia'];
            $id = $data['id'];
            $sql = "UPDATE tour_some_info SET rate = '$rate', sldanhgia = '$sldanhgia' WHERE id = '$id'";
            $this->conn->query($sql);
        }
    }
?>