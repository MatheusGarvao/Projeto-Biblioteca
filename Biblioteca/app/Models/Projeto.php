<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Projeto
 *
 * @property int $id
 * @property string $nomeprojeto
 * @property string|null $descricao
 * @property string $nomealuno
 * @property int $quantidadevisitadas
 * @property string $linkprojeto
 * @property int $quantidadeclicklink
 * @property bool $projetoativo
 * @property int $fk_cursos_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Projeto extends Model
{
    use HasFactory;
	protected $table = 'projetos';

	protected $casts = [
		'quantidadevisitadas' => 'int',
		'quantidadeclicklink' => 'int',
		'projetoativo' => 'bool',
		'fk_cursos_id' => 'int'
	];

	protected $fillable = [
		'nomeprojeto',
		'descricao',
		'nomealuno',
		'quantidadevisitadas',
		'linkprojeto',
		'quantidadeclicklink',
		'projetoativo',
		'fk_cursos_id'
	];
}
