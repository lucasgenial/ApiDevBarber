<?php

namespace App\Models\AbstractModels;

use App\Models\CategoriaUsuario;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

/**
* Class AbstractUsuario
* @package App\Models\AbstractModels
* @author Lucas Matos e Souza
*
* @property bigInteger $id
* @property string $login
* @property string $senha
* @property string $remember_token
* @property boolean $ativo
* @property boolean $email_verificado_em
* @property bigInteger $categoriaUsuario
* @property \App\Models\CategoriaUsuario|null $categoriaUsuario
*/
abstract class AbstractUsuario extends Authenticatable implements JWTSubject {
    use Notifiable, HasFactory;

    public $timestamps = false;

    public $table = "usuario";

    protected $attributes = ['ativo' => false];

    protected $fillable = [
        'id',
        'login',
        'senha',
        'categoriaUsuario_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'senha',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verificado_em' => 'datetime',
    ];

    protected $with = [
		'categoriaUsuario'
	];

    public function categoriaUsuario(){
        return $this->belongsTo(CategoriaUsuario::class,
            'categoriaUsuario_id', 'id');
    }

    public function getJWTIdentifier(){
        return $this->getKey();
    }

    public function getJWTCustomClaims(){
        return [];
    }
}
