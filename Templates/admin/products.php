<!DOCTYPE html>
<html>

<?php
include_once('defaults/head.php');
global $pdo;
global $products;
global $product;
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>

        body {
            background-color: rgb(84, 88, 91)
        }

    </style>

</head>

<body>
<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>

    <div class="container">
        <div class="d-flex bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <a type="button" href="addProduct" role="button" class="btn btn-success">Add</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Afbeelding</th>
                    <th scope="col">Naam</th>
                    <th scope="col">Categorie</th>
                    <th scope="col">Verwijderen</th>
                </tr>
                </thead>
                <tbody id="mytable">
                <?php
                $number = 1;
                foreach ($products as $product) {
                    ?>
                    <tr>
                        <td><?=$number?></td>
                        <td scrope="col"><img class="img-fluid center-block" width="100px" src='/img/<?= $product->picture ?>'/></td>
                        <td scrope="col"><?=$product->name?></td>
                        <td scrope="col"><?=getCategoryName($product->category_id)?></td>
                        <td scrope="col"><a class="btn btn-danger btn-sm px-4" href="/admin/deleteProduct/<?=$product->id?>">Delete</a></td>
                    </tr>
                    <?php
                    $number++;
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

    <hr>

    <?php
    include_once('defaults/footer.php');
    ?>

    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</div>
</body>
</html>