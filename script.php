<?php 
    require_once('resources/config.php');
    require_once('resources/helpers/helper.php');

//Initialization controller
    $controller ='script_controller';
    $method = !empty($_GET['method']) ? str_clean($_GET['method']) : 'sendtoview';


//Getting the requested id
    $data['shield_id']= !empty($_GET['shield_id']) ? str_clean($_GET['shield_id']) : '0';
    $data['module_id'] = !empty($_GET['module_id']) ? str_clean($_GET['module_id']) : '0';
    $data['creation_date'] = !empty($_GET['creatin_date']) ? $_GET['creatin_date'] : '2000-01-01 00:00:00';
    $data['status'] = !empty($_GET['status']) ? $_GET['status'] : '0';
    $data['cycles'] = !empty($_GET['cycles']) ? $_GET['cycles'] : '0';
    $data['cycles_completed'] = !empty($_GET['cycles_completed']) ? $_GET['cycles_completed'] : '0';
    $data['time_on'] = !empty($_GET['time_on']) ? $_GET['time_on'] : '0';
    $data['time_off'] = !empty($_GET['time_off']) ? $_GET['time_off'] : '0';

// Importing libraries
    require_once('resources/libraries/autoload.php');
    require_once('resources/libraries/load.php');
?>