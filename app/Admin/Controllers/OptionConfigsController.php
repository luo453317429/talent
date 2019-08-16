<?php

namespace App\Admin\Controllers;

use App\Models\OptionConfig;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OptionConfigsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '选项配置';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OptionConfig);

        $grid->column('id', 'ID');
        $grid->column('option_value', '选项');
        $grid->column('type_number', '类型');
        $grid->column('order', '排序');
        $grid->column('created_at', '创建时间');
        $grid->column('updated_at', '更新时间');

        $grid->actions(function ($actions) {
            $actions->disableDelete();
        });

        $grid->batchActions(function ($batch) {
            $batch->disableDelete();
        });

        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('type_number', '类型');
        });

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
        $show = new Show(OptionConfig::findOrFail($id));

        $show->field('id', 'ID');
        $show->field('option_value', '选项');
        $show->field('type_number', '类型');
        $show->field('order', '排序');
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
        $form = new Form(new OptionConfig);

        $form->text('option_value', '选项')->rules('required');
        $form->number('type_number', '类型')->min(0)->max(100)->default(0)->help("1：所属行业 | 2：企业等级 | 3：企业类型 | 4：细分领域 | 5：特殊标记 | 6：联系人等级 | 7：性别 | 8：职能分布 | 9：来源");
        $form->number('order', '排序')->min(1)->max(1000)->default(100);

        return $form;
    }
}
