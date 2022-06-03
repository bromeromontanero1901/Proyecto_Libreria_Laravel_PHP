<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $id
 * @property $isnb
 * @property $titulo
 * @property $estado
 * @property $version
 * @property $num_ejemplares
 * @property $fecha_elaborado
 * @property $created_at
 * @property $updated_at
 *
 * @property AltaBajaEjemplare[] $altaBajaEjemplares
 * @property LibroCaracteristica[] $libroCaracteristicas
 * @property RegistroAsignacion[] $registroAsignacions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    
    static $rules = [
		'isnb' => 'required',
		'titulo' => 'required',
		'estado' => 'required',
		'version' => 'required',
		'num_ejemplares' => 'required',
		'fecha_elaborado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['isnb','titulo','estado','version','num_ejemplares','fecha_elaborado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function altaBajaEjemplares()
    {
        return $this->hasMany('App\Models\AltaBajaEjemplare', 'libro_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libroCaracteristicas()
    {
        return $this->hasMany('App\Models\LibroCaracteristica', 'libro_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registroAsignacions()
    {
        return $this->hasMany('App\Models\RegistroAsignacion', 'libro_id', 'id');
    }
    

}
