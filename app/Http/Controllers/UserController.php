<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index ()
    {
        $users = User::paginate(5);
        return view('users.index', compact('users'));
    }
    public function create()
    {
        return view('users.create');
        
    }

    public function lion(Request $request)
    {
        User::create($request->only('name', 'username', 'email')
        + [
            'password' => bcrypt($request->input('password')),
        ]);
        return redirect()->route('users.index')->with('success', 'User Created Successfully');
    }
}
