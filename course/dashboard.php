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
<body>
<header>
    <div class="navbar navbar-default navbar-static-top" role="navigation">
<div class="container">
    <p class="form">Tailoring Design</p>
<div class="navbar-header">
    <a class="navbar-brand" href="index.php">Home</a>
    <a class="navbar-brand" href="insert.php">Insert New Records</a>
    <a class="navbar-brand" href="view.php">View Records</a>
    <a class="navbar-brand" href="logout.php">Logout</a>
</div>

</div>
    </div>
</header>
</body>
</html>
