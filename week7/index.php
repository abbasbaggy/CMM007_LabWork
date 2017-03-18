<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superhero System</title>
</head>
<body>
<header>
    <h1>The Super-Superhero System</h1>
    <h2>Superhero Home page</h2>
</header>
<p>what would you like to do</p>
<ul>
    <li><a href="Superheroform.html">Insert a superhero</a></li>
    <li><a href="dispalysuperheros.php">Display all superheros</a></li>
    <li><a href="battle.php">Insert a battle</a></li>
    <li><a href="displaybattles.php">Display all battles</a></li>
</ul>
<ul>
<?php
include ("db_connect.php");
$sql_query = "SELECT * FROM superheros";
$result = $link->query($sql_query);
while($row = $result->fetch_array())
{
    $firstname = $row['firstName'];
    $lastname = $row['lastName'];
    $id = $row ['superheroID'];
    echo "<li> <a href='displayBattles.php?id={$id}'>Battle for{$firstname} {$lastname}</a>";
}
?>
</ul>
</body>
</html>


