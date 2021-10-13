<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>

<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">sportcenter</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
        </ol>
    </nav>

</div>
<div class="row gy-3 ">

    <?php global $products, $name ?>
    <?php foreach ($products as $product):?>
        <div class="col-sm-4 col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <a href="/categories/<?= $product->category_id ?>/product/><?= $product->id ?>">
                        <img class="product-img img-responsive center-block" src='/img/categories/<?= $name?>/<?= $product->picture ?>'/>

                    </a>
                    <div class="card-title mb-3"><?= $product->name ?>
                    </div>
                </div>
            </div>

        </div>
    <?php endforeach;?>
    <hr>
    <?php
    include_once('defaults/footer.php');

    ?>

</body>
</html>
</html>