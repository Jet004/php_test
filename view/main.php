<?php

if(isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'home': require_once $_SERVER['DOCUMENT_ROOT'].'/view/home.php';
        break;
        case 'login': require_once $_SERVER['DOCUMENT_ROOT'].'/view/login.php';
        break;
        case 'register': require_once $_SERVER['DOCUMENT_ROOT'].'/view/register.php';
        break;
        default: require_once $_SERVER['DOCUMENT_ROOT'].'/view/home.php';
    }
}
?>