<?php
    require_once('model.php');
    class Home extends Model
    {
        function get_slideshow_action()
        {
            $sql = "SELECT * FROM slideshow";
            require('result.php');
            return $data;
        }
    }
?>