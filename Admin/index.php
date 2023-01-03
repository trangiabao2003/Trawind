<?php
session_start();
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'VNĐ') {
        if (!empty($number)) {
            return number_format($number, 0, '.', ',') . "{$suffix}";
        }
    }
}  
$mod = isset($_GET['act']) ? $_GET['act'] : "login";
if (!isset($_SESSION['loginAdmin']))
{
    $mod = 'login';
}
switch ($mod) {
    case 'dashboard':
        require_once('Controllers/dashboardController.php');
        $controller_obj = new dashboardController();
        $controller_obj->admin();
        break;
    case 'login':
        $xuli = isset($_GET['xuli']) ? $_GET['xuli'] : 'uilogin';
        switch ($xuli) {
            case 'uilogin':
                require_once('Views/login/index.php');
                break;
            case 'login':
                require_once('./Controllers/accountController.php');
                $controller_obj = new accountController();
                $controller_obj->login();
                break;
        }
        break;
    case 'logout':
        require_once('./Controllers/accountController.php');
        $controller_obj = new accountController();
        $controller_obj->logout();
        break;
    case 'chudetour':
        $xuli = isset($_GET['xuli']) ? $_GET['xuli'] : 'list';
        require_once('Controllers/chudetourController.php');
        $controller_obj = new chudetourController();
        switch ($xuli) {
            case 'list':
                $controller_obj->list();
                break;
            case 'add':
                $controller_obj->add();
                break;
            case 'store':
                $controller_obj->store();
                break;
            
            case 'delete':
                $controller_obj->delete();
                break;
            case 'edit':
                $controller_obj->edit();
                break;
            case 'update':
                $controller_obj->update();
                break;
            default:
                $controller_obj->list();
                break;
        }
        break;
    case 'account':
        $xuli = isset($_GET['xuli']) ? $_GET['xuli'] : 'list';
        require_once('Controllers/accountController.php');
        $controller_obj = new accountController();
        switch ($xuli) {
            case 'list':
                $controller_obj->list();
                break;
            case 'add':
                $controller_obj->add();
                break;
            case 'store':
                $controller_obj->store();
                break;
                case 'edit':
                    $controller_obj->store();
                    break;
            
            case 'delete':
                $controller_obj->delete();
                break;
            default:
                $controller_obj->list();
                break;
        }
        break;
    case 'tour':
        require_once('Controllers/tourController.php');
        $controller_obj = new tourController();
        $xuli = isset($_GET['xuli']) ? $_GET['xuli'] : 'all';
        switch ($xuli)
        {
            case 'all':
                $controller_obj->get_all_tour();
                break;
            case 'chitiet':
                $controller_obj->get_tour();
                break;
            case 'edit':
                $controller_obj->modifyTour();
                break;
            case 'update':
                $controller_obj->update();
                break;
            case 'add':
                $controller_obj->add();
                break;
            case 'store':
                $controller_obj->add_tour();
                break;
            case 'delete':
                $controller_obj->delete();
                break;
        }
        break;
        case 'hoadon':
            require_once('Controllers/hoadoncontroller.php');
            $controller_obj = new HoaDonController();
            $xuli = $_GET['xuli'];
            switch ($xuli) {
                case 'all':
                    $controller_obj->getAll();
                    break;
                case 'chitiet':
                    $controller_obj->chitiet();
                    break;
                case 'xetduyet':
                    $controller_obj->xetduyet();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
            }
            break;
        case 'chitiettour':
            require_once('Controllers/chitiettourcontroller.php');
            $controller_obj = new ChiTietTourController();
            $xuli = $_GET['xuli'];
            switch ($xuli) {
                case 'all':
                    $controller_obj->getAll();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                case 'chitiet':
                    $controller_obj->get_chitiet();
                    break;
                case 'themtour':
                    $controller_obj->add_tour();
                    break;
                case 'add':
                    $controller_obj->store();
                    break;
            }
            break;
        case 'tinh':
            $xuli = $_GET['xuli'];
            require_once('Controllers/tinhController.php');
            $controller_obj = new TinhController();
            switch ($xuli) {
                case 'all':
                    $controller_obj->get_all_tinh();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                case 'chitiet':
                    $controller_obj->get_tinh();
                    break;
                case 'themtinh':
                    $controller_obj->show_tinh();
                    break;
                case 'add':
                    $controller_obj->store();
                    break;
            }
            break;
//     default:
//         require_once('Controllers/HomeController.php');
//         $controller_obj = new Homecontroller();
//         $controller_obj->get_data();
//         break;
}
