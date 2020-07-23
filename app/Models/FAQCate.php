<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQCate extends Model
{
    //指定表名
    protected $table = 'faqcate';
    public $timestamps = false;

    //黑名单
    protected $guarded = [''];
}
