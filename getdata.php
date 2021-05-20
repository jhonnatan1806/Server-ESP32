<?php 
    require_once('resources/config.php');
    require_once('resources/helpers/helper.php');

//Initialization controller
    $controller ='getdata';

//Getting the requested id
    $shield_id = !empty($_GET['shield_id']) ? $_GET['shield_id'] : '0';
    $module_id = !empty($_GET['module_id']) ? $_GET['module_id'] : '0';
    /*$status = !empty($_GET['status']) ? $_GET['status'] : '0';
    $time_on = !empty($_GET['time_on']) ? $_GET['time_on'] : '00:00:00';
    $time_off = !empty($_GET['time_off']) ? $_GET['time_off'] : '00:00:00';
    $time_sleep = !empty($_GET['time_sleep']) ? $_GET['time_sleep'] : '00';
    $cycles = !empty($_GET['cycles']) ? $_GET['cycles'] : '0';*/

// Importing libraries
    require_once('resources/libraries/autoload.php');
    require_once('resources/libraries/load.php');
?>