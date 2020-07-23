<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class miniReservation extends Model
{
    //指定表名
    protected $table = 'miniReservation';
    public $timestamps = false;

    //黑名单
    protected $guarded = [''];
}
