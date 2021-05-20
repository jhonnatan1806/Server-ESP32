<?php 
    require_once('resources/config.php');
    require_once('resources/helpers/helper.php');

// Getting the requested id
    $shield_id = !empty($_GET['shield_id']) ? $_GET['shield_id'] : '0';
    $module_id = !empty($_GET['module_id']) ? $_GET['module_id'] : '0';
    $status = !empty($_GET['status']) ? $_GET['status'] : '0';
    $time_on = !empty($_GET['time_on']) ? $_GET['time_on'] : '00:00:00';
    $time_off = !empty($_GET['time_off']) ? $_GET['time_off'] : '00:00:00';
    $time_sleep = !empty($_GET['time_sleep']) ? $_GET['time_sleep'] : '00';
    $cycles = !empty($_GET['cycles']) ? $_GET['cycles'] : '0';



// Creating SQL query with where clause to get a specific employee

//$sql = "SELECT c.NOMBRE AS NOMBRECATEGORIA, p.* FROM plato p, categoria c WHERE p.ID_CATEGORIA=c.ID_CATEGORIA AND (p.NOMBRE=$NOMBRESEND OR c.NOMBRE=$NOMBRESEND)";

// getting result 
//$r = mysqli_query($con,$sql);

// creating a blank array 
//$result = array();

//while($row = mysqli_fetch_array($r)){

// Pushing name and id in the blank array created 
/*array_push($result,array(

"ID_PLATO"=>$row['ID_PLATO'],
"NOMBRE"=>$row['NOMBRE'],
"PRECIO"=>$row['PRECIO'],
"DESCRIPCION"=>$row['DESCRIPCION'],
"NOMBRECATEGORIA"=>$row['NOMBRECATEGORIA'],

));
}

// displaying in JSON format 
echo json_encode(array('result'=>$result));

mysqli_close($con);*/
//init controller
    $controller ='getdata';

// Importing libraries
    require_once('resources/libraries/autoload.php');
    require_once('resources/libraries/load.php');
?>