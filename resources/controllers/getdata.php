<?php

    class getdata extends Controllers
    {
        public function __construct($data)
        {
            parent::__construct();
            $this->getdata($data);
            $this->views->getView($this,$data);
            
        }

        public function getdata($data)
        {
            $info = $this->model->getdata($data);
            echo json_generator($info);
        }
    }

?>