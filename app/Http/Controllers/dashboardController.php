<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Image;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $user_id = auth()->user()->id;
        $user=user::Find($user_id);
        return view('userProfile.dashboard')->with('user',$user);
    }

    

}
