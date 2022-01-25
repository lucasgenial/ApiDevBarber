<?php

namespace App\Models\AbstractModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractCliente
* @package App\Models\AbstractModels
* @author Lucas Matos e Souza
*
* @property bigInteger $id
* @property string $nome
* @property string $descricao
* @property boolean $ativo
* @property bigInteger $usuario
* @property \App\Models\Usuario $usuario
*/
abstract class AbstractCliente extends Model {

    use HasFactory;

    public $timestamps = false;

    public $table = "cliente";

    protected $attributes = ['ativo' => false];

    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'ativo',
        'usuario_id'
    ];

    public function usuario(){
		return $this->belongsTo(Usuario::class);
	}

    public function favoritos(){
        return $this->belongsToMany(Barbeiro::class, 'cliente_favoritos',
                 'cliente_id', 'id');
    }
}
