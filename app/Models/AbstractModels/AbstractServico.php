<?php

namespace App\Models\AbstractModels;

use App\Models\Barbeiro;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractServico
* @package App\Models\AbstractModels
* @author Lucas Matos e Souza
*
* @property bigInteger $id
* @property string $nome
* @property string $descricao
* @property boolean $ativo
*/
abstract class AbstractServico extends Model {

    use HasFactory;

    public $timestamps = false;

    public $table = "servico";

    protected $attributes = ['ativo' => false];

    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'ativo'
    ];

    public function barbeiros(){
		return $this->belongsToMany(Barbeiro::class, 'barbeiro_servico',
                    'barbeiro_id', 'id');
	}
}
