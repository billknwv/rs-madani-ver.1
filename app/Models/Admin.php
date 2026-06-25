<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Admin extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'admin';

    protected $fillable = [
        'nama', 'email', 'password', 'foto'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
