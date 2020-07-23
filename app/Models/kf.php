<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kf extends Model
{
    //指定表名
    protected $table = 'kf';
    public $timestamps = false;

    //黑名单
    protected $guarded = [''];
}
