<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>

<div class="container">
    <?php
    include_once('defaults/header.php');

    if (isMember()) {
        include_once('member/defaults/menu.php');
    } else {
        include_once('defaults/menu.php');
    }

    include_once('defaults/pictures.php');

    global $product, $name, $reviews;
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
            <li class="breadcrumb-item"><a href="/category/<?= $product->category_id ?>">Products</a></li>
            <li class="breadcrumb-item"><a href="/product/<?= $product->id ?>"><?= $product->name?></a></li>

        </ol>
    </nav>

</div>

<div class="container">
    <div class="col-md-12">
        <div class="card-body text-center">
            <h5 class="card-title"><?= $product->name ?></h5>
            <img class="img-fluid center-block" width="300px" src='/img/<?= $product->picture ?>'/>
            <p class="card-text" style="justify-content: center"><?= $product->description ?></p>

            <?php
            if (isMember()) {
                ?><a type="button" href="/review/<?=$product->id?>" role="button" class="btn btn-primary">Review</a><?php
            }?>
        </div>
    </div>

    <hr>

<?php
    foreach ($reviews as $review) {
        echo "Naam: " . $review->name . " <br>  ";
        echo "Bericht: " . $review->description . " <br> ";
        echo "Waardering: " . $review->stars . " <br> ";
        echo $review->date  . " <br> <br> ";
    }
    echo "</table>";

?>

<hr>

<?php
include_once('defaults/footer.php');

?>
</div>
</body>
</html>
</html>