<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmpleadoCarrera
 *
 * @property $id
 * @property $id_empleado
 * @property $id_carrera
 * @property $id_periodo
 * @property $Fecha
 * @property $Estado
 * @property $created_at
 * @property $updated_at
 * @property $UsuarioModifica
 *
 * @property Carrera $carrera
 * @property Empleado $empleado
 * @property Periodo $periodo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EmpleadoCarrera extends Model
{
    
    static $rules = [
		'id_empleado' => 'required',
		'id_carrera' => 'required',
		'id_periodo' => 'required',
		'Fecha' => 'required',
		'Estado' => 'required',
		'UsuarioModifica' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_empleado','id_carrera','id_periodo','Fecha','Estado','UsuarioModifica'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carrera()
    {
        return $this->hasOne('App\Models\Carrera', 'id', 'id_carrera');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'id', 'id_empleado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function periodo()
    {
        return $this->hasOne('App\Models\Periodo', 'id', 'id_periodo');
    }
    

}
