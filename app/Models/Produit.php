<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Produit
 * 
 * @property int $id
 * @property string $designation
 * @property string $description
 * @property float $prix
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Produit extends Model
{
	protected $table = 'produits';

	protected $casts = [
		'prix' => 'float'
	];

	protected $fillable = [
		'designation',
		'description',
		'prix'
	];
}
