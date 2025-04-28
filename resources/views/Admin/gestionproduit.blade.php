{{-- resources/views/Admin/menu.blade.php --}}
<style>
     .cardmenu {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .cardmenu:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Style pour les images dans les cartes */
        .cardmenu img {
            max-height: 270px;
            object-fit: cover;
            border-bottom: 1px solid #ddd;
        }

        /* Style pour le titre des cartes */
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #d1198a; /* Couleur personnalisée */
            margin-bottom: 10px;
        }

        /* Texte dans les cartes */
        .card-text {
            font-size: 1rem;
            color: #555;
        }

        /* Prix dans les cartes */
        .cardmenu .text-muted {
            font-size: 1.1rem;
            font-weight: bold;
            color: #d1198a; /* Associer à la couleur principale */
        }

        /* Style pour le bouton Commander */
        .btn-primary {
            background-color: #d1198a;
            border: none;
        }

        .btn-primary:hover {
            background-color: #a8136d;
            transition: background-color 0.3s ease;
        }

        /* Centrer le contenu des cartes */
        .card-body {
            text-align: center;
        }

</style>
@extends('Admin.navbar')

@section('contenu')
<div class="container">
    <div class="card mt-3 shadow" style="border-radius: 15px;">
        <div class="card-header text-white" style="background-color: #5f0556; font-weight: bold; font-size: 1.7rem; border-top-left-radius: 15px; border-top-right-radius: 15px;">
            Ajouter un produit au menu
        </div>
        <div class="card-body" style="background-color: #ffeff4;">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Première ligne avec deux champs: Nom et Prix -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" name="nom" class="form-control" required style="border-radius: 10px;">
                    </div>
                    <div class="col-md-6">
                        <label for="prix" class="form-label">Prix</label>
                        <input type="number" name="prix" class="form-control" required style="border-radius: 10px;">
                    </div>
                </div>

                <!-- Deuxième ligne avec deux champs: Description et Catégorie -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" required style="border-radius: 10px;"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="categorie" class="form-label">Catégorie</label>
                        <select name="categorie" class="form-control" style="border-radius: 10px;">
                            <option value="1">Gâteau Mariage</option>
                            <option value="2">Gâteau d'anniversaire</option>
                            <option value="3">Gâteau simple</option>
                            <option value="4">Buffet</option>
                        </select>
                    </div>
                </div>

                <!-- Troisième ligne avec un champ: Image -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*" required style="border-radius: 10px;">
                    </div>
                </div>

                <button type="submit" class="btn btn-block text-white" style="background-color: #5f0556; border: none; border-radius: 10px;">
                    Ajouter
                </button>
            </form>
        </div>
    </div>

    <div class="row mt-4">
        @foreach ($products as $product)
            <div class="col-md-4">
                <div class="cardmenu mb-3 shadow" style="border-radius: 15px; overflow: hidden;">
                    <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->nom }}" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <div class="card-body" style="background-color: #ffeff4;">
                        <h5 class="card-title">{{ $product->nom }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="text-muted">Prix : {{ $product->prix }} €</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection
