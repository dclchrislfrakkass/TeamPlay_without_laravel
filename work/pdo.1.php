<?php

abstract class PDORepository{
        const USERNAME="dbu15956";
        const PASSWORD="chrisfab18";
        const HOST="db5000019265.hosting-data.io";
        const DB="dbs14689";

        private function getConnection(){
        $username = self::USERNAME;
        $password = self::PASSWORD;
        $host = self::HOST;
        $db = self::DB;
        $connection = new PDO("mysql:dbname=$db;host=$host", $username, $password);
        return $connection;
        }
        protected function queryList($sql, $args){
        $connection = $this->getConnection();
        $stmt = $connection->prepare($sql);
        $stmt->execute($args);
        return $stmt;
        }
}

?>