<?php

namespace App\Http\Controllers\tools;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ORCController extends Controller
{
    public function index(){
        return view('tools/ORC/index');
    }
}
