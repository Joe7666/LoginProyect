<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Periodo
 *
 * @property $id
 * @property $NombrePeriodo
 * @property $FechaInicio
 * @property $FechaFin
 * @property $Estado
 * @property $created_at
 * @property $updated_at
 * @property $UsuarioModifica
 *
 * @property EmpleadoCarrera[] $empleadoCarreras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Periodo extends Model
{
    
    static $rules = [
		'NombrePeriodo' => 'required',
		'FechaInicio' => 'required',
		'FechaFin' => 'required',
		'Estado' => 'required',
		'UsuarioModifica' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NombrePeriodo','FechaInicio','FechaFin','Estado','UsuarioModifica'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleadoCarreras()
    {
        return $this->hasMany('App\Models\EmpleadoCarrera', 'id_periodo', 'id');
    }
    

}
