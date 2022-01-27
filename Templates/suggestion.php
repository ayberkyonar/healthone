<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>

    <?php
    include_once('defaults/menu.php');
    ?>


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
                <input type="text" name="suggestion" class="form-control" id="description">
            </div>
            <div class="modal-footer">
                <button type="submit" name="verzenden" class="btn btn-secondary">Verzenden</button>
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