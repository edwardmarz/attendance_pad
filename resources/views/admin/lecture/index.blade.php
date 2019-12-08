@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>lecture's List</h2>
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
                <div class="card-header">Lecture's List</div>
                <div class="card-body">
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('admin.lectures.create') }}"> Create New Lecture</a>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($lectures as $lecture)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $lecture->name }}</td>
                            <td>{{ $lecture->email }}</td>
                            <td>
                                <form action="{{ route('admin.lectures.destroy',$lecture->id) }}" method="POST">

                                    <a class="btn btn-success" href="{{ route('admin.lectures.show',$lecture->id) }}">Show</a>

                                    <a class="btn btn-primary" href="{{ route('admin.lectures.edit',$lecture->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{-- pagination --}}
                    {!! $lectures->links() !!}
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