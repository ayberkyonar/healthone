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
<table class="table align-middle table-hover">
    <br>
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

    <a type="button" class="btn btn-primary" href="/member/editprofile">Edit Profile</a>
    <a type="button" class="btn btn-secondary" href="/member/changepassword">Edit Password</a>

<hr>
<?php include_once ('defaults/footer.php');
?>
</div>
</body>
</html>