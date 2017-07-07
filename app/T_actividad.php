<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T_actividad extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 't_actividad';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_evento', 'titulo', 'descripcion', 'inicio', 'fin'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['inicio', 'fin'];

}