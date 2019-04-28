<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use App\Model\Log;
use Encore\Admin\Grid;

class TestController extends Controller
{
    public function index(){
        return view('admin.test');
    }
    public function index2(Grid $grid)
    {
        $grid->model(Log::class)->where('id', '>', 100);

        $grid->id('ID')->sortable();

// 第二列显示title字段，由于title字段名和Grid对象的title方法冲突，所以用Grid的column()方法代替
        $grid->column('path');

// 第三列显示director字段，通过display($callback)方法设置这一列的显示内容为users表中对应的用户名
        /*$grid->director()->display(function($userId) {
            return User::find($userId)->name;
        });*/

// 第四列显示为describe字段
        $grid->describe();

// 第五列显示为rate字段
        $grid->rate();

// 第六列显示released字段，通过display($callback)方法来格式化显示输出
        /*$grid->released('上映?')->display(function ($released) {
            return $released ? '是' : '否';
        });*/

// 下面为三个时间字段的列显示
//        $grid->release_at();
        $grid->created_at();
        $grid->updated_at();

// filter($callback)方法用来设置表格的简单搜索框
        $grid->filter(function ($filter) {

            // 设置created_at字段的范围查询
            $filter->between('created_at', 'Created Time')->datetime();
        });
    }
}
