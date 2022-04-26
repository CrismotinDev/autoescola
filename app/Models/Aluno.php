<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'alunos';
    protected $fillable = ['id','nome','email','telefone','cpf','endereco','data_pauta', 'status_pauta'];
}
