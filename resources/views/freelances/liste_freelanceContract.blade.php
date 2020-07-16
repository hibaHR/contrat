@extends('layouts.admin')
@section('content')
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Creation date</th>
    <th>Employee name</th>
    <th>Employeer name</th>
    <th>start</th>
    <th>end</th>
    <th>place</th>
    <th>Action</th>
  </thead>
  <tbody>
    @foreach($freelanceContracts  as $freelanceContract)
    <tr>
      <td>{{$freelanceContract->id}}</td>
      <td>{{$freelanceContract->created_at}}</td>
      <td>{{$freelanceContract->em_name}}</td>
      <td>{{$freelanceContract->ep_name}}</td>
      <td>{{$freelanceContract->from}}</td>
      <td>{{$freelanceContract->to}}</td>
      <td>{{$freelanceContract->place}}</td>
      <td><a href="{{ action('FreelanceContractController@downloadPDF', $freelanceContract->id) }}">Download PDF</a></td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection