<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function courseRequest(){
        return view('pages.courserequest');
    }

    public function news(){
        return view('pages.news');
    }

    
    public function newsdetail(){
        return view('pages.newsdetail');
    }
}