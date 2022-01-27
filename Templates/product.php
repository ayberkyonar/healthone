<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>

    <?php
    include_once('defaults/menu.php');
    global $product, $name;
    ?>

<div class="container">
    <div class="col-md-12">
        <div class="card-body text-center">
            <h5 class="card-title"><?= $product->name ?></h5>
            <img class="img-fluid center-block" width="300px" src='/img/<?= $product->picture ?>'/>
            <p class="card-text" style="justify-content: center"><?= $product->description ?></p>
        </div>
    </div>

    <hr>

<?php
include_once('defaults/footer.php');

?>
</div>
</body>
</html>
</html>