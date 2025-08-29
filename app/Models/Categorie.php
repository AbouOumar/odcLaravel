<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categorie
 * 
 * @property int $id
 * @property string $nom
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Categorie extends Model
{
	protected $table = 'categorie';

	protected $fillable = [
		'nom',
		'description'
	];
}
