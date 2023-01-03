<?php
    require_once('../Models/sale.php');
    class saleController
    {
        var $sale_model;
        public function __construct()
        {
            $this->sale_model = new Sale();
        }

        public function get_all_sale()
        {
            $data = array();
            $data = $this->sale_model->All();
        }

        public function add_sale()
        {
            $data = array(
                't_id' => $_POST['t_id'],
                'price_sale' => $_POST['price_sale'],
                'percent_sale' => $_POST['percent_sale']
            );
            foreach ($data as $key => $value) {
                if (strpos($value, "'") != false) {
                    $value = str_replace("'", "\'", $value);
                    $data[$key] = $value;
                }
            }
            $this->sale_model->store($data);
        }

        public function get_list_tour_sale()
        {
            $list = array();
            $list = $this->sale_model->get_tour_sale();
        }
    }
?>