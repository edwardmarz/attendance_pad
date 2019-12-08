@extends('admin.layouts.app')
@section('title', 'Admin Dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin's Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p>Welcome Admin : <strong>{{ Auth::user()->name}}</strong></p>
                        <p>Your joined  : {{ Auth::user()->created_at->diffForHumans() }} </p>
                        
                        <a href="{{ route('admin.lectures.index') }}">Lecture</a>
                        &nbsp
                        |
                        &nbsp
                        <a href="{{ route('admin.users.index') }}">Student</a>
                        &nbsp
                        |
                        &nbsp
                        <a href="{{ route('admin.grades.index') }}">Grade</a>
                        &nbsp
                        |
                        &nbsp
                        <a href="{{ route('admin.courses.index') }}">Course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
