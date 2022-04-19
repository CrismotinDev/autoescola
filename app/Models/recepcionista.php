<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recepcionista extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'recepcionistas';
    protected $fillable = ['id','nome', 'email', 'cpf', 'telefone', 'endereco'];

}
