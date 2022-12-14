<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Principal
 *
 * @property int $id
 * @property string $nomeitem
 * @property int $quantidadevisitadas
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Principal extends Model
{
    use HasFactory;
	protected $table = 'principal';

	protected $casts = [
		'quantidadevisitadas' => 'int'
	];

	protected $fillable = [
		'nomeitem',
		'quantidadevisitadas'
	];
}
