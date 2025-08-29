<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property int $id
 * @property string $nom
 * @property string $prenom
 * @property Carbon $date_nais
 * @property string $adresse_email
 * @property float $prix
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $table = 'client';

	protected $casts = [
		'date_nais' => 'datetime',
		'prix' => 'float'
	];

	protected $fillable = [
		'nom',
		'prenom',
		'date_nais',
		'adresse_email',
		'prix'
	];
}
