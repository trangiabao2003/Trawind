<?php
session_start();
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'VNĐ') {
        if (!empty($number)) {
            return number_format($number, 0, '.', ',') . "{$suffix}";
        }
    }
}  
$mod = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($mod) {
    case 'home':
        require_once('Controllers/HomeController.php');
        $controller_obj = new HomeController();
        $controller_obj->get_data();
        break;
    case 'dltn':
        require_once('Controllers/DLTNController.php');
        $controller_obj = new DLTNController();
        $controller_obj->data();
        break;
    case 'tour':
        require_once('Controllers/ToursController.php');
        $controller_obj = new ToursController();
        $xuli = isset($_GET['xuli']) ? $_GET['xuli'] : 'data';
        switch ($xuli)
        {
            case 'data':
                $controller_obj->data();
                break;
            case 'danhgia':
                $controller_obj->danhgia();
                break;
        }
        break;
    case 'tinh':
        require_once('Controllers/TinhController.php');
        $controller_obj = new TinhController();
        $controller_obj->data();
        break;
    case 'order':
        $act = $_GET['xuli'];
        require_once('Controllers/OrderController.php');
        $controller_obj = new OrderController();
        switch ($act) 
        {
            case 'thongtinkhachhang':
                $controller_obj->detail();
                break;
            case 'dattour':
                $controller_obj->order();
                break;
            case 'thanhtoan':
                $controller_obj->detail_for_pay();
                break;
            case 'pay':
                $controller_obj->pay();
                break;
            case 'thongtindonhang':
                $controller_obj->ttdh();
                break;
            default:
                break;
        }
        break;
    case 'detail':
        require_once('Controllers/DetailsController.php');
        $controller_obj = new DetailsController();
        $controller_obj->data();
        break;
    case 'like-tour':
        require_once('Controllers/ChucnangController.php');
        $controller_obj = new ChucnangController();
        $controller_obj->like_tour();
        break;
    case 'taikhoan':
        $act = $_GET['xuli'];
        require_once('Controllers/AccountController.php');
        $controller_obj = new AccountController();
        if (isset($_SESSION['is_login']) && $_SESSION['is_login'] == true) 
        {
            switch ($act) {
                case 'dangxuat':
                    $controller_obj->logout();
                    break;
                case 'tttk':
                    $controller_obj->get_info_account();
                    break;
                case 'update':
                    $controller_obj->update_account();
                    break;
                default:
                    header('location: ?act=error');
                    break;
            } 
        } 
        else 
        {
            switch ($act) {
                case 'dangnhap':
                    $controller_obj->login();
                    break;
                case 'dangky':
                    $controller_obj->signup();
                    break;
            }
        }
        break;

    default:
        require_once('Controllers/HomeController.php');
        $controller_obj = new Homecontroller();
        $controller_obj->get_data();
        break;
}
