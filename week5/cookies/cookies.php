<?php
/**
 * Created by PhpStorm.
 * User: Abbas
 * Date: 3/6/2017
 * Time: 9:03 PM
 */
$user="abbas";
$pass="mysecret";

if (isset($_POST["username"]) && isset($_POST["password"])){
    if (($_POST["username"] == $user) &&($_POST["passowrd"] ==$pass)) {

        if (isset($_POST["rememberme"])) {

            setcookie("username", $_POST["username"], time() + 60 * 60 * 24 * 365);
            setcookie("password", $_POST["password"], time() + 60 * 60 * 24 * 365);

        } else {

            setcookie("username", $_POST["username"], false);
            setcookie("password", md5($_POST["password"]), false);
        }
        header("location: cookie.php");

    } else{
        echo"Usernam/password invalid";
    }
} else{
    echo "you must supply a username and password.";
}

