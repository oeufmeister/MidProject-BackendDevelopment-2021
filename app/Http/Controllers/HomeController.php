<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserCourse;
use App\Course;
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
        $data = Course::all();
        $user_course = UserCourse::all();
        // $email = User::where('id','=',$value) -> first();
        // $course_id = User::where('course_id', '!=')
        // return view('courses');
        return view('courses', compact('data'));

    }

    public function store(Request $request)
    {
        // dd($request);
        $userId = Auth::id();
        // dd($userId);
        // $data = $request->all();
        // $data['course_id'] = $request->input('course');
        // $data['user_id'] = $userId;
        // UserCourse::create($data);
        
        $input = new UserCourse();
        $input->user_id = $userId;
        $input->course_id = $request['courseopt'];
        $input->save();
        return redirect()->route('course.home');
    }
}
