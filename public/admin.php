<?php
global $params;

if (!isAdmin()) {
    //logout();
    header ( "location:/home");
    } else {
    switch ($params[2]) {

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
            include_once "../Templates/admin/editProduct.php";
            break;


        default:
            include_once "../Templates/admin/home.php";
            break;
    }

}