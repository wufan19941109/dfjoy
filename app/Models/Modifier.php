<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modifier extends Model
{
    //指定表名
    protected $table = 'modifier';
    public $timestamps = false;

    //黑名单
    protected $guarded = [''];
}
