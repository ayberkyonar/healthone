<?php
function getReviews():array
{
    GLOBAL $pdo;

    $sth=$pdo->prepare('SELECT * FROM review order by date DESC');
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS, 'Review');
}

function saveReview(string $name, string $suggestion):void
{
    GLOBAL $pdo;

    $sth = $pdo->prepare('INSERT INTO review (name, suggestion) VALUES (:n,:s)');
    $sth->bindParam("n", $name);
    $sth->bindParam("s", $suggestion);
    $sth->execute();
}