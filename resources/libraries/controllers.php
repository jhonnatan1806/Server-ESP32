<?php
    class controllers
    {
        public function __construct()
        {
            $this->views = new Views();
            $this->loadModel();
        }

        public function loadModel()
        {
            $model = get_class($this).'_model';
            $route_class = 'resources/models/'.$model.'.php';
            require_once($route_class);
            $this->model = new $model();  
        }
    }

?>