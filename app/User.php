<?php

namespace App;

use App\Toolbox\FilterAppends;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, FilterAppends;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes to be appended to json serialized response
     * @var [type]
     */
    protected $appends = [
        'full_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }
}
