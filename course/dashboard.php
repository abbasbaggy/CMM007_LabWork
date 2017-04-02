<?php
/**
 * Created by PhpStorm.
 * User: Abbas
 * Date: 3/30/2017
 * Time: 3:02 PM
 */

/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/

require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Exclusive fashion- ur logged in</title>
    <link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<header>
<div class="form">
    <p>Tailoring Design</p>
    <p><a href="index.php">Home</a></p>
    <p><a href="insert.php">Insert New Records</a></p>
    <p><a href="view.php">View Records</a></p>
    <p><a href="logout.php">Logout</a></p>


</div>
</header>
</html>
