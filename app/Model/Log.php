<?php
/**
 * Created by PhpStorm.
 * User: wangzhiqiang
 * Date: 2019/4/15
 * Time: 14:39
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'admin_operation_log';
    protected $guarded = [];

}