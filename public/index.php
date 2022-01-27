<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Database.php';
require '../Modules/Reviews.php';
require '../Modules/Login.php';
session_start();

$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";

switch ($params[1]) {
    case 'categories':
        $titleSuffix = ' | Categories';
        $categories = getCategories();

        include_once "../Templates/categories.php";
        break;

    case 'category':
        $titleSuffix = ' | Category';
        if (isset($_GET['id'])) {
            $categoryId = $_GET['id'];
            $products = getProducts($categoryId);
            $name = getCategoryName($categoryId);
            include_once "../Templates/products.php";
        } else {
            $titleSuffix = ' | Home';
            include_once "../Templates/categories.php";
        }
        break;

    case 'product':
        if (isset($_GET['id'])) {
            $productId = $_GET['id'];
            $product = getProduct($productId);
            $name = getCategoryName($product->category_id);
            $titleSuffix = '|' . $product->name;
            $reviews = getReviews($productId);
            include_once "../Templates/product.php";
        }
        else {
            $titleSuffix = '| Home';
            include_once "../Templates/home.php";
        }
        break;

    case 'suggestion':
        if(isset($_GET['id'])) {
            if(isset($_POST['verzenden'])) {
                //var_dump($_POST);
                $name = $_POST['name'];
                $suggestion = $_POST['suggestion'];
                saveReview($name,$suggestion);
            } else {
                include_once "../Templates/suggestion.php";
            }
        } else {
            include_once "../Templates/home.php";
        }
        break;

    case 'login':
        $titleSuffix = ' | Login';
        if (isset($_POST['login'])) {
            $result = checkLogin();
            switch ($result) {
                case 'ADMIN':
                    header("Location: /admin/products");
                    break;

                case 'MEMBER':
                    break;

                case 'FAILURE':
                    $message = "Email of password niet correct ingevuld!";
                    include_once "../Templates/login.php";
                    break;

                case 'INCOMPLETE':
                    $message = "Formulier niet volledig ingevuld!";
                    include_once "../Templates/login.php";
                    break;
            }
        }
        else {
            include_once "../Templates/login.php";
        }
        break;

    case 'admin':
        include_once ('admin.php');
        break;

    case 'logout':
        $_SESSION=[];
        include_once "../Templates/home.php";
        break;

    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
        break;

}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}