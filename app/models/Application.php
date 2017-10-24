<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'application_name'
    ];

    public function designations()
    {
        return $this->hasMany('App\models\Designation','id');
    }
}
