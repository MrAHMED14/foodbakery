<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteConfiguration extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'site_email',
        'site_phone',
        'site_address',
        'currency_code',
        'currency_symbol',
        'currency_position',
        'site_favicon',
        'meta_description',
        'meta_keywords',
        'is_maintenance_mode',
    ];
}
