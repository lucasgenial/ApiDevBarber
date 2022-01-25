<?php

namespace App\Models\AbstractModels;

use App\Models\CategoriaUsuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractPermissao
* @package App\Models\AbstractModels
* @author Lucas Matos e Souza
*
* @property bigInteger $id
* @property string $nome
* @property string $descricao
* @property boolean $ativo
*/
abstract class AbstractPermissao extends Model {

    use HasFactory;

    public $timestamps = false;

    public $table = "permissao";

    protected $attributes = ['ativo' => false];

    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'ativo'
    ];

    public function categoriaUsuarios(){
        return $this->belongsToMany(CategoriaUsuario::class, 'categoria-usuario_permissao',
                    'permissao_id', 'categoria-usuario_id');
    }
}
