<?php

    class views
    {
        function getView($controller,$data="")
        {
            $controller = get_class($controller).'_view';
            $view = 'resources/views/'.$controller.'.php';
            require_once($view);
        }
    }

?>