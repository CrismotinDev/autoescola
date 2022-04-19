<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class veiculo extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $table = 'veiculos';
    protected $fillable = [
       'id',
       'placa',
       'categoria',
       'Km',
       'cor',
       'marca',
       'ano',
       'data_revisao',

    ];
}
