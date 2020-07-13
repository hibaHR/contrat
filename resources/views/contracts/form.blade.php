@extends('layouts.admin')

@section('content')
    <div class="container">
        <form method="post" action="{{route('contract.post')}}">
            {{csrf_field()}}

        <div class="form-group">
                    <label class="col-md-1  control-label">
                        Contract Name
                    </label>
                    <input type="text" name="name" class="form-control"/>
                    <label class="col-md-1  control-label">
                      what is the number of question ?
                    </label>
                    <input type="text" name="title" class="form-control"/>
                    <label class="col-md-1  control-label">
                        what is the number of question ?
                      </label>
                      <input type="text" name="title" class="form-control"/>
                </div>
                <button type="submit" class="btn btn-success pull-right"> 
                    submit
                </button>
        </form>
    </div>
@stop