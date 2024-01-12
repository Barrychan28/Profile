<?php
session_start();
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone order</title>
    <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</head>
<body>
<nav>
<ul class="clientMenu">
        <li><a href="index.html">SmartPhone</a></li>
</ul>
<ul class="staffMenu">
    <?php 
    if ($_SESSION)
    {
        echo '
            <li style="margin-right:25px;"><a href="admin.php">All Oreders</a></li>
            <li><a href="validateForm.php?op=logout">Logout</a></li>';
    }
    else
    {
        echo '<li><a href="login.php">Login</a></li>';
    }
    ?>
</ul>
</nav>