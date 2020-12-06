<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    const PARCEIRO = 'P';
    const ADMIN = 'A';

    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'email',
        'password',
        'cpf',
        'cnpj',
        'tipo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function negativados()
    {
        return $this->hasMany('App\Models\Negativado', 'user_id');
    }

    public function getCpfFormattedAttribute()
    {
        return preg_replace('/([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})/', '$1.$2.$3-$4', $this->cpf);
    }

    public function setCpfAttribute(string $cpf)
    {
        $this->attributes['cpf'] = preg_replace('/[^0-9]/', '', $cpf);
    }
}
