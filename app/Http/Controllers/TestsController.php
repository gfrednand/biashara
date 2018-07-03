<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test;


class TestsController extends Controller
{
    //
    public function testss(){
        return "ff";
    }

    public function index(){
    $names=test::all();
        
       // $title = "test";

        
        return view('test.test')->with('name',$names);
    }
}
