@extends('Admin.navbar')

@section('contenu')
<div class="container">
    <div class="card">
    <h2>Modifier le Produit</h2>

    <form action="{{ route('admin.menu.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" value="{{ $product->nom }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" required>{{ $product->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control" accept="image/*">
            <img src="{{ asset($product->image) }}" alt="{{ $product->nom }}" style="width: 50px;" class="mt-2">
        </div>
        <div class="mb-3">
            <label for="prix" class="form-label">Prix</label>
            <input type="number" name="prix" class="form-control" value="{{ $product->prix }}" required>
        </div>
        <div class="mb-3">
            <label for="categorie" class="form-label">Catégorie</label>
            <input type="text" name="categorie" class="form-control" value="{{ $product->categorie }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
</div>
@endsection
