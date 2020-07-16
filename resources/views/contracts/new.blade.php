@extends('layouts.admin')

@section('content')
    <div class="container">
        <form method="post" action="{{route('contract.post')}}">
           
            {{csrf_field()}}
            <div class="form-group">
                <label class="control-label">Contract Name</label>
                <input type="text" name="name" class="form-control"/>
            </div>

            <button type="submit" class="btn btn-success pull-right">Next</button>
        </form>
    </div>
@stop