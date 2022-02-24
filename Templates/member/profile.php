<!DOCTYPE html>
<html>
<?php
include_once ('defaults/head.php');
?>
<body>
<div class="container">
<?php
include_once ('defaults/header.php');
include_once ('defaults/menu.php');
include_once ('defaults/pictures.php');
?>
</div>

<div class="container">
<table class="table align-middle">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Email</td>
        <td><?=$_SESSION['user']->email?></td>
    </tr>
    <tr>
        <td>Voornaam</td>
        <td><?=$_SESSION['user']->first_name?></td>
    </tr>
    <tr>
        <td>Achternaam</td>
        <td><?=$_SESSION['user']->last_name?></td>
    </tr>
    </tbody>
</table>
<a type="button" class="btn-success btn-sm px-3" href="/member/editprofile">Profiel aanpassen</a>
<a type="button" class="btn-danger btn-sm px-3" href="/member/changepassword">Wachtwoord aanpassen</a>

<hr>
<?php include_once ('defaults/footer.php');
?>
</div>
</body>
</html>