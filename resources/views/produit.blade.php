<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des produits</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
            <form action="{{'logout'}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Deconnexion</button>

            </form>
           
        
        <h3>Gestion des Produits</h3>
        <form action="{{route("produits.store")}}" method="post">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
            </div>
            
        @endif

            @csrf
            <div class="form-group">
                <label for="">Nom du Produit     </label>
                <input type="text" name="designation" id="" class="form-control" @error('designation') is-invalid @enderror >
            </div>
            @error('designation')
                <div class="alert alert-danger">{{$message}}</div>
                
            @enderror
            <div class="form-group">
                <label for="">Prix du Produit     </label>
                <input type="number" name="prix" id="" class="form-control" >
            </div>
            <div class="form-group">
                <label for=""> Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            @can('create produit')
                <button type="submit" class="btn btn-success">Enregistrer</button>
            @endcan
        </form>
        <div class="table mt-4">
            <table class="table table-bordered">
                <thead>
                    <td>id</td>
                    <td>Designation</td>
                    <td>Prix</td>
                    <td>Description</td>
                    <td>Action</td>
                </thead>
                <tbody>
                    @foreach($produits as $produit)
                        <tr>
                            <td>{{$produit->id}}</td>
                            <td>{{$produit->designation}}</td>
                            <td>{{$produit->prix}}</td>
                            <td>{{$produit->designation}}</td>
                            <td>
                                @can('update produit')
                                    <a href="{{route("produits.edit",$produit->id)}}" class="btn btn-primary">Modifier</a>  
                                @endcan
                                @can('delete produit')
                                    <a href="#" data-href="{{route("produits.destroy",$produit->id)}}" class="btn btn-danger btn-delete">Supprimer</a>   

                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.14.1/jquery-ui.min.js"></script>
<script>
    $(document).ready(function(){
        $(".bnt-delete").click(function(e){
            e.preventDefault();
            var url = $(this).attr("data-href");
            $.ajax({
                url: url,
                type: "DELETE",
                data: {
                    _token: "{{ csrf_token() }}"
                },
            });


        });
    });
</script>
</html>