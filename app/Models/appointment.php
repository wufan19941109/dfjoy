<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    //指定表名
    protected $table = 'appointment';
    public $timestamps = false;

    //黑名单
    protected $guarded = [''];
}
