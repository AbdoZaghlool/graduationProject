<?php

namespace App\Http\Controllers;
use InstituteAuth;


use Illuminate\Http\Request;
use App\Course;
use App\Institute;
use App\City;
use App\Http\Controllers\Auth;
use Illuminate\Support\Collection;

class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $var = new Collection();
        foreach(Institute::all() as $institute){
            $var =$var->merge($institute->courses()->get());
        }


        //dd($var);
        return view('course.index')->with('var',$var);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city = City::all()->pluck('city_id','city_name');
        return view('course.create')->with('city',$city);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $course= new Course;
        $course->course_name=$request->input('name');
        $course->course_desc=$request->input('description');
        //send the id of auth center to save it's data to DB

        $adminId=auth()->guard('institute')->user()->id;
        Institute::find($adminId)->cities()->save($course,['city_id'=> $request->input('address'),
                                                    'branch_name'=>$request->input('value')
                                                    ]);

        Institute::find($adminId)->courses()->save($course,['duration'=>$request->input('duration'),
                                                    'co_sc_sDate'=>$request->input('start-date'),
                                                    'trainer'=>$request->input('trainer'),
                                                    'co_sc_price'=>$request->input('price'),
                                                    ]);


        return redirect('/centers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
