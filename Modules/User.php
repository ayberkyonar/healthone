<?php
// Registreren
function setUser($name)
{
    if(isset($_POST['submit'])) {
        if($_POST['name'] && $_POST['email'] && $_POST['password']) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            global $pdo;
            return $pdo->query('INSERT INTO user (name, email, password) VALUES (`$name`, `$email`, `$password`)')->fetchAll(PDO::FETCH_CLASS, 'User');
        }
    }
}
// Inloggen
function getUser() {

}