<?php
    class controllers
    {
        public function __construct()
        {
            $this->views = new views();
            $this->loadModel();
        }

        public function loadModel()
        {
            $controller_name =  substr(get_class($this),0,-11);
            $model = $controller_name.'_model';
            $route_class = 'resources/models/'.$model.'.php';
            require_once($route_class);
            $this->model = new $model();  
        }

    }

?>