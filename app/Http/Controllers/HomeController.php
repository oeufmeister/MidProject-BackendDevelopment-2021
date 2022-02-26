<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserCourse;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function home(){
        return view('courses');
    }

    public function store(Request $request)
    {
        // dd($request);
        $userId = Auth::id();
        // dd($userId);
        $data = $request->all();
        $data['course_name'] = $request->input('course');
        UserCourse::create($data);
        return redirect()->route('course.home');
    }
}
