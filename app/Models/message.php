<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class message extends Model
{

    //指定表名
    protected $table = 'message';
    public $timestamps = false;

    //黑名单
    protected $guarded = [''];



}
