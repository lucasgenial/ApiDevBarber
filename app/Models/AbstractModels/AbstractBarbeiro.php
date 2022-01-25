<?php

namespace App\Models\AbstractModels;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractBarbeiro
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
abstract class AbstractBarbeiro extends Model {

    use HasFactory;

    public $timestamps = false;

    public $table = "barbeiro";

    protected $attributes = ['ativo' => false];

    protected $fillable = [
        'id',
        'nome',
        'avatar',
        'email',
        'nota',
        'latitude',
        'longitude',
        'ativo',
        'usuario_id'
    ];

    public function usuario(){
		return $this->belongsTo(Usuario::class);
	}

    public function servicos(){
        return $this->belongsToMany(BarbeiroServico::class, 'barbeiro-servico',
                    'barbeiro_id', 'id');
    }

}
