<?php

    function strClean($strcadena){
        $string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''],$strcadena);
        $string = trim($string);
        $string = stripslashes($string);
        $string = str_ireplace("<script>","",$string);
        $string = str_ireplace("</script>","",$string);
        $string = str_ireplace("<script src>","",$string);
        $string = str_ireplace("<script type=>","",$string);
        $string = str_ireplace("SELECT * FROM","",$string);
        $string = str_ireplace("DELETE FROM","",$string);
        $string = str_ireplace("INSERT INTO","",$string);
        $string = str_ireplace("SELECT COUNT(*) FROM","",$string);
        $string = str_ireplace("DROP TABLE","",$string);
        $string = str_ireplace("OR '1' = '1","",$string);
        $string = str_ireplace('OR "1"="1',"",$string);
        $string = str_ireplace('OR ´1´=´1',"",$string);
        $string = str_ireplace("is NULL; --","",$string);
        $string = str_ireplace('is NULL; --',"",$string);
        $string = str_ireplace("LIKE '","",$string);
        $string = str_ireplace('LIKE "',"",$string);
        $string = str_ireplace("LIKE ´","",$string);
        $string = str_ireplace("OR 'a'='a","",$string);
        $string = str_ireplace('OR "a"="a',"",$string);
        $string = str_ireplace("OR ´a´=´a","",$string);
        $string = str_ireplace("--","",$string);
        $string = str_ireplace("^","",$string);
        $string = str_ireplace("[","",$string);
        $string = str_ireplace("]","",$string);
        $string = str_ireplace("==","",$string);
        return $string;
    }

    function json_generator($data){
        $result = null;
        if(!empty($data))
        {
            $result = array();
            while (current($data)!=null)
            {
                $key_array = key($data);
                array_push($result, array( strtoupper($key_array) => $data["$key_array"],));
                next($data);
            }
            $result = json_encode(array('RESULT_FORMAT_JSON'=>$result));
        }
        return $result;
    }

    function format_seconds($data)
    {
        $params = explode(":",$data);
        $hours = $params[0];
        $minutes = $params[1];
        $seconds = $params[2];
        $data= ($hours*3600)+($minutes*60)+ $seconds;
        return $data;
    
    }

    function format_hours($data)
    {
        $hours = floor($data/ 3600);
	    $minutes = floor(($data - ($hours * 3600)) / 60);
	    $seconds = $data - ($hours * 3600) - ($minutes * 60);
        if($hours<=9) $hours = '0'.$hours;
        if($minutes<=9) $minutes = '0'.$minutes;
        if($seconds<=9) $seconds = '0'.$seconds;
        $data = $hours.":".$minutes.":".$seconds;
        return $data;
    }
?>