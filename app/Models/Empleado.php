<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $CodigoEmpleado
 * @property $Apellidos
 * @property $Nombres
 * @property $usuario_id
 * @property $FechaIngreso
 * @property $created_at
 * @property $updated_at
 * @property $UsuarioModifica
 *
 * @property EmpleadoCarrera[] $empleadoCarreras
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'CodigoEmpleado' => 'required',
		'Apellidos' => 'required',
		'Nombres' => 'required',
		'usuario_id' => 'required',
		'FechaIngreso' => 'required',
		'UsuarioModifica' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['CodigoEmpleado','Apellidos','Nombres','usuario_id','FechaIngreso','UsuarioModifica'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleadoCarreras()
    {
        return $this->hasMany('App\Models\EmpleadoCarrera', 'id_empleado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'usuario_id');
    }
    

}
