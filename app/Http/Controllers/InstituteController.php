<?php

namespace App\Http\Controllers;

use App\Http\Requests\Institutes\LoginRequest;
use App\Http\Services\InstituteService;
use Illuminate\Http\Request;
use View;

class InstituteController extends Controller
{
    /**
     * @var InstituteService
     */
    private $instituteService;

    /**
     * InstituteController constructor.
     */
    public function __construct(InstituteService $instituteService)
    {
        $this->middleware("auth:admin", ["only"=> 'index', 'edit']);
        $this->instituteService = $instituteService;
    }

    public function index()
    {
        return View::make("institutes.index");
    }

    public function register()
    {
        return View::make("institute.auth.register");
    }

    public function login(){
        return View::make("institutes.auth.login");
    }

    public function attempt(LoginRequest $request){
        if ($this->instituteService->attempt($request)){
            return redirect(route("courses.index"));
        } else {
            return "not auth";
        }
    }
}
