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
    global $product;
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Sportcenter</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
            <li class="breadcrumb-item"><a href="/product">Products</a></li>
            <li class="breadcrumb-item"><a href="/product">Product</a></li>
        </ol>
    </nav>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="card-body text-center">
            <h5 class="card-title"><?= $product->name ?></h5>
            <img class="img-fluid center-block" width="300px" src='/img/<?= $product->picture ?>'/>
            <div class="card-body">
                <h5 class="card-text"><?= $product->description ?></h5>
            </div>
        </div>
    </div>
</div>


<hr>
<?php
include_once('defaults/footer.php');

?>

</body>
</html>
</html>