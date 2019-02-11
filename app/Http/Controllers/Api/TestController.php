<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class TestController extends Controller
{
    public function index(){
//        return Carbon::now()->startOfDay()->toDateTimeString();
        return '先大后小，思路为先，实验为辅。';
    }
}
