<?php

namespace App\Admin\Extensions;

use Encore\Admin\Grid\Exporters\ExcelExporter;

class PostsExporter extends ExcelExporter
{
    protected $fileName = 'customers.xlsx';

    protected $columns = [
        'full_name' => '企业名称-中文全称',
        'simple_name' => '企业名称-中文简称',
        'full_name2' => 'Company Full Name',
        'simple_name2' => 'Company Simple Name',
        'own_industry' => '所属行业',
        'enterprise_grade' => '企业等级',
        'enterprise_type' => '企业类型',
        'enterprise_type2' => '企业类型Ⅱ',
        'subdividing_area' => '细分领域',
        'subdividing_area2' => '细分领域Ⅱ',
        'company_website' => '公司官网',
        'company_phone' => '公司前台电话',
        'company_introduction' => '公司简介',
        'special_marker' => '特殊标记',
        'contact_grade' => '联系人等级',
        'name' => '姓名-中文',
        'name2' => '姓名-英文',
        'nickname' => '称谓',
        'gender' => '性别',
        'department' => '部门',
        'department2' => '部门-英文',
        'position' => '职位',
        'position2' => '职位-英文',
        'email' => '邮箱-工作',
        'email2' => '邮箱',
        'cellphone' => '手机',
        'telephone' => '固话',
        'function_distribution' => '职能分布',
        'we_chat' => '微信',
        'qq' => 'QQ',
        'other_contact' => '其它联系方式',
        'resource' => '来源',
        'address' => '地址',
        'remark' => '备注'
    ];
}
