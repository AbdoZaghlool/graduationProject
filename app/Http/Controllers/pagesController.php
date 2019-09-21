<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use App\Institute;
use App\Course;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function centers()
    {
        return view('center.index');
    }
    public function profile()
    {
        return view('center.profile');
    }
    public function search(Request $request)
    {

        $keyword = $request->search;

        //$var = new Collection;
        $courses = Course::where('course_name', 'like', '%' . $keyword . '%')->get();
        $length = count($courses);


        return view('pages.searchResult', compact('courses', 'keyword', 'length'));
    }
}
