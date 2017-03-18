<?php
/**
 * Created by PhpStorm.
 * User: Abbas
 * Date: 3/15/2017
 * Time: 8:54 AM
 */
include("db_connect.php");

// create a SQL query as a string
$sql_query = "SELECT * FROM marvelmovies";
// execute the SQL query
$result=mysqli_query($link,$sql_query);


// iterate over $result object one $row at a time
// use fetch_array() to return an associative array
while($row = $result->fetch_array()){
// process the $row
    $movieTitle =$row['notes'];
    echo "<p>" .$movieTitle. "</p>";
}