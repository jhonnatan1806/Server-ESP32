<?php 
    /*$mydate = date("Y-m-d H:i:s");
    $datef = $mydate->format('Y-m-d');*/
    //$string_date = date("Y-m-d H:i:s");
    $date = new DateTime(date("Y-m-d H:i:s"));
    echo BREAKLINE.$date->format('H:i:s');
?>