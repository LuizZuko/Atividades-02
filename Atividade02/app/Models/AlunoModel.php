<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
   
    protected $fillable = [
        'nome',
        'email',
        'matricula',
        'data_nascimento',
        'telefone',
    ];

   
    protected $casts = [
        'data_nascimento' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

   
    protected $hidden = [
        'remember_token',
    ];

}