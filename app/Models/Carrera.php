<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Carrera
 *
 * @property $id
 * @property $NombreCarrera
 * @property $Estado
 * @property $Facultad
 * @property $created_at
 * @property $updated_at
 * @property $UsuarioModifica
 *
 * @property EmpleadoCarrera[] $empleadoCarreras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Carrera extends Model
{
    
    static $rules = [
		'NombreCarrera' => 'required',
		'Estado' => 'required',
		'Facultad' => 'required',
		'UsuarioModifica' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NombreCarrera','Estado','Facultad','UsuarioModifica'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleadoCarreras()
    {
        return $this->hasMany('App\Models\EmpleadoCarrera', 'id_carrera', 'id');
    }
    

}
