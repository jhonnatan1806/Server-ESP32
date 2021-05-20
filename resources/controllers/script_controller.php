<?php

    class script_controller extends Controllers
    {
        private $send_data;

        public function __construct($data)
        {
            parent::__construct();
            $this->data = $data;
        }

        public function showdata()
        {
            $info = $this->model->get($this->data);
            echo json_generator($info);
            $this->sendtoview();
        }

        public function modifydata()
        {
            $info = $this->model->set($this->data);
            $this->sendtoview();
        }

        public function sendtoview()
        {
            $send_data['page_tag'] = "title tabs";
            $send_data['description'] = "description page";
            $send_data['page_title'] = "title page";
            $send_data['autor'] = "autor name";
            $this->views->getView($this,$send_data);
        }
        

    }

?>