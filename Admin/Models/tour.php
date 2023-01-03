<?php
    require_once('model.php');
    class Tour extends Model
    {
        var $table = 'tour_some_info';
        var $contens = 'id';
        public function get_all_tour()
        {
            // $sql = "SELECT t.id, cd.tenchude, t.image, t.time, t.locate, t.price, t.sale, t.trangthai, (SELECT ti.tentinh FROM tinh AS ti WHERE t.start_locate = ti.matinh) AS start_locate, (SELECT ti.tentinh FROM tinh AS  ti WHERE t.end_locate = ti.matinh) AS end_locate FROM tour_some_info AS t, chu_de_tour AS cd WHERE t.id_chude = cd.machude;";
            $sql = "SELECT t.id, cd.tenchude, t.time, t.locate, t.price, t.sale, t.trangthai FROM tour_some_info AS t, chu_de_tour AS cd WHERE t.id_chude = cd.machude";
            require('result.php');
            return $data;
        }

        public function chitiettour($id)
        {
            $sql = "SELECT t.id, cd.tenchude, t.image, t.time, t.locate, t.price, t.sale, t.trangthai, (SELECT ti.tentinh FROM tinh AS ti WHERE t.start_locate = ti.matinh) AS start_locate, (SELECT ti.tentinh FROM tinh AS  ti WHERE t.end_locate = ti.matinh) 
            AS end_locate, dt.* FROM tour_some_info AS t, chu_de_tour AS cd, info_details AS dt WHERE t.id_chude = cd.machude AND t.id = '$id' AND t.id = dt.id";
            require('result.php');
            return $data;
        }

        public function getSalePrice($id)
        {
            $sql = "SELECT price_sale, percent_sale FROM tour_sale WHERE t_id = '$id'";
            require('result.php');
            return $data;
        }

        public function getAllChude()
        {
            $sql = "SELECT * FROM chu_de_tour";
            require('result.php');
            return $data;
        }

        public function get_info_tour($id)
        {
            $sql = "SELECT * FROM tour_some_info WHERE id = '$id'";
            require('result.php');
            return $data;
        }

        public function getAllTinh()
        {
            $sql = "SELECT * FROM tinh";
            require('result.php');
            return $data;
        }

        public function get_tour_sale()
        {
            $sql = "SELECT * FROM tour_sale";
            require('result.php');
            return $data;
        }

        public function storeSale($data)
        {
            $f = "";
            $v = "";
            foreach ($data as $key => $value) {
                $f .= $key . ",";
                $v .= "'" . $value . "',";
            }
            $f = trim($f, ",");
            $v = trim($v, ",");
            $query = "INSERT INTO tour_sale($f) VALUES ($v)";
           
            $status = $this->conn->query($query);
        }

        public function updateSale($data)
        {
            $v = "";
            foreach ($data as $key => $value) {
                $v .= $key . "='" . $value . "',";
            }
            $v = trim($v, ",");


            $query = "UPDATE tour_sale SET $v WHERE t_id = '" . $data['t_id'] . "'";

            $result = $this->conn->query($query);
        }

        public function delSale($id)
        {
            $query = "DELETE from tour_sale where t_id='$id'";
            $this->conn->query($query);
        }

        function updateTour($data)
        {
            $v = "";
            foreach ($data as $key => $value) {
                $v .= $key . "='" . $value . "',";
            }
            $v = trim($v, ",");


            $query = "UPDATE tour_some_info SET  $v   WHERE id = '" . $data['id'] . "'";

            $result = $this->conn->query($query);
            
            if ($result == true) {
                setcookie('msg', 'Cập nhật thành công', time() + 2);
            } else {
                setcookie('msg', 'Cập nhật không thành công', time() + 2);
            }
        }

        public function delTour($id)
        {
            $sql = "DELETE FROM tour_some_info WHERE id = '$id'";
            $result = $this->conn->query($sql);
            if ($result == true) {
                setcookie('msg', 'Xóa thành công', time() + 2);
            } else {
                setcookie('msg', 'Xóa không thành công', time() + 2);
            }
        }
    }
?>