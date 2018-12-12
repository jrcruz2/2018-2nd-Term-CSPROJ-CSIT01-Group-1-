<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('faculty.home');
    }

    public function showAddClass()
    {
        return view('faculty.add-class');
    }

    public function showClasses()
    {
        return view('faculty.view-classes');
    }
}
