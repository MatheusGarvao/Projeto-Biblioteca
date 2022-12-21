<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Curso
 *
 * @property int $id
 * @property string $nomecurso
 * @property string $cor
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Curso extends Model
{
    use HasFactory;
	protected $table = 'cursos';

	protected $fillable = [
		'nomecurso',
		'cor'
	];
}
