<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AltaBajaEjemplare
 *
 * @property $id
 * @property $libro_id
 * @property $cantidad_ejemplares
 * @property $tipo
 * @property $motivo
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro $libro
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AltaBajaEjemplare extends Model
{
    
    static $rules = [
		'libro_id' => 'required',
		'cantidad_ejemplares' => 'required',
		'tipo' => 'required',
		'motivo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['libro_id','cantidad_ejemplares','tipo','motivo'];

    public function getCantidad()
    {
      $contador=(int)$fillable['cantidad_ejemplares'];
      if($fillable['tipo']=='ingreso')
      {
        $contador++;
      }
      else if($fillable['tipo']=='egreso')
      {
        $contador--;
      }
      $fillable['cantidad_ejemplares']=(string)$contador;
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function libro()
    {
        return $this->hasOne('App\Models\Libro', 'id', 'libro_id');
    }
    

}
