
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session()->has('message'))
            <div class="alert {{session()->get('type')}}">
                {{session()->get('message')}}
            </div>
            @endif

            <div class="card">
                <div class="card-header">{{ __('MUSLIM') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th> ID</th>
                            <th> Title</th>
                            <th> Description</th>
                            <th> Creator</th>
                            <th> Action</th>
                           
                        </thead>

                        <body>
                            @foreach ($todos as $todo)
                            <tr>
                            <td> {{ $todo->id }}</td>
                            <td> {{ $todo->title }}</td>
                            <td> {{ $todo->description }}</td>
                            <td> {{ $todo->user->name}}</td>
                            <td> 
                                <a class ="btn btn-primary" href="/todos/{{ $todo->id}}">Show</a>
                                <a class ="btn btn-success" href="/todos/{{ $todo->id}}/edit">Edit</a>
                                <a onclick="return confirm ('Are you sure?')" class ="btn btn-danger" href="/todos/{{ $todo->id}}/delete">Delete</a>
                         @endforeach
                        </body>

                       </table>
</td>
                          {{ $todos->links()}}
                </div>
            </div>
        </div>
</div>
</div>
@endsection 