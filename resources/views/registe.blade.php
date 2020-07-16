@extends('layouts.admin')
@section('content')
<div class="col-md-8">
<h3>Create a new user !!</h3>
<form action ="/registe" method="POST">
{{ csref_field() }}
<div class="form-group">
<label for="name">Name</label>
<input type="text" name="name" value="{{old ('name')}}" class="form-control from-app" placelholder="full name">
</div>
<div class="form-group">
<label for="email">email</label>
<input type="text" name="name" value="{{old ('email')}}" class="form-control from-app" placelholder="email adress">
</div>
<div class="form-group">
<label for="password">password</label>
<input type="password" name="password" class="form-control from-app" placelholder="password">
</div>
<div class="form-group">
<button type="submit" class="btn btn-submit">Sign in</button>
<div>
</form>
</div>
@stop