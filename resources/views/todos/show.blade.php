
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Todos Show') }}</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" readonly value = "{{$todo->title}}" name="title" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" readonly value = "{{$todo->description}}" name="description" class="form-control">
                        </div>

                        @if($todo->attachment)
                        <a 
                        target="_blank"
                        href="{{ $todo->attachment_url }}"
                        class="btn btn-link">
                        Open Attachment
                        </a>
                        @endif
                        
                        <a class ="btn btn-primary" href="/todos">Back</a>
                    </div>
                    
                   
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection