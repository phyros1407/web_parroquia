<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T_misa_horario extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 't_misa_horario';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_dia', 'inicio_misa', 'fin_misa', 'id_parroquia'];

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