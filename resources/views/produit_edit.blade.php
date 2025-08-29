@extends('layouts.master')
@section('content')
     <div class="container">
        <h4 class="alert alert-primary">Mise a jour d'un produit</h4>
        <form action="{{route('produits.update',$produit->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-groupe">
                <label for="designation">Designation</label>
                <input type="text" class="form-control" value="{{$produit->designation}}" @error('designation') is-invalid @enderror>
            </div>
             <div class="form-groupe">
                <label for="description">Description</label>
                <input type="text" class="form-control" value="{{$produit->description}}" required @error('description') is-invalid                  
                @enderror>
            </div>
             <div class="form-groupe">
                <label for="designation">Prix</label>
                <input type="text" class="form-control" value="{{$produit->prix}}" required>
            </div>
            @can('update produit')
                <button class="btn btn-success" type="submit">Modifier</button>                
            @endcan
        </form>
    </div>
@endsection