<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getProducts(int $categoryId)
{
    global $pdo;
    $sth = $pdo->prepare('Select * FROM product WHERE category_id=?');
    $sth-> bindParam(1,$categoryId,PDO::PARAM_INT);
    $sth->execute();
    $products=$sth->fetchAll(PDO::FETCH_CLASS,'Product');
    return $products;
}

function getProduct(int $productId)
{

}
