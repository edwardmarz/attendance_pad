<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::latest()->paginate(5);
        return view('admin.course.index', compact('courses'))
            ->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'kode_matkul'   => 'required',
            'desc'          => 'required',
            'day'           => 'required',
            'start_time'    => 'required',
            'end_time'      => 'required'

          ]);
        // store in the database
        
        Course::create($request->all());
   
        return redirect()->route('admin.courses.index')
                        ->with('success','Course created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('admin.course.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $this->validate($request, [
            'name'          => 'required',
            'kode_matkul'   => 'required',
            'desc'          => 'required',
            'day'           => 'required',
            'start_time'    => 'required',
            'end_time'      => 'required'

          ]);
          $course->update($request->all());
    
          return redirect()->route('admin.courses.index')
                          ->with('success','Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
  
        return redirect()->route('admin.courses.index')
                        ->with('success','Course deleted successfully');
    }
}
