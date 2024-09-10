<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // 追加

class TestController extends Controller
{
    public function topView()
    {
        return view('top');
    }
    
    public function helloWorld()
    {
        return view('helloworld');
    }
}
