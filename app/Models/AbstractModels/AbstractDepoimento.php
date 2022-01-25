<?php

namespace App\Models\AbstractModels;

use App\Models\Barbeiro;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractDepoimento
* @package App\Models\AbstractModels
* @author Lucas Matos e Souza
*
* @property bigInteger $id
* @property string $nome
* @property string $nota
* @property string $mensagem
* @property datetime $data-criacao
* @property bigInteger $barbeiro
* @property \App\Models\Barbeiro $barbeiro
*/
abstract class AbstractDepoimento extends Model {

    use HasFactory;

    public $timestamps = false;

    public $table = "depoimento";

    protected $fillable = [
        'id',
        'nome',
        'nota',
        'mensagem',
        'data-criacao',
        'barbeiro_id',
        'cliente_id'
    ];

    protected $dates = [
		'data'
	];

    public function barbeiro(){
		return $this->belongsTo(Barbeiro::class);
	}

    public function cliente(){
		return $this->belongsTo(Cliente::class);
	}

}
