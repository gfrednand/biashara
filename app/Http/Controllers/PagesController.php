<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title='Biashara';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title='About Us';
        return view('pages.about')->with('title',$title);
    }

    public function sale(){
        return view('pages.sale');
    }
    public function stock(){
        return view('pages.stock');
    }
    public function product(){
        return view('pages.product');
    }
    public function users(){
        return view('pages.users');
    }

}
