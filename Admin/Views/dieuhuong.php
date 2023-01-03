<?php
$act = isset($_GET['act']) ? $_GET['act'] : "dashboard";
switch ($act) {
    case "dashboard":
        require_once("dashboard/dashboard.php");
        break;
    case "order":
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : '';
        switch ($act) {
            case 'thongtinkhachhang':
                require_once("order/thongtinkhachhang.php");
                break;
            case 'thanhtoan':
                require_once("order/thanhtoan.php");
                break;
            case 'thongtindonhang':
                require_once("order/thongtindonhang.php");
                break;
            default:
                require_once("order/thanhtoan.php");
                break;
        }
        break;
    case "detail":
        require_once("detail/detail.php");
        break;
    case "tour":
        $xuli = isset($_GET['xuli']) ? $_GET['xuli'] : 'all';
        switch ($xuli)
        {
            case 'all':
                require_once("tour/list.php");
                break;
            case 'chitiet':
                require_once("tour/chitiet.php");
                break;
            case 'edit':
                require_once("tour/sua.php");
                break;
            case 'add':
                require_once("tour/add.php");
                break;
        }
        break;
    case "hoadon":
        $xuli = $_GET['xuli'];
        switch ($xuli) {
            case 'all':
                require_once('hoadon/donhang.php');
                break;
            case 'chitiet':
                require_once('hoadon/thongtindonhang.php');
                break;
        }

        break;
    case "chitiettour":
        $xuli = $_GET['xuli'];
        switch ($xuli) {
            case 'all':
                require_once('chitiettour/chitiettour.php');
                break;
            case 'chitiet':
                require_once('chitiettour/update.php');
                break;
            case 'themtour':
                require_once('chitiettour/add.php');
                break;
        }
        break;
    case "tinh":
        $xuli = $_GET['xuli'];
        switch ($xuli) {
            case 'all':
                require_once("tinh/list.php");
                break;
            case 'chitiet':
                require_once('tinh/update.php');
                break;
            case 'themtinh':
                require_once('tinh/add.php');
                break;
        }
        break;
    case 'chudetour':
        $xuli = isset($_GET['xuli']) ? $_GET['xuli'] : 'list';
        switch ($xuli) {
                case 'list':
                require_once('Views/chudetour/list.php');
                break;
                case 'add':
                require_once('Views/chudetour/add.php');
                break;
            
                case 'edit':
                require_once('Views/chudetour/edit.php');
                break;
                default:
                require_once('Views/chudetour/list.php');
                break;
            }
            break;
    case 'account':
    $xuli = isset($_GET['xuli']) ? $_GET['xuli'] : 'list';
    switch ($xuli) {
        case 'list':
            require_once('Views/account/list.php');
            break;
        case 'add':
            require_once('Views/account/add.php');
            break;
        
        default:
            require_once('Views/account/list.php');
                break;
    }
    break;
    default:
        break;
}
