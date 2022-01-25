<?php

namespace App\Models\AbstractModels;

use App\Models\Barbeiro;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractFoto
* @package App\Models\AbstractModels
* @author Lucas Matos e Souza
*
* @property bigInteger $id
* @property string $nome
* @property string $url
* @property datetime $data-criacao
* @property bigInteger $barbeiro
* @property \App\Models\Barbeiro $barbeiro
*/
abstract class AbstractFoto extends Model {

    use HasFactory;

    public $timestamps = false;

    public $table = "foto";

    protected $fillable = [
        'id',
        'nome',
        'url',
        'barbeiro_id',
        'data-criacao'
    ];

    protected $dates = [
		'data-criacao'
	];

    public function barbeiro(){
		return $this->belongsTo(Barbeiro::class);
	}

}
