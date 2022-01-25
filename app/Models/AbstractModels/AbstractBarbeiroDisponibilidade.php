<?php

namespace App\Models\AbstractModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

/**
* Class AbstractBarbeiroDisponibilidade
* @package App\Models\AbstractModels
* @author Lucas Matos e Souza
*
* @property bigInteger $id
* @property Date $data
* @property string $horas
* @property bigInteger $barbeiro
* @property \App\Models\Barbeiro $barbeiro
*/
abstract class AbstractBarbeiroDisponibilidade extends Model {

    use HasFactory;

    public $timestamps = false;

    public $table = "barbeiro-disponibilidade";

    protected $attributes = ['ativo' => false];

    protected $fillable = [
        'id',
        'data',
        'horas',
        'barbeiro_id'
    ];

    protected $dates = [
		'data'
	];

    public function barbeiro(){
		return $this->belongsTo(Barbeiro::class);
	}

}
