<?php

namespace App\Http\Controllers;

use App\Models\Course;

class PageController extends Controller
{
    public function home(){
        return view("index");
    }

    public function course(Course $course){
        return view("course",[
            "course"=>$course
        ]);
    }
}
