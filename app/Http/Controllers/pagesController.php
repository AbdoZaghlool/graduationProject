<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function centers()
    {
        return view('pages.center');
    }

}
