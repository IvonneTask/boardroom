<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use App\Models\Boardrooms;
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
    public function show($id)
    {
        $user = User::find($id);
     
        return view('users.show', compact('user'));

    }

    public function edit(User $user)
    {
       return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user=User::findOrFail($id);
        $data = $request->only('name','username','email');
        if(trim($request->password)=='')
            {
                $data=$request->except('password');
            }
            else{
                $data=$request->all();
                $data['password']=bcrypt($request->password);

            }
            $user->update($data);
            return redirect()->route('users.index')->with('success','Data edited correctly');
    }

    public function destroy(User $user)
    {

    }
}