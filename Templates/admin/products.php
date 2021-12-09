<!DOCTYPE html>
<html>

<?php
include_once('defaults/head.php');
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<style>

    body {
        background-color: rgb(84, 88, 91)
    }

    .header-row {
        margin-top: 50px
    }

</style>

<body>
<div class="container">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    ?>

    <div class="container">
        <div class="d-flex bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-success" onclick="showUserCreateBox()">Add</button>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Afbeelding</th>
                    <th scope="col">Naam</th>
                    <th scope="col">Category</th>
                    <th scope="col">Aanpassen</th>
                    <th scope="col">Verwijderen</th>
                </tr>
                </thead>
                <tbody id="mytable">
                <tr>
                    <th scope="col"> 1</th>
                    <th scope="col">Pic</th>
                    <th scope="col">Name</th>
                    <th scope="col">Crosstrainer</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <hr>

    <?php
    include_once ('defaults/footer.php');
    ?>

    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</div>
</body>
</html>