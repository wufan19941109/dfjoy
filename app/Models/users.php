<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{

    //指定表名
    protected $table = 'employee';
    public $timestamps = false;

    //黑名单
    protected $guarded = [''];

}
