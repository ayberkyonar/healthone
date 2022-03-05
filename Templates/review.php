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

    global $product, $categoryId, $name, $reviews;
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
            <li class="breadcrumb-item"><a href="/review/<?= $product->id ?>">Review</a></li>

        </ol>
    </nav>

<div class="container">
    <div class="col-md-12">
        <div class="card-body text-center">
            <h5 class="card-title"><?= $product->name ?></h5>
            <img class="img-fluid center-block" width="300px" src='/img/<?= $product->picture ?>'/>
            <p class="card-text" style="justify-content: center"><?= $product->description ?></p>
        </div>
    </div>

    <div class="row gy-3">
        <form method="post">
            <div class="mb-3">
                <label for="bericht" class="col-form-label">
                    Bericht
                </label>
                <input type="text" name="description" class="form-control" id="description">
            </div>
            <div class="mb-3">
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Waardering</label>
                <select name="stars"">
                    <option value="1"> 1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="submit" name="verzenden" class="btn btn-primary">Add Review</button>
            </div>
        </form>
    </div>

    </div>

<hr>
<?php
include_once('defaults/footer.php');

?>

</body>
</html>
</html>