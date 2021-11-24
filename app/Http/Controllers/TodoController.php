<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use File;
use Storage;

class TodoController extends Controller
{ 
    
    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        // query list of todos from db
       $todos = Todo::paginate(5);

      
        //query list of today from db
        //$user = auth()->user();
        //$todos = $user->todos;
        //return to view - resources/views/todos/index.blade.php
        return view('todos.index', compact('todos'));

        
    }

    public function create() 
    {
        // show create form
        return view('todos.create');
    }
    public function store(Request $request) 
    {
        // store to todos table using model
    
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->user_id = auth()->user()->id;
        $todo->save();

        if($request->hasFile('attachment')){
            //rename file attachment
            $filename = $todo->id.'-'.date("Y-m-d").'.'.$request->attachment->getClientOriginalExtension();
            //store file storage
            Storage::disk('public')->put($filename,File::get($request->attachment));
            //update row on DB
            $todo->attachment = $filename;
            $todo->save();
        }

        // return todos index
        return redirect()->to('/todos')->with([
            'type' => 'alert-primary',
            'message' => 'To do list CREATED!'
        ]);
        
    }

    public function show(Todo $todo) 
    {
        // show to todos table using model
         return view('todos.show', compact('todo'));
    }

    public function edit(Todo $todo) 
    {
        // edit to todos table using model
         return view('todos.edit', compact('todo'));
    }

    public function update(Todo $todo, Request $request) 
    {
        // update to todos table using model
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();
        // return todos index
        return redirect()->to('/todos')->with([
            'type' => 'alert-success',
            'message' => 'To do list UPDATED!'
        ]);
            
        
    }

    public function delete(Todo $todo) 
    {
        // delete from todos table using model
        $todo->delete();
        // return todos index
        return redirect()->to('/todos')->with([
            'type' => 'alert-danger',
            'message' => 'To do list DELETED!'
        ]);
        
        
    }
}

