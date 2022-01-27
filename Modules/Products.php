<?php
function getProducts(int $categoryId)
{
    global $pdo;
    $sth = $pdo->prepare('Select * FROM product WHERE category_id=?');
    $sth-> bindParam(1,$categoryId,PDO::PARAM_INT);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS,'Product');
}

function getProduct(int $productId)
{
    global $pdo;
    $sth = $pdo->prepare('Select * FROM product WHERE id =?');
    $sth-> bindParam(1,$productId, PDO::PARAM_INT);
    $sth->setFetchMode(PDO::FETCH_CLASS,'Product');
    $sth->execute();
    return $sth->fetch();
}

function getAllProducts() :array {
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM product ORDER BY category_id');
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS, 'Product');
}

function deleteProduct(int $productID)
{
    global $pdo;
    $id = filter_var($productID, FILTER_VALIDATE_INT);
    if ($id !== false) {
        $stmnt = $pdo->prepare('DELETE FROM product WHERE id=:id');
        $stmnt->bindParam(':id', $id);
        $stmnt->execute();
    }
}

function addProduct(int $productID)
{
    global $pdo;
    $id = filter_var($productID, FILTER_VALIDATE_INT);
    if ($id !== false) {
        $stmnt = $pdo->prepare("INSERT INTO product (name, picture,description,category_id) VALUES (:name,:picture,:description,:category_id)");
        $stmnt->bindParam(':id', $id);
        $stmnt->execute();
    }
}