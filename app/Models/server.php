<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class server extends Model
{
    //指定表名
    protected $table = 'server';
    public $timestamps = false;

    //黑名单
    protected $guarded = [''];
}
