<?php

function getReviews():array
{
    GLOBAL $pdo;
    $sth=$pdo->prepare('SELECT * FROM review order by date DESC');
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS, 'Review');
}
    
function saveReview(string $name, string $description):void
{
        GLOBAL $pdo;

        $sth = $pdo->prepare('INSERT INTO review (name, description, date) VALUES (?,?,current_timestamp())');
        $sth->bindParam(1, $name);
        $sth->bindParam(2, $description);
        $sth->execute();
}