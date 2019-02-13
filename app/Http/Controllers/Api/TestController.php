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
        //打印sql
        DB::enableQueryLog();
        $user = User::find(1);
        $query = DB::getQueryLog();
        var_dump($query);
//        return Carbon::now()->startOfDay()->toDateTimeString();
        return '先大后小，思路为先，实验为辅。';
    }
}
