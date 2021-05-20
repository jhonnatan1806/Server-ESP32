<?php

    class script_model extends mysql
    {
        public function __construct()
        {
           parent::__construct();
        }

        public function get($data){
            $result = null;
            if($data['shield_id'] !='0' && $data['module_id'] != '0')
            {
                $shield_id = $data['shield_id'];
                $module_id = $data['module_id'];
                $query = "SELECT * FROM operations 
                        WHERE (shield_id = $shield_id) 
                        AND (module_id = $module_id )";
                $result = $this->select($query);
            }
            return $result;
        }

        public function set($data)
        {}
    }
?>