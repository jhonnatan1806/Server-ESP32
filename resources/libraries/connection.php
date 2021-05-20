<?php
    class Connection
    {

        private PDO $connect;

        function __construct()
        {
            $connectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET;
            try{
                $this->connect = new PDO($connectionString, DB_USER, DB_PASSWORD);
                $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                $this->connect = "Error de conexion";
                echo "Error: ".$e->getMessage();
                die();
            }
        }

        public function connect()
        {
            return $this->connect;
        }
    }
?>