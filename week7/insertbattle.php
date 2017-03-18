<?php
/**
 * Created by PhpStorm.
 * User: Abbas
 * Date: 3/17/2017
 * Time: 5:35 PM
 */
include ("db_connect.php");

$superheroID = $_POST["superhero"];
$villan = $_POST["villan"];

$sql_query ="INSERT INTO battles (superheroID, villanfought) VALUES ('$superheroID', '$villan')";

if (mysqli_query($link, $sql_query)) {

} else{
    echo "Error: ". $sql_query . "<br>" . mysqli_error($link);
}
header("loaction:index.php");