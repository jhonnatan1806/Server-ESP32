<?php

    class MySQL extends Connection
    {
        private $connection;
        private $strquery;
        private $arrvalues;

        public function __construct()
        {
            $this->connection = new Connection();
            $this->connection = $this->connection->connect();
        }
        
        public function insert(string $query, array $values)
        {
            $this->strquery = $query;
            $this->arrvalues = $values;

            $insert = $this->connection->prepare($this->strquery);
            $resInsert = $insert->execute($this->arrvalues);
            if($resInsert){
                $lastInsert = $this->connection->lastInsertId();
            }else{
                $lastInsert = 0;
            }
            return $lastInsert;
        }

        public function select(string $query)
        {
            $this->strquery = $query;
            $result = $this->connection->prepare($this->strquery);
            $result->execute();
            $data = $result->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        public function select_all(string $query)
        {
            $this->strquery = $query;
            $result = $this->connection->prepare($this->strquery);
            $result->execute();
            $data = $result->fetchall(PDO::FETCH_ASSOC);
            return $data;
        }

        public function update(string $query, array $values)
        {
            $this->strquery = $query;
            $this->arrvalues = $values;
            $update = $this->connection->prepare($this->strquery);
            $resExecute = $update->execute($this->arrvalues);
            return $resExecute;
        }

        public function delete(string $query)
        {
            $this->strquery = $query;
            $result = $this->connection->prepare($this->strquery);
            $delete = $result->execute();
            return $delete;
        }

    }

?>