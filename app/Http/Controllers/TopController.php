<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function topView()
    {
        // ここに処理を記述します
        return view('top');
    }
}

