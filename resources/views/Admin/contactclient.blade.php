{{-- resources/views/admin/contacts.blade.php --}}
@extends('Admin.navbar') <!-- Assurez-vous que cela correspond à votre mise en page -->

<head>
    <!-- Lien vers la bibliothèque Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <style>
        /* Style pour le tableau */
        .table thead th {
            background-color: #5f0556; /* Couleur de l'en-tête */
            color: white;
            /* Couleur du texte de l'en-tête */
        }
        .table tbody tr:hover {
            background-color: #f1f1f1; /* Couleur de survol des lignes */
        }
        .table tbody tr {
            transition: background-color 0.3s; /* Effet de transition pour le survol */
        }
    </style>
</head>

@section('contenu')
<div class="container mt-4">
    <div class="card">
      
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Sujet</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->nom }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>
                                <form action="{{ route('admin.deleteContact', $contact->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background:none; border:none; color:#dc3545;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce contact ?');">
                                        <i class="fas fa-trash-alt fa-lg"></i>
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
