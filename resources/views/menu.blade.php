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
   
    <style>
        .navbar .navbar-nav .nav-link:hover,
.navbar .navbar-nav .nav-link.activee {
    color:#e91e63;
}
        body {
            /* Image de fond ou couleur dégradée */
            background: url('public/asset/images/background.jpg') no-repeat center center fixed;
            background-size: cover; /* Pour couvrir toute la page */
            color: #000000; /* Texte blanc pour le contraste */
            padding-top: 180px; /* Ajouter un padding-top pour éviter que le contenu ne soit masqué sous la navbar */
        }
      

        /* Styles pour le navbar */
        .navbar {
            background-color: rgba(255, 255, 255, 0.8); /* Fond blanc avec transparence */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); 
            color:#000000;/* Ajouter une ombre à la navbar pour la rendre plus visible */
        }
 
        /* Style général pour les cartes de gâteaux */
        .card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Style pour les images dans les cartes */
        .card img {
            max-height: 270px;
            object-fit: cover;
            border-bottom: 1px solid #ddd;
        }

        /* Style pour le titre des cartes */
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #e91e63; /* Couleur personnalisée */
            margin-bottom: 10px;
        }

        /* Texte dans les cartes */
        .card-text {
            font-size: 1rem;
            color: #555;
        }

        /* Prix dans les cartes */
        .card .text-muted {
            font-size: 1.1rem;
            font-weight: bold;
            color: #e91e63; /* Associer à la couleur principale */
        }

        /* Style pour le bouton Commander */
        .btn-primary {
            background-color: #e91e63;
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

        /* Styles pour l'entête */
        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #e91e63; /* Associer la couleur au thème de la pâtisserie */
            text-align: center;
            margin-bottom: 40px;
        }

        /* Container avec un peu de padding pour espacement */
        .container {
            padding: 20px;
        }

        /* Ajout d'espacement entre les cartes */
        .card {
            margin-bottom: 30px;
        }

        /* Media query pour un affichage responsive */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            
            .card-title {
                font-size: 1.2rem;
            }

            .card-text {
                font-size: 0.9rem;
            }

            .btn-primary {
                font-size: 0.9rem;
                padding: 8px 15px;
            }
        }

        /* Style des catégories */
        .categories {
            display: flex;
            justify-content: space-around;
            margin: 10px 0;
            text-align: center;
        }
        .category {
    margin: 5px; /* Ajustez cette valeur pour réduire l'espace entre les catégories */
    flex: 1; /* Permet aux éléments de s'étendre également */
    text-align: center; /* Centre le texte sous l'image */
}
        .category img {
            max-width: 100px;
            height: auto;
            border-radius: 50%;
            background-color: #f7f7f7;
            padding: 10px;
        }

        .filter-bar {
            text-align: center;
            margin-top: 20px;
        }

        .filter-bar p {
            display: inline-block;
            margin-right: 10px;
            font-size: 18px;
        }

        .filter-bar button {
            padding: 10px 20px;
            margin-right: 10px;
            background-color: white;
            border: 1px solid #ccc;
            cursor: pointer;
        }
        .section-title {
        text-align: center; 
/* Centrer le texte */
        font-size: 2.5rem; /* Taille de la police pour le titre */
        font-weight: bold; /* Style en gras */
        color: #e91e63; /* Couleur personnalisée (rose) */
        margin-bottom: 40px; /* Espacement sous le titre */
    }
    /* Styles pour la modal */


    /* Ajout de bordures arrondies et d'une ombre douce pour le modal */
    .modal-content {
        background-color: #fff8f2; /* Couleur douce évoquant la pâtisserie */
        border-radius: 15px; /* Bordures arrondies */
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2); /* Ombre douce */
        padding: 20px;
    }

    /* Personnalisation du titre */
    .modal-title {
        font-size: 1.8rem;
        color: #e91e63; /* Couleur principale du site */
        font-weight: bold;
    }

    /* Personnalisation des boutons */
    .btn-close {
        background-color: #fff8f2; /* Arrière-plan doux */
        border: none;
    }

    .btn-close:hover {
        background-color: #f0e6dc; /* Légère modification de la couleur au survol */
    }

    /* Styles pour la liste */
    .list-group-item {
        background-color: #fff8f2; /* Fond doux et pastel */
        border: none;
        color: #333; /* Couleur du texte */
        font-size: 1.2rem;
        padding: 10px 15px;
        transition: background-color 0.3s ease;
    }

    /* Effet au survol des éléments */
    .list-group-item:hover {
        background-color: #e91e63; /* Changement de fond pour le rose */
        color: #fff; /* Texte en blanc pour le contraste */
    }

    /* Styles pour le bouton de fermeture */
    .btn-secondary {
        background-color: #e91e63;
        border: none;
        color: #fff;
        font-size: 1rem;
    }

    .btn-secondary:hover {
        background-color: #a8136d;
    }

    /* Personnalisation de la modal footer */
    .modal-footer {
        border-top: none; /* Suppression de la ligne de séparation */
    }

    /* Centre le contenu du modal */
    .modal-dialog-centered {
        display: flex;
        justify-content: center;
    }


  ul li{
    cursor: pointer;
   }





    </style>
</head>

