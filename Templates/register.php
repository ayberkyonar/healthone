<!DOCTYPE html>
    <html>
    <?php
    include_once('defaults/head.php');
    ?>
    <body>
        <div class="container">

            <?php
            include_once ('defaults/header.php');
            include_once ('defaults/menu.php');
            include_once ('defaults/pictures.php');
            include_once ('../Modules/Register.php');
            ?>

            <form method="POST" action="/register">
                <div class="mb-3">
                    <label for="name" class="form-label">Voornaam</label>
                    <input type="text" class="form-control" id="first_name" name="firstName">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Achternaam</label>
                    <input type="text" class="form-control" id="last_name" name="lastName">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>

            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>
