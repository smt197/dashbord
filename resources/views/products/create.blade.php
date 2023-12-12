@extends('layouts.app')
  
@section('title', 'Ajout')
  
@section('contents')
    <h1 class="mb-0">Ajouter une voiture</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="image" class="form-control" placeholder="Image">
            </div>
            <div class="col">
                <input type="text" name="nom" class="form-control" placeholder="Nom">
            </div>
            <div class="col">
                <input type="number" name="prix" class="form-control" placeholder="Prix">
            </div>
            <div class="col">
                <input type="number" name="nbr_place" class="form-control" placeholder="Nbr place">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Description"></textarea>
            </div>
            <div class="col">
                <input type="text" name="fabricant" class="form-control" placeholder="Fabricant">
            </div>
            <div class="col">
                <input type="text" name="modele" class="form-control" placeholder="modele">
            </div>
            <div class="col">
                <input type="date" name="date_fabrication" class="form-control" placeholder="Date fabrication">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="couleur" placeholder="Couleur"></input>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection