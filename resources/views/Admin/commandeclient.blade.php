{{-- resources/views/admin/commandes.blade.php --}}
@extends('Admin.navbar') <!-- Assurez-vous que cela correspond à votre mise en page -->
<head>
    <!-- Lien vers la bibliothèque Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>
    .hello{
        cursor: pointer;
        color: #5f0556;
    }
</style>
@section('contenu')
<div class="container">
    <div class="card mt-3 shadow" style="border-radius: 15px;">
       
        <div class="card-body" style="background-color: #ffeff4;">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-striped">
                <thead style="background-color: #5f0556; color: white;">
                    <tr>
                        <th style="color: #ffeff4;">Nom</th>
                        <th style="color: #ffeff4;">Téléphone</th>
                        <th style="color: #ffeff4;">Adresse</th>
                        <th style="color: #ffeff4;">Produit</th>
                        <th style="color: #ffeff4;">Prix</th>
                        <th style="color: #ffeff4;">Quantité</th>
                        <th style="color: #ffeff4;">Image</th>
                        <th style="color: #ffeff4;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($commandes as $commande)
                        <tr>
                            <td>{{ $commande->nom }}</td>
                            <td>{{ $commande->telephone }}</td>
                            <td>{{ $commande->adresse }}</td>
                            <td>{{ $commande->product_nom }}</td>
                            <td>{{ $commande->product_prix }} €</td>
                            <td>{{ $commande->quantity }}</td>
                            <td>
                                <img src="{{ asset($commande->image) }}" alt="{{ $commande->product_nom }}" style="width: 100px; border-radius: 10px;">
                            </td>
                            <td>
                                <form action="{{ route('admin.deleteCommande', $commande->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background:none; border:none; color:#dc3545;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette commande ?');">
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                          </svg> --}}
                                          <i class="fas fa-trash-alt hello"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
