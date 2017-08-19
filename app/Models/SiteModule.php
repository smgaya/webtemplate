<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SiteModule
 */
class SiteModule extends Model
{
    protected $table = 'site_module';

    public $timestamps = false;

    protected $fillable = [
        'module_type _id',
        'name',
        'description'
    ];

    protected $guarded = [];

        
}