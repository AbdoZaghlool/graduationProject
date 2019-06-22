<?php

namespace App\Http\Services;

use Illuminate\Http\Request;

class InstituteService
{
    /**
     * @param Request $request
     * @return boolean
     */
    public function attempt(Request $request)
    {
        return auth()->guard("institutes")->attempt(["email" => $request->input("email"), "password" => $request->input("password")]);
    }
}
