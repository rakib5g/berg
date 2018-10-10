<?php

namespace App;

use App\BlogPost;
use App\FinancialAcademy;
use App\financialPlanning;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function blogPosts()
    {
        return $this->hasMany('App\BlogPost');
    }

    public function financialacademys()
    {
        return $this->hasMany('App\FinancialAcademy');
    }
    public function financialplannings()
    {
        return $this->hasMany('App\financialPlanning');
    }
}
