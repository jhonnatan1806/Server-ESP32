<?php

    class views
    {
        function getView($controller,$data="")
        {
            $controller_name = substr(get_class($controller),0,-11);//remove _controller
            $controller = $controller_name.'_view';
            $view = 'resources/views/'.$controller.'.php';
            require_once($view);
        }
    }

?>