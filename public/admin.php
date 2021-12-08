<?php
global $params;

if (!isAdmin()) {
    //logout();
    header ( "location:/home");
    } else {
    switch ($params[2]) {

        case 'home':
            include_once "../Templates/admin/home.php";
            break;

        case 'products':
            include_once "../Templates/admin/products.php";
            break;

        case 'addProduct':

        case 'deleteProduct':

        default:
            include_once "../Templates/admin/home.php";
            break;
    }

}