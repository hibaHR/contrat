
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
     <div class="card">
         <div class="card-header">
                    <br />
                 <center>   <h2 class="panel-title"> Freelance Contract</h2></center>
                </div>
                <div class="card-body">
                @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
                <form method="post" action="{{ route('freelancecontract.store')}}">
                <div class="form-row">
                <div class="col">
                    <label for="name">Employee’ Name:</label>
                    <input type="text" class="form-control form-control-sm" name="em_name"/>
                </div>
                <div class="col">
                    <label for="name">Employer’ Name:</label>
                    <input type="text" class="form-control form-control-sm" name="ep_name"/>
                </div>
                </div>
                <div class="form-row">
                <div class="col">
                    <label for="name">From  :</label>
                    <input type="date" class="form-control" name="from"/>
                    </div>
                    <div class="col">
                    <label for="name"> To :</label>
                    <input type="date" class="form-control" name="to"/>
                </div>
                </div>
                <div class="form-group">
                    <label for="name">Salary(Dinar):</label>
                    <input type="number" class="form-control form-control-sm" name="wage"/>
                </div>
                <div class="form-group">
                    <label for="name">Probation Period(jour):</label>
                    <input type="number" class="form-control form-control-sm" name="pb_periode"/>
                </div>
                <div class="form-group">
                    <label for="name">Place:</label>
                    <input type="text" class="form-control form-control-sm" name="place"/>
                </div>
                <div class="form-group">
                    <label for="name">Employee’ ID:</label>
                    <input type="number"  class="form-control form-control-sm" name="em_id"/>
                </div>
                <div class="form-group">
                    <label for="name">Job duty:</label>
                    <textarea class="form-control form-control-sm" name="job_duty">
                    </textarea>
                </div>
                <div class="form-row">
                <div class="col">
                    <label for="name">Employee’ sign date :</label>
                    <input type="date" class="form-control form-control-sm" name="sig_date_em"/>
                </div>
                <div class="col">
                    <label for="name">Employeer’ sign date:</label>
                    <input type="date" class="form-control form-control-sm" name="sig_date_ep"/>
                </div>
                </div>
                <div class="form-check">
                    <input type='checkbox' value='1' class="form-check-input" name="fixed_period"/>
                    <label  class='form-check-label' for="name">fixed period:</label>
                    <!-- <input type="number" class="form-control" name="fixed_period"/> -->
                </div>
                <div class="form-row">
                    <label for="name">Periode duration:</label>
                    <input type="number" class="form-control form-control-sm"   width="10" height="5"  name="fixed_period_of"/>
                </div>
                <div class="form-check">
                    <input type='checkbox' value='1' class="form-check-input" class="form-control" name="break_partie"/>
                    <label class='form-check-label' for="name">Booth patie can break contract :</label>
                    <!-- <input type="number" class="form-control" name="wage"/> -->
                </div>
                <button type='submit' class='btn btn-primary' >Create </button>
                </form>
</div>
    </div>
</div>
</div>
</div>

{{--single post view --}}
{{--show number likes this post has --}}
@stop