<?php

function getContact(): array
{
    global $pdo;

    $sth = $pdo->prepare('SELECT * FROM opening_hours');
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS, 'Contact');
}