<?php


class database
{

    private $connection = null;

    public function __construct(){

        if (!$this->connection){
            $serverName = SERVER;
            $connectionOptions = array(
                "database" => DATABASE,
                "uid" => DBUSER,
                "pwd" => DBPWD
            );
            $this->connection = sqlsrv_connect($serverName, $connectionOptions);
            if ($this->connection === false){
                die( print_r( sqlsrv_errors(), true));
            }
            //return;
        }

    }

    public function getDatabaseConnection(){
        return $this->connection;
    }

    public function getDatabaseError(){
        return $this->connection->sqlsrv_errors();
    }

}