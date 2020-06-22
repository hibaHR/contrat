<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller

{
    public function index()
    {
     $users = User::orderBy('created_at', 'desc')->paginate(2);
    return view('admin.register')->with('users',$users);
    }
    public function edit(Request $request ,$id)
    {
      $users = User::findOrfail($id);
      return view('admin.register-edit')->with('users',$users);
    }
    public function update(Request $request ,$id)
    {
     $users = User::find($id);
     $users->name = $request->input('username');
     $users->user_type= $request->input('user_type');
     $users->update();
     return redirect('/role-register')->with('status','Your Data is updated');
     }
     public function delete($id)
     {
      $users = User::findOrFail($id);
      $users->delete();

      return redirect('/role-register')->with('status','Your Data is deleted');
         
     }
}
