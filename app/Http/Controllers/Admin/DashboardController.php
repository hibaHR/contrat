<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class DashboardController extends Controller
{
    public function create()
    {
        return view('admin.register');
    }
    public function store (Request $request)
    {
            $users = new User ;
            $users->name = $request->input('name');
            $users->email = $request->input('email');
            $users->save();
        return redirect('/role-register')->with('success', 'user saved');
    }
    public function registered()
    {
     $users = User::orderBy('created_at', 'desc')->paginate(2);
    return view('admin.register')->with('users',$users);
    }
    public function registeredit(Request $request ,$id)
    {
      $users = User::findOrfail($id);
      return view('admin.register-edit')->with('users',$users);
    }
    public function registerupdate(Request $request ,$id)
   {
    $users = User::find($id);
    $users->name = $request->input('username');
    $users->user_type= $request->input('user_type');
    $users->update();
    return redirect('/role-register')->with('status','Your Data is updated');
    }
    public function registerdelete($id)
    {
     $users = User::findOrFail($id);
     $users->delete();
     return redirect('/role-register')->with('status','Your Data is deleted');
    }
}