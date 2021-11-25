<?php

if(isset($_GET['action_user']))
    $action_user = $_GET['action_user'];
else
    $action_user = 'home';


switch($action_user){

    case 'home':
        $view_page_user = '../view/user/dashboard.php';
        $main = '../view/user/header_user.php';
        include_once '../view/header.php';
        break;

    case 'change-profile':
        $view_page_user = '../view/user/account-profile.php';
        $main = '../view/user/header_user.php';
        include_once '../view/header.php';
        break;

    default:
        echo "Không hiểu thao tác của bạn?.";
        break;
}