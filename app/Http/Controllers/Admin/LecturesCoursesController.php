<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lecture;
use App\Grade;
use App\Course;

class LecturesCoursesController extends Controller
{
    public function create(){
        $grades = Grade::All();
        $course = Course::All();
        return view('admin.lectures_courses.create')->with(['grades' => $grades, 
        'courses' => $course]);
    }
}
