<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class Utilisateur
 * 
 * @property int $id
 * @property string $nom
 * @property string $email
 * @property string $mot_de_passe
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Utilisateur extends Authenticatable
{
	use HasFactory,Notifiable,HasRoles;
	
	protected $table = 'utilisateurs';

	protected $fillable = [
		'nom',
		'email',
		'mot_de_passe'
	];
	public function getAuthPassword()
	{
		return $this->mot_de_passe;
	}
	
}
