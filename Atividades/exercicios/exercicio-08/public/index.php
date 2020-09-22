<?php

require '../vendor/autoload.php';

use App\Database\Connection;
use App\Database\AdapterSQLite;


$connection = new Connection(new AdapterSQLite());
// var_dump($connection);

$connection->getAdapter()->open();

$query_str = "SELECT * FROM estados";
$estados = $connection->getAdapter()->get()->query($query_str);

$query_str = "SELECT * FROM produtos";
$produtos = $connection->getAdapter()->get()->query($query_str);

require_once '../App/Views/Estado.php';
require_once '../App/Views/Produto.php';


$connection->getAdapter()->close();