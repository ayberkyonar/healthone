<?php
function changeProfile():bool
{
    global $pdo;

    $email=$_SESSION['user']->email;
    $firstName=filter_input(INPUT_POST, "firstName", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastName=filter_input(INPUT_POST, "lastName", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!empty($firstName) && !empty($lastName)) {

        $sth = $pdo->prepare('UPDATE `user` SET `first_name`=:f, `last_name`=:l WHERE `email`=:e');

        $sth->bindValue(":f", $firstName);
        $sth->bindValue(":l", $lastName);
        $sth->bindValue(":e", $email);
        $sth->execute();

        $_SESSION['user']->first_name=$firstName;
        $_SESSION['user']->last_name=$lastName;
        return true;
    } else {
        return false;
    }
}

function changePassword():bool
{
    global $pdo;

    $email=$_SESSION['user']->email;
    $password=filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

    if (!empty($password)) {

        $sth = $pdo->prepare('UPDATE `user` SET `password`=:p WHERE `email`=:e');

        $sth->bindValue(":p", $password);
        $sth->bindValue(":e", $email);
        $sth->execute();

        $_SESSION['user']->password=$password;
        return true;
    } else {
        return false;
    }
}

function isMember():bool
{
    if (isset($_SESSION['user'])&&!empty($_SESSION['user']))
    {
        $user=$_SESSION['user'];
        if ($user->role === "member")
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    return false;
}