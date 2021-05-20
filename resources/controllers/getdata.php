<?php

    class getdata extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
            $data['tag_page'] = "script getdata";
            $this->views->getView($this,$data);
        }
    }

?>