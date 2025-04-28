<!-- CSS de DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

<!-- JS de jQuery et DataTables -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<head>
    <!-- Lien vers la bibliothèque Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

@extends('Admin.navbar')
<style>
    thead{
        color: white;
    }
    .hello{
        color:#5f0556; 
    }
</style>
@section('contenu')
<div class="container">
    <div class="card mt-3 shadow" style="border-radius: 15px;">
       
        <div class="card-body" style="background-color: #ffeff4;">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table id="productsTable" class="table table-striped">
                <thead style="background-color: #5f0556; ">
                    <tr>
                        <th style="color: #ffeff4;">Nom</th>
                        <th style="color: #ffeff4;">Description</th>
                        <th style="color: #ffeff4;">Image</th>
                        <th style="color: #ffeff4;">Prix</th>
                        <th style="color: #ffeff4;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->nom }}</td>
                            <td>{{ $product->description }}</td>
                            <td><img src="{{ asset($product->image) }}" alt="{{ $product->nom }}" style="width: 50px; border-radius: 10px;"></td>
                            <td>{{ $product->prix }} €</td>
                            <td>
                                <!-- Lien pour modifier le produit -->
                                <a href="{{ route('admin.menu.edit', $product->id) }}" class="text-warning" title="Modifier">
                                    <i class="fas fa-edit fa-lg hello"></i> <!-- Icône de modification -->
                                </a>
                            
                                <!-- Formulaire pour supprimer le produit -->
                                <form action="{{ route('admin.menu.destroy', $product->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background:none; border:none; color:#dc3545;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');" title="Supprimer">
                                        <i class="fas fa-trash-alt fa-lg hello"></i> <!-- Icône de poubelle -->
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

<script>
    $(document).ready(function() {
        $('#productsTable').DataTable();
    });
</script>
@endsection
