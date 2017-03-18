<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert suoerhero</title>
</head>
<body>
<header>
    <h1>The Super-Superhero System</h1>
    <h2>Display all battles</h2>
    <p><a href="index.php">Return to home....</a></p>
</header>
<main>
    <?php
    include("db_connect.php");

    if(isset($_GET['id'])) {
        $superheroID = $_GET['id'];
        $sql_query = "SELECT * FROM superherobattles where superheroID = '$superheroID'";
    }
    else {
        $sql_query = "SELECT * FROM superherobattles";
    }
        $result = $link->query($sql_query);
        while($row = $result->fetch_array())
        {
            $firstname = $row['firstName'];
            $lastname = $row['lastName'];
            $mainSuperpower = $row['mainSuper'];
            $villanFought = $row['villanfought'];
            echo "<article>
            <p> The Superhero known as <strong>{$firstname} {$lastname}</strong> recently fought <strong>{$villanFought}</strong> using
            <strong>{$mainSuperpower}</strong></p>";
        }
    ?>
</main>

</body>
</html>