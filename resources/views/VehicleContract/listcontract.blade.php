@extends('layouts.admin')
@section('content')
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Nom Locataire</th>
    <th>Marque Véhicule</th>
    <th>Immatriculation</th>
    <th>Nom propriétaire</th>
    <th>Tél</th>
    <th>Durée de la location</th>
    <th>Date debut</th>
    <th>Action</th>
  </thead>
<tbody>
   @foreach($contractss  as $contract)
    <tr>
      <td>{{$contract->id}}</td>
      <td>{{$contract->reponse1}}</td>
      <td>{{$contract->reponse4}}</td>
      <td>{{$contract->reponse5}}</td>
      <td>{{$contract->reponse6}}</td>
      <td>{{$contract->reponse7}}</td>
      <td>{{$contract->reponse8}}</td>
      <td>{{$contract->reponse9}}</td>
      <td><a href="{{action('ContractController@downloadPDF', $contract->id)}}">Download PDF</a></td>
      </tr>
    @endforeach
</tbody>
</table>
@endsection