<?php
/**
 * Created by PhpStorm.
 * User: Abbas
 * Date: 5/3/2017
 * Time: 12:30 PM
 */

$arr =array(
  'name' => "mike crab",
    'University' => "RGU",
    'Previous Employers' => array("UoD", "BBC"),
    'Modules Taught' => 4,
    'Modules' => array (
        'modulesName' => "webDev",
        'moduleCode' => "CM4025",
        'ClassSize' => "25")

);
echo json_encode($arr);