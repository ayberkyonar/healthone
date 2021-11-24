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

<div class="container">
    <div class="col-md-12">
        <div class="card-body text-center">
            <h5 class="card-title"><?= $product->name ?></h5>
            <img class="img-fluid center-block" width="300px" src='/img/<?= $product->picture ?>'/>
            <p class="card-text" style="justify-content: center"><?= $product->description ?></p>
            <a type="button" href="/review/<?=$product->id?>" role="button" class="btn btn-secondary">Add Review</a>
        </div>
    </div>


    <div class="container">
    <div class="row gy-3">
        <form method="post">
            <div class="mb-3">
                <label for="naam" class="col-form-label">
                    Naam:
                </label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="bericht" class="col-form-label">
                    Bericht:
                </label>
                <input type="text" name="description" class="form-control" id="description">
            </div>
            <div class="mb-3">
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Waardering:</label>
                <select class="custom-select mr-sm-2" name="stars" id="inlineFormCustomSelect">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="submit" name="verzenden" class="btn btn-secondary">Save Change</button>
            </div>
        </form>
    </div>

<?php
    try {
        $db = new PDO("mysql:host=localhost;dbname=healthone","root", "");
        $query = $db->prepare('SELECT * FROM review where product_id =' . $product->id);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $data) {
            echo $data ["name"] . " <br>  ";
            echo $data ["description"] . " <br> ";
            echo $data ["date"] . " <br> <br> ";
        }
        echo "</table>";
    } catch(PDOException $e) {
        die("Error!: " . $e->getMessage());
    }
    ?>
    </div>

</body>
</html>
<hr>
<?php
include_once('defaults/footer.php');

?>

</body>
</html>
</html>