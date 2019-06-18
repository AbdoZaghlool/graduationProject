<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        return view('pages.index');

    }public function centers(){
        return view('pages.center');
    }

    public function courses(){
        return view('pages.course');
    }

    public function diploma(){
        return view('pages.diploma');
    }

    public function certification(){
        return view('pages.certification');
    }

    public function photo(){

        return view('userProfile.changePhoto');

        }
    public function info(){

        return view('userProfile.changeInfo');

        }
    public function privacy(){

        return view('userProfile.changePrivacy');

        }

}
