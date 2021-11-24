<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() 
    {
        // query list of users from db
        //$users = User::all();
        $users = User::paginate(10);

        //return to view - resources/views/users/index.blade.php
        return view('users.index', compact('users'));
    }
    
    public function create() 
    {
        // show create form
        return view('users.create');
    }
    public function store(Request $request) 
    {
        // store to users table using model
    
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        // return todos index
        return redirect()->to('/users');
    }

    public function show(User $user) 
    {
        // show to users table using model
         return view('users.show', compact('user'));
    }

    public function edit(User $user) 
    {
        // edit to users table using model
         return view('users.edit', compact('user'));
    }

    public function update(User $user, Request $request) 
    {
        // update to users table using model
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        // return users index
        return redirect()->to('/users');
    }

    public function delete(User $user) 
    {
        // delete from users table using model
        $user->delete();
        // return users index
        return redirect()->to('/users');
    }
}

