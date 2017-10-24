<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $fillable= [
        'designation_name','application_id','status','is_admin'
    ];

    public function applications()
    {
        return $this->belongsTo('App\models\Application','application_id');
    }

    public function users()
    {
        return $this->hasMany('App\User','id');
    }
}
