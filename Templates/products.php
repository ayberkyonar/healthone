<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>

<div class="container">
    <?php
    include_once('defaults/header.php');

    if (isMember()){
        include_once('member/defaults/menu.php');
    }
    else {
        include_once ('defaults/menu.php');
    }

    include_once('defaults/pictures.php');


    global $products, $product, $categoryId;
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <?php
            if (isMember()){ ?>
                <li class="breadcrumb-item"><a href="/member/home">Home</a></li>
                <?php
            }else { ?>
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <?php
            }
            ?>

            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
            <li class="breadcrumb-item"><a href="/category/<?= $categoryId ?>">Products</a></li>

        </ol>
    </nav>

<div class="row gy-3 ">

    <?php global $products, $name ?>
    <?php foreach ($products as $product):?>
        <div class="col-sm-6 col-md-2">
            <div class="card">
                <div class="card-body text-center">
                    <a href="/product/<?= $product->id ?>">
                        <img class="product-img img-responsive center-block" src='/img/<?= $product->picture ?>'/>

                    </a>
                    <div class="card-title mb-3"><?= $product->name ?>
                    </div>
                </div>
            </div>

        </div>
    <?php endforeach;?>
    </div>
    <hr>

    <?php
    include_once('defaults/footer.php');

    ?>


</body>
</html>
</html>