<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conta_receber extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'contas_receber';
    protected $fillable = ['id','descricao','valor','aluno','recep','pago','data'];
}

