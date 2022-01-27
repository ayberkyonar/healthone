<?php
global $params;

if (!isAdmin()) {
    //logout();
    header ( "location:/home");
    } else {
    switch ($params[2]) {

        case 'home':
            include_once "../Templates/admin/products.php";
            break;

        case 'products':
            $products = getAllProducts();
            include_once "../Templates/admin/products.php";
            break;

        case 'addProduct':
            include_once "../Templates/admin/addProduct.php";
            break;

        case 'deleteProduct':
            //$product = getProduct($_GET['id']);
            //unlink('img/'.$product->picture);
            deleteProduct($_GET['id']);
            header("location:/admin/products");
            break;

        case 'editProduct':

        default:
            include_once "../Templates/admin/products.php";
            break;
    }

}