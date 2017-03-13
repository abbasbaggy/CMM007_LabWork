<?php
/**
 * Created by PhpStorm.
 * User: 1600153
 * Date: 07/03/2017
 * Time: 16:27
 */
include("db_connect.php");

// create a SQL query as a string

// execute the SQL query
$result=mysqli_query($db,$sql_query);


// iterate over $result object one $row at a time
// use fetch_array() to return an associative array
while($row = $result->fetch_array()){
// process the $row
    $movieTitle =$row['title'];
    echo "<p>" .$movieTitle. "</p>";
}



