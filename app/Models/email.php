<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class email extends Model
{
    //指定表名
    protected $table = 'email';
    public $timestamps = false;

    //黑名单
    protected $guarded = [''];
}
