<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index(){
        // view 파일 호출
        return view('testview')->with('name','미스터 존');
    }
}
