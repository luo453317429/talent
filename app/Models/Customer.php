<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'full_name',
        'full_name2',
        'simple_name',
        'simple_name2',
        'own_industry',
        'enterprise_grade',
        'enterprise_type',
        'subdividing_area',
        'enterprise_type2',
        'subdividing_area2',
        'company_website',
        'company_phone',
        'company_introduction',
        'contact_grade',
        'name',
        'nickname',
        'name2',
        'department',
        'position',
        'department2',
        'position2',
        'email',
        'cellphone',
        'email2',
        'telephone',
        'function_distribution',
        'we_chat',
        'other_contact',
        'qq',
        'resource',
        'address',
        'remark'
    ];
    protected $casts = [
        'special_marker',
        'gender'
    ];
}
