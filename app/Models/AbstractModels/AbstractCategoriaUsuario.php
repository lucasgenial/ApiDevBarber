<?php
namespace App\Models\AbstractModels;

use App\Models\Permissao;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractCategoriaUsuario
* @package App\Models\AbstractModels
* @author Lucas Matos e Souza
*
* @property bigInteger $id
* @property string $nome
* @property string $descricao
* @property boolean $ativo
* @property \App\Models\Usuario|null $usuarios
*/
abstract class AbstractCategoriaUsuario extends Model {

    use HasFactory;

    public $timestamps = false;

    public $table = "categoria-usuario";

    protected $attributes = ['ativo' => false];

    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'ativo'
    ];

    public function usuarios(){
        return $this->hasOne(Usuario::class, 'categoriaUsuario_id', 'id');
    }

    public function permissaos(){
        return $this->belongsToMany(Permissao::class, 'categoria_usuario_has_permissao', 'categoria_usuario_id', 'permissao_id');
    }
}
