<?php
/**
 * Created by PhpStorm.
 * User: barbb
 * Date: 11/07/2017
 * Time: 12:23
 */
namespace App;

use Jenssegers\Date\Date;

trait DatesTranslator{

    public function getCreatedAtAttribute($date){

        return new Date($date);

    }

    public function getUpdatedAtAttribute($date){

        return new Date($date);

    }



}