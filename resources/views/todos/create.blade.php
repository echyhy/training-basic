
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Todos Create') }}</div>

                <div class="card-body">
                    <form action=""method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                      
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Attachment</label>
                        <input type="file" name="attachment" class="form-control">
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