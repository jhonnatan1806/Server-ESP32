<?php

    class showdata extends Controllers
    {

        public function __construct($data)
        {
            parent::__construct();
            $this->data = $data;
            $this->views->getView($this,$data);
            $this->getdata();
            
        }

        public function getdata()
        {
            $info = $this->model->show($this->data);
            echo json_generator($info);
        }
    }

?>