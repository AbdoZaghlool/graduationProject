<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class InstituteController extends Controller
{

    /**
     * InstituteController constructor.
     */
    public function __construct()
    {
        $this->middleware("auth:admin", ["only"=> 'index', 'edit']);
    }

    public function index()
    {
        return View::make("institutes.index");
    }

    public function create()
    {

        return View::make("institute.auth.register");
    }
}
