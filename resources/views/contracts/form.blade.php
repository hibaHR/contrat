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
                </div>

                <div class="form-row">
                    <div class="col">
                        <label for="name">what's your first_name</label>
                        <input type="text" class="form-control form-control-sm" name="First_Name"/>
                    </div>
                    <div class="col">
                        <label for="name">what's your last_name</label>
                        <input type="text" class="form-control form-control-sm" name="Last_Name"/>
                    </div>
                    </div>
                <button type="submit" class="btn btn-success pull-right"> 
                    submit
                </button>
        </form>
    </div>
@stop
