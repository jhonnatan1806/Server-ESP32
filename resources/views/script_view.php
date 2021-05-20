<?php 
    //echo BREAKLINE.date("Y-m-d H:i:s");
    $x = 5;
    if($x == 1) $validation = false;
    else if($x == 2) $validation = false;
    else if($x == 3) $validation = false;
    else if($x == 4) $validation = false;
    else $validation = true;
    echo BREAKLINE."x>4 ".value_boolean($validation);
?>