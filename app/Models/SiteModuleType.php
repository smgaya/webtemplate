<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SiteModuleType
 */
class SiteModuleType extends Model
{
    protected $table = 'site_module_type';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description'
    ];

    protected $guarded = [];

        
}