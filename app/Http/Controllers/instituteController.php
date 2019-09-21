<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Institute;

class instituteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:institute');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inst=Institute::courses()->all();

       // $courses = Course::all();
        return view('center.index')->with('inst', $inst);
    }
}
