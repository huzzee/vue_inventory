<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'password','profile_image','contact_no',
        'email','gender','status','designation_id','department_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function designations()
    {
        return $this->belongsTo('App\models\Designation','designation_id');
    }


    public function my_departments()
    {
        return $this->belongsTo('App\models\MyDepartment','department_id');
    }
}
