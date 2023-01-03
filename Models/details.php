<?php
    require_once("model.php");
    class Details extends Model
    {
        function check_liked_tour($id)
        {   
            $username = $_SESSION['login']['username'];
            $sql = "SELECT * FROM like_tours WHERE tour_id = '$id' AND username = '" . $username . "'";
            require('result.php');
            return $data;
        }
        function details_tour($id)
        {
            $sql = "SELECT * FROM info_details as dt1, tour_some_info as dt2, tinh WHERE dt1.id = '" . $id . "' AND dt1.id = dt2.id AND tinh.matinh = dt2.start_locate";
            require('result.php');
            return $data;
        }

        function get_comment($id)
        {
            $sql = "SELECT * FROM danhgia AS dg, donhang AS dh WHERE dg.madh = dh.madonhang AND dh.t_id = '$id'";
            require('result.php');
            return $data;
        }
    }
?>