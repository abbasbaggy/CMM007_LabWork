<?php
/**
 * Created by PhpStorm.
 * User: Abbas
 * Date: 3/17/2017
 * Time: 4:11 PM
 */
include("db_connect.php");

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$superpower = $_POST["superpower"];

$sql_query = "INSERT INTO superheros (firstName, lastName, mainSuper) VALUES ('$firstname', '$lastname', '$superpower')";

if (mysqli_query($link, $sql_query)){
} else {
    echo "ERROR: ". $sql_query. "<br>" . mysqli_error($link);
}
header("location:index.php");