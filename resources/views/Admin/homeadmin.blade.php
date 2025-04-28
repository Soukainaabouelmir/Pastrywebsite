
<style>
    .custom-form-width {
        max-width: 650px; /* Ajustez la largeur selon vos besoins */
        margin: auto; /* Centrer la carte */
    }
</style>

@extends('Admin.navbar')

@section('contenu')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-3 shadow" style="border-radius: 15px;">
                <div class="card-header text-white text-center" style="background-color: #5f0556; font-weight: bold; font-size: 1.7rem; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    Inscription d'un utilisateur
                </div>
                <div class="card-body" style="background-color: #ffeff4;">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('creationcomptes') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nom et Prénom / Fonction</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Entrez votre nom et prénom" required>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Adresse Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre adresse email" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="role" class="form-label">Rôle</label>
                                <select class="form-control" id="role" name="role" required>
                                    <option value="admin">Admin</option>
                                    <option value="user">Utilisateur</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Entrez un mot de passe" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="password_confirmation" class="form-label">Confirmation du mot de passe</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmez votre mot de passe" required>
                            </div>

                            <div class="col-md-12 mb-3 d-flex align-items-end">
                                <button type="submit" class="btn btn-block w-100" style="background-color: #5f0556; border: none; border-radius: 10px; width:100%;">
                                    Enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@endsection
