<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kfcate extends Model
{
    //指定表名
    protected $table = 'kfcate';
    public $timestamps = false;

    //黑名单
    protected $guarded = [''];
}
