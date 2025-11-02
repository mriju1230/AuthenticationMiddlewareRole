<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Admin extends User
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
        'photo',
        'admin_role',
        'status',
    ];

}
