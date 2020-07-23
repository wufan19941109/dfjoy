<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class leak extends Model
{
    //指定表名
    protected $table = 'leak';
    public $timestamps = false;

    //黑名单
    protected $guarded = [''];
}
