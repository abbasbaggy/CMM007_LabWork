<?php
/**
 * Created by PhpStorm.
 * User: Abbas
 * Date: 3/6/2017
 * Time: 9:38 PM
 */

echo $username;


function displayAccessLevelInformation($accessLevel){
    if($access_level="standarduser"){
        echo"<p>You are currently logged in as a standard user</p>";
    }
    elseif ($access_level="root"){
        echo"<p>You are currentlyloggedin as a root user</p>";
        echo"<p>You have access to additional administrative features</p>";

    }
}
