<?php
    spl_autoload_register(function($class)
    {
        
        if(file_exists('resources/libraries/'.$class.'.php'))
        {
            require_once('resources/libraries/'.$class.'.php');
        }
    });
?>