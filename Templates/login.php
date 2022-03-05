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
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/login">Login</a></li>
        </ol>
    </nav>

    <?php if (!empty($message)): ?>
        <div class="alert alert-secondary" role="alert">
            <?=$message?>
        </div>
    <?php endif;?>

        <div class="row gy-3">
            <form method="POST">
                <div class="mb-3">
                    <label for="email" class="col-form-label">
                        Email
                    </label>
                    <input type="text" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="col-form-label">
                        Wachtwoord
                    </label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="modal-footer">
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
<hr>

<?php
include_once('defaults/footer.php');
?>

</div>

</body>
</html>
</html>