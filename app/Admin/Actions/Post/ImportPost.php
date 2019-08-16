<?php

namespace App\Admin\Actions\Post;

use App\Admin\Extensions\CustomersImport;
use Maatwebsite\Excel\Facades\Excel;
use Encore\Admin\Actions\Action;
use Illuminate\Http\Request;

class ImportPost extends Action
{
    public $name = '导入数据';

    protected $selector = '.import-post';

    public function handle(Request $request)
    {
        // 下面的代码获取到上传的文件，然后使用`maatwebsite/excel`等包来处理上传文件，保存到数据库
        try {
            Excel::import(new CustomersImport(), $request->file('file'));

            return $this->response()->success('导入完成！')->refresh();
        } catch (\Exception $e) {
            return $this->response()->error('产生错误：'.$e->getMessage());
        }
    }

    public function form()
    {
        $this->file('file', '请选择文件');
    }

    public function html()
    {
        return <<<HTML
        <a class="btn btn-sm btn-default import-post">导入数据</a>
HTML;
    }
}
