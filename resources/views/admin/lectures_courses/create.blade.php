@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Course</h2>
            </div>
        </div>
    </div>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">New Lectures Course</div>

                <div class="card-body">
                    <form action="{{ route('admin.lectures_courses.store') }}" method="POST">
                        @csrf
                    
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Grades:</strong> 
                                    <select name="grades" id="grades">
                                        @foreach($grades as $grade)
                                        <option value="{{$grade->id}}">{{$grade->name}}</option>                                        
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Course:</strong>
                                    
                                    <select name="courses" id="courses">
                                        @foreach($courses as $course)
                                        <option value="{{$course->id}}">{{$course->name}}</option>                                        
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                <div class="form-group">
                                    <a class="btn btn-primary" href="{{ route('admin.courses.index') }}"> Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </form>
</div>
@endsection