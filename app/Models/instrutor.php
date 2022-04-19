<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instrutor extends Model
{
    use HasFactory;

    protected $table = 'instrutores';
    protected $fillable = ['id','nome', 'email', 'cpf', 'telefone', 'endereco', 'credencial', 'data_vencimento'];
}
