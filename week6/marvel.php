<?php
/**
 * Created by PhpStorm.
 * User: 1600153
 * Date: 07/03/2017
 * Time: 16:27
 */
include ('db_connect.php');

// create a SQL query as a string
$sql_query = "SELECT * FROM localdb.marvelmovies";
// execute the SQL query
$result = $db->query($sql_query);

// iterate over $result object one $row at a time
// use fetch_array() to return an associative array
while($row = $result->fetch_array()){
// process the $row
}

while($row = $result->fetch_array()){
    // print out fields from row of data
    echo "<p>” . $row{'marvelMovies'} . “</p>";
}

$result->close();
// close connection to database
$db->close();