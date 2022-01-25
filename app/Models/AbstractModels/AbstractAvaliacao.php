<?php

namespace App\Models\AbstractModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractAvaliacao
* @package App\Models\AbstractModels
* @author Lucas Matos e Souza
*
* @property bigInteger $id
* @property string $nota
* @property string $mensagem
* @property datetime $data-criacao
* @property boolean $ativo
* @property bigInteger $barbeiro
* @property \App\Models\Barbeiro $barbeiro
* @property bigInteger $cliente
* @property \App\Models\Cliente $cliente
*/
abstract class AbstractAvaliacao extends Model {

    use HasFactory;

    public $timestamps = false;

    public $table = "avaliacao";

    protected $attributes = ['ativo' => false];

    protected $fillable = [
        'id',
        'nota',
        'mensagem',
        'data-criacao',
        'barbeiro_id',
        'cliente_id'
    ];

    protected $dates = [
		'data-criacao'
	];

    public function barbeiro(){
		return $this->belongsTo(Barbeiro::class);
	}

    public function cliente(){
		return $this->belongsTo(Cliente::class);
	}

}
