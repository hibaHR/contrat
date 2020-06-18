@extends('layouts.admin')

@section('content')

<div class="container">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                        <h5 class="text-white op-7 mb-2">Premium Bootstrap 4 Admin Dashboard</h5>
                        @if(Auth::user()->hasRole('user'))
                            <h1>User</h1>
                        @endif
                        @if(Auth::user()->hasRole('admin'))
                            <h1>Admin</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row mt--2">
                <div class="col-md-12">
                    <div class="card full-height">
                        <div class="card-body">
                            <div class="card-title">Welcome</div>
                            <div class="card-category">Welcome to the dashboard : {{ Auth::user()->name }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
