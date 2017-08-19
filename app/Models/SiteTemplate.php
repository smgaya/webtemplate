<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SiteTemplate
 */
class SiteTemplate extends Model
{
    protected $table = 'site_template';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'Auther',
        'Published'
    ];

    protected $guarded = [];

        
}