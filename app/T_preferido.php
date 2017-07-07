<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T_preferido extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 't_preferido';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['t_parroquia_id', 't_cliente_id_cliente'];

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