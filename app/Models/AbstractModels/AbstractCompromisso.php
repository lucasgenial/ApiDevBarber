<?php

namespace App\Models\AbstractModels;

use App\Models\Cliente;
use App\Models\Barbeiro;
use App\Models\Avaliacao;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Enumerable;

/**
* Class AbstractCompromisso
* @package App\Models\AbstractModels
* @author Lucas Matos e Souza
*
* @property bigInteger $id
* @property string $nota
* @property string $mensagem
* @property datetime $data
* @property Enumerable $status
* @property bigInteger $barbeiro
* @property \App\Models\Barbeiro $barbeiro
* @property bigInteger $cliente
* @property \App\Models\Cliente $cliente
* @property bigInteger $avaliacao
* @property \App\Models\Avaliacao $avaliacao
*/
abstract class AbstractCompromisso extends Model {

    use HasFactory;

    public $timestamps = false;

    public $table = "compromisso";

    protected $fillable = [
        'id',
        'data',
        'cliente_id',
        'barbeiro_id',
        'avaliacao_id',
        'status'
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

    public function avaliacao(){
		return $this->belongsTo(Avaliacao::class);
	}

}
