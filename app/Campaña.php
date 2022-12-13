<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Campaña
 *
 * @property $id
 * @property $ubicacion
 * @property $tipo_sangre
 * @property $unidad_requerida
 * @property $descripcion
 * @property $nombre_campañas
 * @property $user_id2
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Campaña extends Model
{
    
    static $rules = [
		'ubicacion' => 'required',
		'tipo_sangre' => 'required',
		'unidad_requerida' => 'required',
		'descripcion' => 'required',
		'nombre_campañas' => 'required',
		'user_id2' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ubicacion','tipo_sangre','unidad_requerida','descripcion','nombre_campañas','user_id2'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id2');
    }
    

}
