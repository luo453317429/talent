<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UsersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '用户管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User);

        $grid->column('id', 'ID');
        $grid->column('name', '用户名');
        $grid->column('email', '邮箱');
        $grid->column('email_verified_at', '已验证邮箱')->display(function ($value) {
            return $value ? '是':'否';
        });
        $grid->column('created_at', '注册时间');

        $grid->actions(function ($actions) {
            $actions->disableDelete();
        });

        $grid->batchActions(function ($batch) {
            $batch->disableDelete();
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
        $show = new Show(User::findOrFail($id));

        $show->field('id', 'ID');
        $show->field('name', '用户名');
        $show->field('email', '邮箱');
        $show->field('email_verified_at', '邮箱验证时间');
        $show->field('created_at', '注册时间');
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
        $form = new Form(new User);

        $form->text('name', '用户名')->rules('required|string|max:255');
        $form->email('email', '邮箱')->creationRules(['required','string','email','max:255','unique:users'])->updateRules(['required','string','email','max:255',"unique:users,email,{{id}}"]);
        $form->datetime('email_verified_at', '邮箱验证时间')->default(date('Y-m-d H:i:s'));
        $form->password('password', '密码')->rules('required|string|min:8|confirmed');
        $form->password('password_confirmation', '重复密码');
        $form->ignore('password_confirmation');

        $form->saving(function (Form $form) {
            $form->password = Hash::make($form->password);
        });

        return $form;
    }
}
