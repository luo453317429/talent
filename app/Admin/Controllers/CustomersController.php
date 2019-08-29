<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Post\ImportPost;
use App\Admin\Extensions\PostsExporter;
use App\Models\Customer;
use App\Models\OptionConfig;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Facades\Admin;

class CustomersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '客户管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Customer);

        $grid->model()->orderBy('id', 'desc');

        $grid->column('id', 'ID')->sortable();
        $grid->column('simple_name', '企业名称-中文简称');
        $grid->column('name', '姓名-中文');
        $grid->column('position', '职位');
        $grid->column('email', '邮箱-工作');
        $grid->column('cellphone', '手机');
        $grid->column('full_name', '企业名称-中文全称')->hide();
        $grid->column('full_name2', 'Company Full Name')->hide();
        $grid->column('simple_name2', 'Company Simple Name')->hide();
        $grid->column('own_industry', '所属行业')->hide();
        $grid->column('enterprise_grade', '企业等级')->hide();
        $grid->column('enterprise_type', '企业类型');
        $grid->column('enterprise_type2', '企业类型Ⅱ')->hide();
        $grid->column('subdividing_area', '细分领域');
        $grid->column('subdividing_area2', '细分领域Ⅱ')->hide();
        $grid->column('company_website', '公司官网')->hide();
        $grid->column('company_phone', '公司前台电话')->hide();
        $grid->column('company_introduction', '公司简介')->hide();
        $grid->column('special_marker', '特殊标记')->hide();
        $grid->column('contact_grade', '联系人等级')->hide();
        $grid->column('nickname', '称谓');
        $grid->column('name2', '姓名-英文');
        $grid->column('gender', '性别')->hide();
        $grid->column('department', '部门');
        $grid->column('department2', '部门-英文');
        $grid->column('position2', '职位-英文');
        $grid->column('email2', '邮箱');
        $grid->column('telephone', '固话');
        $grid->column('function_distribution', '职能分布')->hide();
        $grid->column('we_chat', '微信');
        $grid->column('qq', 'QQ');
        $grid->column('other_contact', '其它联系方式')->hide();
        $grid->column('resource', '来源');
        $grid->column('address', '地址');
        $grid->column('remark', '备注')->hide();
        $grid->column('updated_at', '更新时间');

        $grid->fixColumns(7);

        $grid->actions(function ($actions) {
            $actions->disableDelete();
        });

        $grid->batchActions(function ($batch) {
            $batch->disableDelete();
        });

        $grid->filter(function ($filter) {
            $filter->disableIdFilter();

            $filter->like('simple_name', '企业名称-中文简称');
            $filter->like('name', '姓名-中文');
        });

        if(Admin::user()->id == 1) {
            $grid->tools(function ($tools) {
                $tools->append(new ImportPost());
            });
        }

        $grid->exporter(new PostsExporter());

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Customer::findOrFail($id));

        $show->field('full_name', '企业名称-中文全称');
        $show->field('simple_name', '企业名称-中文简称');
        $show->field('full_name2', 'Company Full Name');
        $show->field('simple_name2', 'Company Simple Name');
        $show->field('own_industry', '所属行业');
        $show->field('enterprise_grade', '企业等级');
        $show->field('enterprise_type', '企业类型');
        $show->field('enterprise_type2', '企业类型Ⅱ');
        $show->field('subdividing_area', '细分领域');
        $show->field('subdividing_area2', '细分领域Ⅱ');
        $show->field('company_website', '公司官网');
        $show->field('company_phone', '公司前台电话');
        $show->field('company_introduction', '公司简介');
        $show->field('special_marker', '特殊标记');
        $show->field('contact_grade', '联系人等级');
        $show->field('name', '姓名-中文');
        $show->field('name2', '姓名-英文');
        $show->field('nickname', '称谓');
        $show->field('gender', '性别');
        $show->field('department', '部门');
        $show->field('department2', '部门-英文');
        $show->field('position', '职位');
        $show->field('position2', '职位-英文');
        $show->field('email', '邮箱-工作');
        $show->field('email2', '邮箱');
        $show->field('cellphone', '手机');
        $show->field('telephone', '固话');
        $show->field('function_distribution', '职能分布');
        $show->field('we_chat', '微信');
        $show->field('qq', 'QQ');
        $show->field('other_contact', '其它联系方式');
        $show->field('resource', '来源');
        $show->field('address', '地址');
        $show->field('remark', '备注');
        $show->field('created_at', '创建时间');
        $show->field('updated_at', '更新时间');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Customer);

        $form->text('full_name', '企业名称-中文全称');
        $form->text('simple_name', '企业名称-中文简称');
        $form->text('full_name2', 'Company Full Name');
        $form->text('simple_name2', 'Company Simple Name');
        $form->select('own_industry', '所属行业')->options(OptionConfig::getOwnIndustryOptions());
        $form->select('enterprise_grade', '企业等级')->options(OptionConfig::getEnterpriseGradeOptions());
        $form->select('enterprise_type', '企业类型')->options(OptionConfig::getEnterpriseTypeOptions());
        $form->select('enterprise_type2', '企业类型Ⅱ')->options(OptionConfig::getEnterpriseTypeOptions());
        $form->select('subdividing_area', '细分领域')->options(OptionConfig::getSubdividingAreaOptions());
        $form->select('subdividing_area2', '细分领域Ⅱ')->options(OptionConfig::getSubdividingAreaOptions());
        $form->text('company_website', '公司官网');
        $form->text('company_phone', '公司前台电话');
        $form->textarea('company_introduction', '公司简介');
        $form->select('special_marker', '特殊标记')->options(OptionConfig::getSpecialMarkerOptions());
        $form->select('contact_grade', '联系人等级')->options(OptionConfig::getContactGradeOptions());
        $form->text('name', '姓名-中文')->creationRules(['required','unique:customers'])->updateRules(['required',"unique:customers,name,{{id}}"]);
        $form->text('name2', '姓名-英文');
        $form->text('nickname', '称谓');
        $form->select('gender', '性别')->options(OptionConfig::getGenderOptions());
        $form->text('department', '部门');
        $form->text('department2', '部门-英文');
        $form->text('position', '职位');
        $form->text('position2', '职位-英文');
        $form->email('email', '邮箱-工作');
        $form->email('email2', '邮箱');
        $form->text('cellphone', '手机');
        $form->text('telephone', '固话');
        $form->select('function_distribution', '职能分布')->options(OptionConfig::getFunctionDistributionOptions());
        $form->text('we_chat', '微信');
        $form->text('qq', 'QQ');
        $form->text('other_contact', '其它联系方式');
        $form->select('resource', '来源')->options(OptionConfig::getResourceOptions());
        $form->text('address', '地址');
        $form->textarea('remark', '备注');

        $form->footer(function ($footer) {
            $footer->disableReset();

            $footer->disableViewCheck();

            $footer->disableEditingCheck();
        });

        return $form;
    }
}
