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
                $query = "SELECT * FROM operations WHERE (shield_id = $shield_id) AND (module_id = $module_id )";
                $result = $this->select($query);
            }
            return $result;
        }

        public function set($data)
        {
            $result=null;
            if($data['shield_id'] !='0' && $data['module_id'] != '0')
            { 
                $shield_id = $data['shield_id'];
                $module_id = $data['module_id'];
                //data validation
                if(!validate_date($data['creation_date'])) $validation = false;
                else if(!is_numeric($data['status'])) $validation = false;
                else if(!is_numeric($data['cycles'])) $validation = false;
                else if(!is_numeric($data['cycles_completed'])) $validation = false;
                else if(!is_numeric($data['time_on'])) $validation = false;
                else if(!is_numeric($data['time_off'])) $validation = false;
                else if($data['status'] != 0 && $data['status'] != 1 ) $validation = false;
                else if($data['cycles']< $data['cycles_completed']) $validation = false;
                else $validation = true;
                if($validation)
                {
                    $params = array(
                        $data['creation_date'],
                        $data['status'],
                        $data['cycles'],
                        $data['cycles_completed'],
                        $data['time_on'],
                        $data['time_off']);
                    $query="UPDATE operations SET creation_date=?, status=?, cycles=?, cycles_completed=?, time_on=?, time_off=?
                            WHERE (shield_id = $shield_id) AND (module_id = $module_id)";
                    $result = $this->update($query,$params);
                }

            }
            return $result;           
        }

        private function auto_fixed(){}
    }
?>