<?php

!defined('APPLOGIN_LOCATION') ? define('APPLOGIN_LOCATION', ''): TRUE ;

require_once(APPLOGIN_LOCATION.'config/config.php');
require_once(APPLOGIN_LOCATION.'classes/database.php');

class crud
{
    protected $connection;

    public function __construct(){
        $this->connection    = new database();
    }

    public function consultar(){

    }

    public function insertar(){

    }

    public function actualizar(){

    }

    public function borrar(){

    }

    public function ejecutar(){

    }
}