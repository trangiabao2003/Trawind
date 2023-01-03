<?php
$act = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($act) {
    case "home":
        require_once("home/home.php");
        break;
    case "dltn":
        require_once("dltn/dltn.php");
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
        require_once("tours/tour_search.php");
        break;
    case "tinh":
        require_once("tours/tour_tinh.php");
        break;
    case "contact":
        require_once("introduce/contact.php");
        break;
    case "cart":
        require_once("cart/cart.php");
        break;
    case "taikhoan":
        $act = isset($_GET['xuli']);
        if (isset($_SESSION['is_login']) && $_SESSION['is_login'] == true) 
        {
            switch ($act) 
            {
                case 'tttk':
                    require_once("account/profile.php");
                    break;
                default:
                    require_once("account/profile.php");
                    break;
            }
        }
    default:
        break;
}
