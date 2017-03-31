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
</head>
<body>
<div class="form">
    <p>Tailoring Design</p>
    <p><a href="index.php">Home</a></p>
    <p><a href="insert.php">Insert New Records</a></p>
    <p><a href="view.php">View Records</a></p>
    <p><a href="logout.php">Logout</a></p>


</div>
</body>
</html>
