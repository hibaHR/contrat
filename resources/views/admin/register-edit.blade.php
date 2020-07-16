@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
     <div class="card">
                <div class="card-body">
                    <form action="/role-register-update/{{$users->id}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT')  }}
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            <input type="text" name="username" value = "{{ $users->name}}" class="form-control form-control-sm">
                        </div>
                        </div>
                        <div class="form-group row">
                               <label class="col-sm-2 col-form-label">Give Role</label>
                               <div class="col-sm-10">
                               <select name="user_type"  class="form-control form-control-sm">
                               <option value="admin">Admin</option>
                               <option value="user">User</option>
                              </select>
                           </div>
                           </div>
                           <br>
                           <center>
                             <button type="submit" class="badge badge-pill badge-success">Update</button>
                             <button type="submit" class="badge badge-pill badge-danger">Cancel</button></center>
                         </form>
                         </div>
                        </div>
                 </div>
           </div>
      </div>
  </div>
</div>
@endsection
@section('scripts')
@endsection