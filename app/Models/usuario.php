<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $table = 'usuario';
    protected $fillable = [
       'id',
       'nome',
       'cpf',
       'usuario',
       'senha',
       'nivel',


    ];



}
