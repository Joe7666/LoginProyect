<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $Apellidos
 * @property $Nombres
 * @property $NombreUsuario
 * @property $Password
 * @property $Email
 * @property $created_at
 * @property $updated_at
 *
 * @property Asignacion[] $asignacions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'Apellidos' => 'required',
		'Nombres' => 'required',
		'NombreUsuario' => 'required',
		'Password' => 'required',
		'Email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Apellidos','Nombres','NombreUsuario','Password','Email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignacions()
    {
        return $this->hasMany('App\Models\Asignacion', 'usuario_id', 'id');
    }

    public function empleados(){
      return $this->hasOne(Empleado::class);
    }
    
    public function setPasswordAttribute($Password){
      $this ->attributes['Password']=bcrypt($Password);
    }
}
