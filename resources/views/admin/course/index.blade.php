@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Course's List</h2>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Course's List</div>
                <div class="card-body">
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('admin.courses.create') }}"> Create New Course</a>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Course Code</th>
                            <th>Description</th>
                            <th>Day</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Absent Status</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($courses as $course)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->kode_matkul }}</td>
                            <td>{{ $course->desc }}</td>
                            <td>{{ $course->day }}</td>
                            <td>{{ $course->start_time }}</td>
                            <td>{{ $course->end_time }}</td>
                            <td>{{ $course->absen_status }}</td>
                            <td>
                                <form action="{{ route('admin.courses.destroy',$course->id) }}" method="POST">

                                    <a class="btn btn-success" href="{{ route('admin.courses.show',$course->id) }}">Show</a>

                                    <a class="btn btn-primary" href="{{ route('admin.courses.edit',$course->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{-- pagination --}}
                    {!! $courses->links() !!}
                    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                        <div class="form-group">
                            <a class="btn btn-primary" href="{{ route('admin.dashboard') }}"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection