<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Etiqueta
 *
 * @property $id
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property LibroCaracteristica[] $libroCaracteristicas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Etiqueta extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libroCaracteristicas()
    {
        return $this->hasMany('App\Models\LibroCaracteristica', 'etiqueta_id', 'id');
    }
    

}
