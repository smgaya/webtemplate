<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AdminUser
 */
class AdminUser extends Model
{
    protected $table = 'admin_users';

    public $timestamps = true;

    protected $fillable = [
        'username',
        'password',
        'name',
        'avatar',
        'remember_token'
    ];

    protected $guarded = [];

        
}