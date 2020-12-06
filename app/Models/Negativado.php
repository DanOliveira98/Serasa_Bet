<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negativado extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cpf',
        'valor_divida',
        'nome',
        'nome_mae',
        'rg',
        'user_id',
    ];
    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function enderecos()
    {
        return $this->hasMany('App\Models\Endereco', 'negativado_id');
    }
}
