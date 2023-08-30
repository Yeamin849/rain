@extends('layouts.dashboard');
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>User List</h1>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($users as $sl=>$user )
                            <tr>
                                <td>{{$sl+1}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at}}</td>
                                <td><a class="btn btn-danger">Delete</a></td>
                            </tr>                          
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    
