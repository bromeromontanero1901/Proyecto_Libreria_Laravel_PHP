<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegistroAsignacion
 *
 * @property $id
 * @property $libro_id
 * @property $fecha_solicitud
 * @property $fecha_asignacion
 * @property $fecha_entrega
 * @property $user_solicitud
 * @property $user_prestamo
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro $libro
 * @property User $user
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RegistroAsignacion extends Model
{
    
    static $rules = [
		'libro_id' => 'required',
		'fecha_solicitud' => 'required',
		'fecha_asignacion' => 'required',
		'fecha_entrega' => 'required',
		'user_solicitud' => 'required',
		'user_prestamo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['libro_id','fecha_solicitud','fecha_asignacion','fecha_entrega','user_solicitud','user_prestamo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function libro()
    {
        return $this->hasOne('App\Models\Libro', 'id', 'libro_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_solicitud');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user2()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_prestamo');
    }
    

}
