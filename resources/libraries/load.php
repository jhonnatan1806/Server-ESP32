<?php
    $controller_file = 'resources/controllers/'.$controller.'.php';
    if(file_exists($controller_file))
    {
        require_once($controller_file);
        $controller = new $controller($data);
        
    }

?>