<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LibroCaracteristica
 *
 * @property $libro_id
 * @property $etiqueta_id
 * @property $valor
 * @property $created_at
 * @property $updated_at
 *
 * @property Etiqueta $etiqueta
 * @property Libro $libro
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class LibroCaracteristica extends Model
{
    
    static $rules = [
		'libro_id' => 'required',
		'etiqueta_id' => 'required',
		'valor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['libro_id','etiqueta_id','valor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function etiqueta()
    {
        return $this->hasOne('App\Models\Etiqueta', 'id', 'etiqueta_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function libro()
    {
        return $this->hasOne('App\Models\Libro', 'id', 'libro_id');
    }
    

}
