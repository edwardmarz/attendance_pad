@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Matakuliah</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Welcome Student : <strong>{{ Auth::user()->name}}</strong></p>
                    <p>Your joined  : {{ Auth::user()->created_at->diffForHumans() }} </p>
                    
                    <table>
                        <tr>
                            <td>
                                {{ Auth::user()->created_at->diffForHumans() }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
