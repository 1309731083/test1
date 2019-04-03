<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class TestController extends Controller
{
    public function index(){
        return User::find(1);
        $res = $res2 = '╰❥ 燕? ࿐✰';
        $content = preg_replace_callback('/./u',
            function (array $match) {
                return strlen($match[0]) >= 4 ? '' : $match[0];
            },
            $res);
        echo $res2."\n".$content;exit;
        //打印sql
        DB::enableQueryLog();
        $user = User::find(1);
        $query = DB::getQueryLog();
        var_dump($query);
//        return Carbon::now()->startOfDay()->toDateTimeString();
//        return '先大后小，思路为先，实验为辅。';
        return $user->id;
    }

    public function info(){
        return phpinfo();
    }
}
