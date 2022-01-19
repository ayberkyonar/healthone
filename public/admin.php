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
            $products = getAllProducts();
            include_once "../Templates/admin/products.php";
            break;

        case 'addProduct':
            addProduct($_GET['id']);
            header("location:/admin/addProduct");
            break;

        case 'deleteProduct':
            //$product = getProduct($_GET['id']);
            //unlink('img/'.$product->picture);
            deleteProduct($_GET['id']);
            header("location:/admin/products");
            break;

        default:
            include_once "../Templates/admin/home.php";
            break;
    }

}