<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cases extends Model
{
    //指定表名
    protected $table = 'case';
    public $timestamps = false;

    //黑名单
    protected $guarded = [''];
}
