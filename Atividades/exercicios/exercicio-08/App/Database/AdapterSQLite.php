<?php

namespace App\Database;

use PDO;
use Exception;

class AdapterSQLite implements AdapterInterface {

    private $dbfile = __DIR__ . "/database.sqlite";
    private $strConnection = "sqlite:";
    private $connection = null;

    public function open()
    {
        try{
            $this->connection = new PDO($this->strConnection . $this->dbfile);

            print "Database: success!";
        } catch (Exception $e) {
            die("Database error: " . $e->getMessage());
        }
    }

    public function close()
    {
        $this->connection->close();
    }

    public function get()
    {
        if($this->connection === null){
            $this->open();
            // $this->connection->open();
        }
        return $this->connection;
    }

}