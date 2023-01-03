<?php
    require_once('model.php');
    class Tour_tinh extends Model
    {
        function info_tinh($matinh)
        {
            $sql = "SELECT * FROM tinh WHERE matinh = $matinh";
            require('result.php');
            return $data;
        }
    }
?>