<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    protected $fillable = ['numero', 'nome', 'capacidade'];

    public function agendamentos(){
        return $this->hasMany(Agendamento::class);
    }
}
