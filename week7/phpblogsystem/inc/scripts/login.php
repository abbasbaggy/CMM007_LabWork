<?php
/**
 * Created by PhpStorm.
 * User: Abbas
 * Date: 3/18/2017
 * Time: 11:52 PM
 */
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    include("scripts/header.php");
    ?>
    <main>
        <form action="login" method="post">
            <input type="text" name="username" placeholder="username"></br>
            <input type="passowrd" name="password" placeholder="password"><br>
            <p><input type="submit" value="submit"></p>
        </form>
    </main>
<?php
    include("scripts/footer.php");
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include("scripts/db_connect.php");
}


?>

