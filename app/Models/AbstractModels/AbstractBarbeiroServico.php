<?php

namespace App\Models\AbstractModels;

use App\Models\Barbeiro;
use App\Models\Servico;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractBarbeiroServico
* @package App\Models\AbstractModels
* @author Lucas Matos e Souza
*
* @property bigInteger $id
* @property float $preco
* @property boolean $ativo
* @property bigInteger $barbeiro
* @property \App\Models\Barbeiro $barbeiro
* @property bigInteger $servico
* @property \App\Models\Servico $servico
*/
abstract class AbstractBarbeiroServico extends Model {

    use HasFactory;

    public $timestamps = false;

    public $table = "barbeiro-servico";

    protected $attributes = ['ativo' => false];

    protected $fillable = [
        'id',
        'preco',
        'barbeiro_id',
        'servico_id',
        'ativo'
    ];

    public function usuario(){
		return $this->belongsTo(Barbeiro::class);
	}

    public function servico(){
		return $this->belongsTo(Servico::class);
	}
}
