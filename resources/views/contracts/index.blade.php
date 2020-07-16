@extends('layouts.admin')

@section('content')
    <div class="container">
        <a 
        href="{{route('contract.new')}}" 
        class="btn btn-success btn-alt btn-xs" 
        style="border-radius: 0px !important;" 
    >
        <i class='fa fa-plus'></i> 
        Add New Contract
    </a>
        <h1>Contract List</h1>
    </div>
@stop