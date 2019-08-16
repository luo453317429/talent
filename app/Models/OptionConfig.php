<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OptionConfig extends Model
{
    protected $fillable = [
        'option_value',
        'type_number',
        'order'
    ];

    //  获取所属行业配置选项
    public static function getOwnIndustryOptions()
    {
        $options = DB::table('option_configs')->select('id', 'option_value as text')->where('type_number', 1)->get();
        $ownIndustryOption = [];
        foreach ($options as $option) {
            $ownIndustryOption[$option->text] = $option->text;
        }
        return $ownIndustryOption;
    }

    //  获取企业等级配置选项
    public static function getEnterpriseGradeOptions()
    {
        $options = DB::table('option_configs')->select('id', 'option_value as text')->where('type_number', 2)->get();
        $enterpriseGradeOption = [];
        foreach ($options as $option) {
            $enterpriseGradeOption[$option->text] = $option->text;
        }
        return $enterpriseGradeOption;
    }

    public static function getEnterpriseTypeOptions()
    {
        $options = DB::table('option_configs')->select('id', 'option_value as text')->where('type_number', 3)->get();
        $enterpriseTypeOption = [];
        foreach ($options as $option) {
            $enterpriseTypeOption[$option->text] = $option->text;
        }
        return $enterpriseTypeOption;
    }

    public static function getSubdividingAreaOptions()
    {
        $options = DB::table('option_configs')->select('id', 'option_value as text')->where('type_number', 4)->get();
        $subdividingAreaOption = [];
        foreach ($options as $option) {
            $subdividingAreaOption[$option->text] = $option->text;
        }
        return $subdividingAreaOption;
    }

    public static function getSpecialMarkerOptions()
    {
        $options = DB::table('option_configs')->select('id', 'option_value as text')->where('type_number', 5)->get();
        $specialMarkerOption = [];
        foreach ($options as $option) {
            $specialMarkerOption[$option->text] = $option->text;
        }
        return $specialMarkerOption;
    }

    public static function getContactGradeOptions()
    {
        $options = DB::table('option_configs')->select('id', 'option_value as text')->where('type_number', 6)->get();
        $contactGradeOption = [];
        foreach ($options as $option) {
            $contactGradeOption[$option->text] = $option->text;
        }
        return $contactGradeOption;
    }

    public static function getGenderOptions()
    {
        $options = DB::table('option_configs')->select('id', 'option_value as text')->where('type_number', 7)->get();
        $genderOption = [];
        foreach ($options as $option) {
            $genderOption[$option->text] = $option->text;
        }
        return $genderOption;
    }

    public static function getFunctionDistributionOptions()
    {
        $options = DB::table('option_configs')->select('id', 'option_value as text')->where('type_number', 8)->get();
        $functionDistributionOption = [];
        foreach ($options as $option) {
            $functionDistributionOption[$option->text] = $option->text;
        }
        return $functionDistributionOption;
    }

    public static function getResourceOptions()
    {
        $options = DB::table('option_configs')->select('id', 'option_value as text')->where('type_number', 9)->get();
        $resourceOption = [];
        foreach ($options as $option) {
            $resourceOption[$option->text] = $option->text;
        }
        return $resourceOption;
    }
}