@section('contenu')
<body>
    <!-- Include the navbar from another Blade template -->
    <section>
        <h2 class="section-title">Wedding Cake</h2>
        <div class="categories">
            <div class="category">
              <img src="{{ asset('asset/images/image11.jpg') }}" alt="Cakes">
              <p>Wedding Cake</p>
            </div>
            <div class="category">
                <img src="{{ asset('asset/images/image2.jpg') }}" alt="Cakes">
                <p>Birthday Cake</p>
              </div>
            <div class="category">
              <img src="{{ asset('asset/images/image3.jpg') }}" alt="Pastries">
              <p>Simple Cake</p>
            </div>
            <div class="category">
              <img src="{{ asset('asset/images/image44.jpg') }}" alt="Chocolates">
              <p>Buffet</p>
            </div>
            
          </div>
          
          <!-- Sorting bar -->
          
            
            <!-- Modal pour les types de cake -->
            <div class="filter-bar">
                <p>Trier par :</p>
                <button id="typeButton">Type</button>
                <button id="prixButton">Prix</button>
               
            </div>
            
            <!-- Modal pour les types de cake -->
            <!-- Modal pour les types de cake -->


<!-- Modal pour trier par type -->
<div class="modal fade" id="typeModal" tabindex="-1" aria-labelledby="typeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="typeModalLabel">Choisissez un type de cake</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <!-- Les types de gâteaux seront ajoutés ici dynamiquement -->
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

  


<div class="modal fade" id="prixModal" tabindex="-1" aria-labelledby="typeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="typeModalLabel">Choisissez le prix du cake</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <label for="priceRange" class="form-label">Prix : <span id="priceValue">2500</span>€</label>
                <input type="range" class="form-range" min="100" max="5000" step="50" id="priceRange" value="2500" oninput="updatePrice(this.value)">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Afficher les Résulats</button>
            </div>
        </div>
    </div>
</div>




       
   

<div class="container my-5">
    <h1 class="text-center mb-4" style="color: #e91e63;">Menu des Gâteaux de Mariage</h1>

    <div class="row" id="productsContainer"> <!-- Ajoutez un ID pour cibler ce conteneur -->
        @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->nom }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->nom }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="text-muted">Prix : {{ $product->prix }} €</p>
                        <a href="{{ route('showcommande', ['id' => $product->id]) }}" class="btn" style="background-color: #e91e63;">
                            Commander
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</section>
    



    {{-- Foteeeer foteer --}}
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
  $(document).ready(function() {
    $('#typeButton').click(function() {
        $('#typeModal').modal('show');

        // Récupérer les types de gâteaux
        $.ajax({
            url: '/get-cake-types', // L'URL de votre route pour récupérer les types
            type: 'GET',
            success: function(data) {
                $('#typeModal .list-group').empty(); // Vider la liste existante
                $.each(data, function(index, type) {
                    $('#typeModal .list-group').append(`
                        <li class="list-group-item" data-type="${type}">${type}</li>
                    `);
                });

                // Ajouter un événement de clic pour chaque type
                $('#typeModal .list-group-item').click(function() {
                    var selectedType = $(this).data('type'); // Récupérer le type sélectionné
                    filterProductsByType(selectedType); // Appeler la fonction de filtrage
                    $('#typeModal').modal('hide'); // Fermer le modal
                });
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
    });
});

// Fonction pour filtrer les produits par type
function filterProductsByType(type) {
    $.ajax({
        url: '/filter-products-by-type', // L'URL de votre route pour filtrer par type
        type: 'GET',
        data: {
            type: type // Envoyer le type sélectionné
        },
        success: function(data) {
            $('#productsContainer').empty(); // Vider les produits existants
            $.each(data.products, function(index, product) {
                $('#productsContainer').append(` <!-- Utilisez le même ID ici -->
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="{{ asset($product->image) }}" class="card-img-top" alt="${product.nom}">
                            <div class="card-body">
                                <h5 class="card-title">${product.nom}</h5>
                                <p class="card-text">${product.description}</p>
                                <p class="text-muted">Prix : ${product.prix} €</p>
                                <a href="/commande/${product.id}" class="btn" style="background-color: #e91e63;">
                                    Commander
                                </a>
                            </div>
                        </div>
                    </div>
                `);
            });
        },
        error: function(xhr) {
            console.error(xhr.responseText);
        }
    });
}






</script>
<script>
    $(document).ready(function() {
        $('#prixButton').click(function() {
            $('#prixModal').modal('show');
        });

        $('#prixModal .btn-secondary').click(function() {
            var selectedPrice = $('#priceRange').val();

            $.ajax({
                url: '/filter-products',
                type: 'GET',
                data: {
                    price: selectedPrice
                },
                success: function(data) {
    console.log(data); // Loguer les données reçues
    $('#productsContainer').empty(); // Vider le conteneur des produits existants
    $.each(data.menu, function(index, product) {
        $('#productsContainer').append(`
            <div class="col-md-4">
               <div class="card mb-3">
                <img src="{{ asset($product->image) }}" class="card-img-top" alt="${product.nom}">
                <div class="card-body">
                    <div class="card-body">
                        <h5 class="card-title">${product.nom}</h5>
                        <p class="card-text">${product.description}</p>
                        <p class="text-muted">Prix : ${product.prix} €</p>
                        <a href="/commande/${product.id}" class="btn" style="background-color: #e91e63;">
                            Commander
                        </a>
                    </div>
                </div>
            </div>
        `);
    });
    $('#prixModal').modal('hide'); // Fermer le modal
},

                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        });
    });

    function updatePrice(value) {
        document.getElementById('priceValue').innerText = value;
    }
</script>

</body>

</html>
@endsection