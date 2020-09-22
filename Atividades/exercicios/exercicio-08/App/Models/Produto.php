<?php

namespace App\Models;

class Produto implements ModelInterface {
    
    private $id, $nome, $um;

    public function __construct($id, $nome, $um)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->um = $um;
    }

    public function __destruct()
    {
        
    }

    public function getAll()
    {
        $query_str = "SELECT * FROM produtos";
        return $query_str;
    }

    public function get($id)
    {
        
    }

}