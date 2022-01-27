<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>

<div class="container">
    <?php
    include_once('defaults/menu.php');
    ?>

    <div class="container">
        <div class="row gy-3">
            <form method="post">
                <div class="mb-3">
                    <label for="name" class="col-form-label">
                        Naam:
                    </label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="col-form-label">
                        Beschrijving:
                    </label>
                    <input type="text" name="description" class="form-control" id="description">
                </div>
                <div class="mb-3">
                    <label for="category_id" class="col-form-label">
                        Categorie:
                    </label>
                <?php
                try {
                $db = new PDO("mysql:host=localhost;dbname=healthone","root", "");
                $query = $db->prepare ("SELECT * FROM category");
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);

                ?>

                    <select list="category_id" name="category_id">
                </div>
                        <?php

                        foreach ($result as $data) {
                            echo "<option name='category_id' value=' ". $data['id'] . " '>" . $data['name'] . "</option>";
                        }
                        ?>
                    </select>

                <?php
                if(isset($_POST['verzenden'])){
                    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
                    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
                    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_SANITIZE_STRING);

                    $db = new PDO("mysql:host=localhost;dbname=healthone","root", "");
                    $query = $db->prepare ("INSERT INTO product(name, description, category_id) values (:name,:description,:category_id)");
                    $query->bindParam("name", $name);
                    $query->bindParam("description", $description);
                    $query->bindParam("category_id", $category_id);
                    if ($query->execute()) {
                        echo "Toegevoegd";
                    }
                    else {
                        echo "Mislukt";
                    }
                }

                } catch(PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                }
                ?>

                <div class="modal-footer">
                    <button type="submit" name="verzenden" class="btn btn-secondary">Add</button>
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