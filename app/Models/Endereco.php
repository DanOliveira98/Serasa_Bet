<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'uf',
        'cep',
        'complemento',
    ];
    public function negativados()
    {
        return $this->belongsTo('App\Models\Negativado');
    }


}
