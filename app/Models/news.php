<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    //指定表名
        protected $table = 'news';
    public $timestamps = false;

    //黑名单
    protected $guarded = [''];
}
