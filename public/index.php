<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Database.php';
require '../Modules/Reviews.php';
require '../Modules/Register.php';
require '../Modules/Login.php';
require '../Modules/Contact.php';
require '../Modules/Member.php';
//require '../Modules/Logout.php';
//require '../Modules/Common.php';
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
            include_once "../Templates/home.php";
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

    case 'contact':
        $contact = getContact();
        include_once "../Templates/contact.php";
        break;

    case 'review':
        if(isset($_GET['id'])) {
            $productId=$_GET['id'];
            $product = getProduct($productId);
            if(isset($_POST['verzenden'])) {
                //var_dump($_POST);
                $name = $_SESSION['user']->first_name . " " . $_SESSION['user']->last_name;
                $description = $_POST['description'];
                $stars = $_POST['stars'];
                saveReview($name,$description,$stars,$productId);
                $reviews=getReviews($productId);
                include_once "../Templates/product.php";
            } else {
                include_once "../Templates/review.php";
            }
        } else {
            include_once "../Templates/home.php";
        }
        break;

    case 'register':
        $titleSuffix = ' | Register';

        if(isset($_POST['submit'])){
            $result = makeRegistration();
            switch ($result) {
                case 'SUCCESS':
                    header("Location: /home");
                    break;

                case 'INCOMPLETE':
                    $message="Niet alle velden zijn correct ingevuld!";
                    include_once "../Templates/register.php";
                    break;

                case 'EXIST':
                    $message = "Gebruiker bestaat al!";
                    include_once "../Templates/register.php";
            }
        } else {
            include_once "../Templates/register.php";
        }
        break;

    case 'login':
        $titleSuffix = ' | Login';
        if (isset($_POST['login'])) {
            $result = checkLogin();
            switch ($result) {
                case 'ADMIN':
                    header("Location: /admin/home");
                    //include_once "../Templates/admin/home.php"
                    break;

                case 'MEMBER':
                    header("Location: /member/home");
                    break;

                case 'FAILURE':
                    $message = "Email of wachtwoord niet correct ingevuld!";
                    include_once "../Templates/login.php";
                    break;

                case 'INCOMPLETE':
                    $message = "Niet alle velden zijn correct ingevuld!";
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

    case 'member':
        include_once ('member.php');
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