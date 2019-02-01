<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class TestController extends Controller
{
    public function index(){
//        return Carbon::now()->startOfDay()->toDateTimeString();
        return 1233210111;
    }
}
