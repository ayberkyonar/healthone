<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>

    <?php
    include_once('defaults/menu.php');
    ?>

    <br>

    <div class="container">
<div class="row gy-3 ">
<?php global $categories ?>
<?php foreach ($categories as $category):?>
    <div class="col-sm-4 col-md-3">
        <div class="card">
            <div class="card-body text-center">
                <a href="/category/<?= $category->id ?>">
                    <img class="product-img img-responsive center-block" src='/img/<?= $category->picture ?>'/>

                </a>
                <div class="card-title mb-3"><?= $category->name ?>
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

</div>

</body>
</html>
</html>