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
    if (($_POST["username"] == $user) &&($_POST["password"] ==$pass)) {

        if (isset($_POST["rememberme"])) {

            setcookie("username", $_POST["username"], time() + 60 * 60 * 24 * 365, "/account", "cookies");
            setcookie("password", $_POST["password"], time() + 60 * 60 * 24 * 365, "/account", "cookies");

        } else {

            setcookie("username", $_POST["username"], false);
            setcookie("password", md5($_POST["password"]), false);
        }
        header("location: homepage.php");

    } else{
        echo"Username/password invalid";
    }
} else{
    echo "you must supply a username and password.";
}

