
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Users Create') }}</div>

                <div class="card-body">
                    <form action=""method="POST">
                        @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                      
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                         <button type="submit" class="btn btn-primary"> Create To Do</button>
                        
                    </div>
</form>
</div>
                </div>
            </div>
        </div>
</div>
</div>
@endsection