<?php

namespace App\Models;

use \PDO;

class DB
{
    private $host = 'mysql';
    private $user = 'dev';
    private $pass = 'dev';
    private $dbname = 'test';

    public function connect()
    {
        $conn_str = "mysql:host=$this->host;dbname=$this->dbname";
        $conn = new PDO($conn_str, $this->user, $this->pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
    }
}