<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'full_name',
        'simple_name',
        'full_name2',
        'simple_name2',
        'own_industry',
        'enterprise_grade',
        'enterprise_type',
        'enterprise_type2',
        'subdividing_area',
        'subdividing_area2',
        'company_website',
        'company_phone',
        'company_introduction',
        'special_marker',
        'contact_grade',
        'name',
        'name2',
        'nickname',
        'gender',
        'department',
        'department2',
        'position',
        'position2',
        'email',
        'email2',
        'cellphone',
        'telephone',
        'function_distribution',
        'we_chat',
        'qq',
        'other_contact',
        'resource',
        'address',
        'remark'
    ];
}
