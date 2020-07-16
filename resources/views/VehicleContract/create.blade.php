@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
     <div class="card">
         <div class="card-header">
                    <br />
                  <center>  <h2 class="panel-title">  Vehicle Rental Contract</h2></center>
                </div>
                <div class="card-body">
            <form action="{{ route('contracts.store') }}" method="POST">
               @csrf
               <div class="form-row">
                <div class="col">
                    <label for="reponse1">Nom Locataire</label>
                    <input type="text" class="form-control" id="reponse1" placeholder="Nom Locataire" name="reponse1">
                </div>
                <div class="col">
                    <label for="reponse2">Adresse </label>
                    <input type="text" class="form-control" id="reponse2"  placeholder="Adresse" name="reponse2">
                </div>
                </div>
                <div class="form-group">
                    <label for="reponse3">Tél</label>
                    <input type="number" class="form-control" id="reponse3" placeholder="Tel" name="reponse3">
                </div>
                <div class="form-group">
                    <label for="reponse4">Marque Véhicule</label>
                    <input type="text" class="form-control" id="reponse4" placeholder="Marque Véhicule" name="reponse4">
                </div>
                <div class="form-group">
                    <label for="reponse5">Immatriculation</label>
                    <input type="text" class="form-control" id="reponse5"placeholder="Immatriculation" name="reponse5">
                </div>
                <div class="form-group">
                    <label for="reponse6">Nom propriétaire</label>
                    <input type="text" class="form-control" id="reponse6"  placeholder="Nom propriétaire" name="reponse6">
                </div>
                <div class="form-group">
                    <label for="reponse7">Tél</label>
                    <input type="text" class="form-control" id="reponse7" placeholder="Tél"   name="reponse7">
                </div>
                <div class="form-group">
                    <label for="reponse8">Durée de la location(Jour) </label>
                    <input type="text" class="form-control" id="reponse8" placeholder="Durée de la location"  name="reponse8">
                </div>
                <div class="form-group">
                    <label for="reponse9">à partir du  </label>
                    <input type="date" class="form-control" id="reponse9" placeholder="à partir du "  name="reponse9">
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
{{--single post view --}}
{{--show number likes this post has --}}