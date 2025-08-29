<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Commande
 * 
 * @property int $id
 * @property string $numero
 * @property Carbon $date_commande
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Commande extends Model
{
	protected $table = 'commandes';

	protected $casts = [
		'date_commande' => 'datetime'
	];

	protected $fillable = [
		'numero',
		'date_commande'
	];
}
