@extends('layouts.admin')
@section('title')
   Register Roles| Gestion d'article
@endsection
@section('content')
<br>
<br>
<br>
<br>
<div class="row">
<div class="pull-right">
<a href= "{{ route('register') }}" >Add new user</a></div>
    <div class="col-md-12">
      <div class="card">
        <div class="header">
      <center <h4  class="form-text text-muted"> Registred Roles</h4></center>
          @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" table table-striped">
              <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Usertype</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </thead>
              <tbody>
                  @foreach ($users as $row)
                <tr scope="row">
                <td>{{ $row->id }}</td>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->email }}</td>
                  <td>{{ $row->user_type }}</td>
                  <td><a href="/role-edit/{{  $row->id }}" class="badge badge-success">Edit</a> </td>
                  <td> <form action="/role-delete/{{  $row->id }}" method="post">
                    {{ csrf_field() }}
                    {{  method_field('DELETE')  }}
                  <button type="submit" class="badge badge-danger">Delete</button>
                   </form>
                   </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          {!! $users ->links() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('scripts')
@endsection