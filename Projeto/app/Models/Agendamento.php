<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $fillable = ['sala_id', 'user_id', 'titulo', 'data', 'horario_inicial', 'horario_final'];

    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sala(){
        return $this->belongsTo(Sala::class);
    }
}
