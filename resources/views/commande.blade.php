
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pâtisserie')</title>
    <!-- Include FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS -->
    
    <!-- Bootstrap CSS via CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('styles.css') }}">

@extends('navbar.navbar')
@section('contenu')
<style>

 body {
            /* Image de fond ou couleur dégradée */
           
           
            color: #fff; 
            padding-top: 80px; /* Ajouter un padding-top pour éviter que le contenu ne soit masqué sous la navbar */
        }
      

        /* Styles pour le navbar */
        .navbar {
            background-color: rgba(248, 241, 241, 0.8); /* Fond blanc avec transparence */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); 
            color:#000000;/* Ajouter une ombre à la navbar pour la rendre plus visible */
        }
.card2 {
    background-color: rgb(241, 243, 245);
    padding: 20px; /* Ajout d'un espacement interne */
    border-radius: 8px; /* Arrondi des coins */
}
.card-body2 {
    padding: 20px; /* Ajout d'un espacement interne */
}
.product-image {
        max-width: 100px; /* Limiter la largeur de l'image à 100px */
        height: auto; /* Garder le ratio de l'image */
        border-radius: 10px; /* Arrondir les coins de l'image */
        margin-right: 20px; /* Espacement à droite de l'image */
    }

</style>
<body>
    

    <div class="container my-5">
        <h2 class="text-center mb-4" style="color: #e91e63;">Panier</h2>
    
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-center"> <!-- Alignement horizontal -->
                                <img src="{{ asset($image) }}" alt="{{ $nom }}" class="product-image">
                                <div>
                                    <h5>{{ $nom }}</h5>
                                    <p id="prixUnitaire">{{ $prix }} €</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <form action="{{ route('valider_commande') }}" method="POST" id="formCommande">
                                    @csrf
                                    <input type="hidden" name="nom" value="{{ $nom }}">
                                    <input type="hidden" name="prix" value="{{ $prix }}">
    
                                    <div class="mb-3">
                                        <label for="quantite" class="form-label">Quantité</label>
                                        <input type="number" class="form-control" id="quantite" name="quantite" value="1" min="1" required>
                                    </div>
                                    <p id="prixTotal" class="mt-2">Prix Total: {{ $prix }} €</p>
    
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    
                <a href="{{route('home')}}" class="btn btn-secondary">Continuer mes achats</a>
            </div>
    
            <div class="col-md-4">
                <div class="card card2">
                    <div class="card-body2">
                        <h5>Résumé de la commande</h5>
                        <p id="articleCount">1 article</p>
                        <p>Prix unitaire: <span id="prixUnitaireAffiche">{{ $prix }} €</span></p>
                        <p>Livraison: 3.99 €</p>
                        <p>Total TTC: <span id="totalTTC">{{ $prix + 3.99 }} €</span></p>
            
                        <form action="{{ route('valider_commande') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="nom" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="nom" name="nom" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="telephone" class="form-label">Téléphone</label>
                                    <input type="text" class="form-control" id="telephone" name="telephone" required>
                                </div>
                            </div>
            
                            <div class="mb-3">
                                <label for="adresse" class="form-label">Adresse de livraison</label>
                                <textarea class="form-control" id="adresse" name="adresse" required></textarea>
                            </div>
            
                            <!-- Quantité dynamique -->
                            <div class="mb-3">
                                <label for="quantity" class="form-label">Quantité</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1" required onchange="calculerTotal()">
                            </div>
           

                            <!-- Champs cachés pour les autres informations du produit -->
                            <input type="hidden" name="product_nom" value="{{ $nom }}">
                            <input type="hidden" name="product_prix" id="prixUnitaire" value="{{ $prix }}">
                            <input type="hidden" name="image" value="{{ $image }}">
            
                            <!-- Bouton de soumission -->
                            <button type="submit" class="btn btn-success">Commander</button>
                        </form>
                    </div>
                </div>
            </div>
            
    
{{-- FOTTER FOOTER FOOTER FOOTER FOOOTER --}}
<div class="container-fluid bg-dark text-light footer my-6 mb-0 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4"> Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Hay baraka 2 ,Sidi moumen,Casablanca</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+212678319345</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>soukascake@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4" style="color: #e91e63;">Heures de Traville</h4>
                <p  href="" style="color: #FFFFFF;">Lundi-Spmedi</p>
                <p  href="" style="color: #FFFFFF;">10AM-09PM</p>
                <p  href="" style="color: #FFFFFF;">Dimanche</p>
                <p  href="" style="color: #FFFFFF;">12AM-09PM</p>
                
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Liens</h4>
               <a class="btn btn-link" href="{{route('home')}}">Home</a>
                        <a class="btn btn-link" href="{{route('menu')}}">Wedding Cakes</a>
                        <a class="btn btn-link" href="{{route('menubirthday')}}">Birthday Cakes</a>
                        <a class="btn btn-link" href="{{route('menusimple')}}">Simple Cake</a>
                        <a class="btn btn-link" href="{{route('menubuffet')}}">Buffet</a>
                        <a class="btn btn-link" href="{{route('contact')}}">Contact</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Catalouge</h4>
                <div class="row g-2">
                    <div class="col-4">
                        <img class="img-fluid bg-light rounded p-1" src="{{ asset('asset/images/melangecake.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light rounded p-1" src="{{ asset('asset/images/pancake.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light rounded p-1" src="{{ asset('asset/images/rasberycake.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light rounded p-1" src="{{ asset('asset/images/cakechoc.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light rounded p-1" src="{{ asset('asset/images/cakechoc.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light rounded p-1" src="{{ asset('asset/images/pistachecake.jpg') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a href="#" style="color: #FFFFFF; text-align:center;">Souka'sCake.ma</a>, All Right Reserved.
            </div>
            
        </div>
    </div>
</div>
<a href="#" class="btn btn-lg  btn-lg-square rounded-circle back-to-top" style="background-color: #e91e63;"><i class="bi bi-arrow-up"></i></a>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const prixUnitaire = parseFloat(document.getElementById('prixUnitaire').innerText);
        const quantiteInput = document.getElementById('quantite');
        const totalTTCElement = document.getElementById('totalTTC');
        const prixTotalElement = document.getElementById('prixTotal');
        
        quantiteInput.addEventListener('input', function() {
            const quantite = parseInt(this.value);
            const livraison = 3.99;
            const total = (prixUnitaire * quantite) + livraison;
            totalTTCElement.innerText = total.toFixed(2) + ' €';
            prixTotalElement.innerText = 'Prix Total: ' + (prixUnitaire * quantite).toFixed(2) + ' €';
            document.getElementById('articleCount').innerText = quantite + ' article' + (quantite > 1 ? 's' : '');
        });
    });
</script>
</body>
</html>
@endsection
