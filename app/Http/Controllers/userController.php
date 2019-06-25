<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class userController extends Controller
{

    public function city()
    {
        return $this->belongsTo('App\City','city_id','city_id');
    }

    public function photo()
    {

        return view('userProfile.changePhoto');
    }
    public function info()
    {

        return view('userProfile.changeInfo');
    }
    public function privacy()
    {

        return view('userProfile.changePrivacy');
    }

    public function updateAccount(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'newPassword' => 'required',
            'rePassword' => 'required',
        ]);

        $user = Auth::user();
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('newPassword'));
        $user->save();

        return view('userProfile.dashboard')->with('user', $user);
    }
    public function updatePhoto(Request $request)
    {

        if ($request->hasFile('photo')) {
            $avatar = $request->file('photo');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('storage/uploads/' . $filename));

            $user = Auth::user();
            $user->photo = $filename;
            $user->save();

            return view('userProfile.dashboard')->with('user', $user);
        }
    }





    public function updateInfo(Request $request)
    {
        $this->validate($request, [
            ''
        ]);


        $user = Auth::user();
        return view('userProfile.dashboard')->with('user', $user);
    }
}
