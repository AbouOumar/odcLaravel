<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Lignecommande
 * 
 * @property int $id
 * @property int $produits_id
 * @property int $commamdes_id
 * @property int $quantite
 * @property int $prix_unitaire
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Lignecommande extends Model
{
	protected $table = 'lignecommande';

	protected $casts = [
		'produits_id' => 'int',
		'commamdes_id' => 'int',
		'quantite' => 'int',
		'prix_unitaire' => 'int'
	];

	protected $fillable = [
		'produits_id',
		'commamdes_id',
		'quantite',
		'prix_unitaire'
	];
}
