<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    //指定表名
    protected $table = 'faq';
    public $timestamps = false;

    //黑名单
    protected $guarded = [''];
}
