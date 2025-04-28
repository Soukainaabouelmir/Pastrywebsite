<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pâtisserie')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="public/asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/asset/css/style.css" rel="stylesheet">
    <link href="public/lib/animate/animate.min.css" rel="stylesheet">
    <link href="public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
@extends('navbar.navbar')
@section('contenu')
    

<style>
    /* Navbar Brand */
   
    .navbar .navbar-nav .nav-link:hover,
.navbar .navbar-nav .nav-link.active {
    color:#e91e63;
}
    /* Content Styles */
    .content {
        margin-top: 120px;
        text-align: left;
        color: #fff;
        filter:blur(5);
    }
nav
    h1 {
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    p {
        font-size: 1.2rem;
        font-family: 'Trebuchet MS', Arial, sans-serif;
        margin-bottom: 30px;
    }

    /* Button Styles */
    .btn-primary {
        font-size: 1.2rem;
        padding: 12px 25px;
    }

    /* Responsive Text Adjustments */
    @media (max-width: 768px) {
        h1 {
            font-size: 2rem;
        }

        p {
            font-size: 1rem;
        }

        .btn-primary {
            font-size: 1rem;
            padding: 10px 20px;
        }
    }

    @media (max-width: 576px) {
        h1 {
            font-size: 1.8rem;
        }

        p {
            font-size: 0.9rem;
        }

        .btn-primary {
            font-size: 0.9rem;
            padding: 8px 15px;
        }
    }
    
   
    .bodyback {
        background-image: url('{{ asset('asset/images/cake.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        
        color: #fff;
        
        height: 94vh; 
        display: flex;
        flex-direction: column;
    }

    /* Style for span */
    

    .card-body {
        padding: 15px;
        background-color: #f8f9fa; 
    }

    .card-img-top {
        border-bottom: 2px solid #e91e63; 
        object-fit: cover;
        height: 250px; 
        width: 100%; 
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
    }

    .card-text {
        font-size: 1rem;
        color: #555;
    }
    .offer-section {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    flex-wrap: nowrap; 
    gap: 20px; 
}

.offer-section img {
    width: 60%; 
    height: 450px; 
    border-radius: 10px;
}

.offer-section .offer-details {
    flex: 1;
}

.offer-section h2 {
    font-size: 30px;
    margin-top: 100px;
    color: #e91e63;
}

.offer-section ul {
    list-style: none;
    padding: 0;
}

.offer-section ul li {
    padding: 10px 0;
    font-size: 24px;
}

.offer-section ul li::before {
    content: "\f0da";
    font-family: "Font Awesome 5 Free"; 
    font-weight: 900;
    padding-right: 10px;
}

.offer-section ul li a {
    text-decoration: none;
    color: inherit;
}

.offer-section ul li a:hover {
    color: #ec509e;
}

/* Media queries for responsiveness */
.body2 {
    margin-bottom: 70px;
    background-color: #fff;
}


/* For screens smaller than 992px (tablets and smaller) */
@media (max-width: 992px) {
    .offer-section {
        flex-direction: column; /* Stack the image and content vertically */
        align-items: center;
        gap: 20px; /* Adjust gap for smaller screens */
    }
    .offer-section img {
        max-width: 80%; /* Resize the image for tablet size */
    }
    .offer-section .offer-details {
        margin-left: 0; /* Remove left margin */
        text-align: center; /* Center the text */
    }
    .offer-section h2 {
        font-size: 26px; /* Slightly reduce font size */
    }
    .offer-section ul li {
        font-size: 20px; /* Adjust list font size */
    }
}

/* For screens smaller than 768px (mobile devices) */
@media (max-width: 768px) {
    .offer-section img {
        max-width: 100%; /* Full width image on mobile */
    }
    .offer-section h2 {
        font-size: 22px; /* Smaller title on mobile */
    }
    .offer-section ul li {
        font-size: 18px; /* Smaller list font size */
    }
}

/* For screens smaller than 576px (small mobile devices) */
@media (max-width: 576px) {
    .offer-section h2 {
        font-size: 20px; /* Further reduce font size */
    }
    .offer-section ul li {
        font-size: 16px; /* Smaller font for mobile */
    }
}
.cardespastry{
    background-color: #fbdae5;
    height: auto;
    border-radius: 10px;
    margin-bottom: 20px;
}
.H2{
    text-align: center;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
/********** Template CSS **********/
:root {
    --primary: #e91e63;
    --secondary: #545454;
    --light: #fbdae5;
    --dark: #1E1916;
}

h4,
h5,
h6,
.h4,
.h5,
.h6 {
    font-weight: 600 !important;
}

.py-6 {
    padding-top: 6rem;
    padding-bottom: 6rem;
}

.my-6 {
    margin-top: 6rem;
    margin-bottom: 6rem;
}

.back-to-top {
    position: fixed;
    display: none;
    right: 30px;
    bottom: 30px;
    z-index: 99;
}


/*** Spinner ***/
#spinner {
    opacity: 0;
    visibility: hidden;
    transition: opacity .5s ease-out, visibility 0s linear .5s;
    z-index: 99999;
}

#spinner.show {
    transition: opacity .5s ease-out, visibility 0s linear 0s;
    visibility: visible;
    opacity: 1;
}


/*** Button ***/
.btn {
    font-weight: 500;
    transition: .5s;
}

.btn.btn-primary {
    color: #FFFFFF;
}

.btn-square {
    width: 38px;
    height: 38px;
}

.btn-sm-square {
    width: 32px;
    height: 32px;
}

.btn-lg-square {
    width: 48px;
    height: 48px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: normal;
}


/*** Navbar ***/


.header-carousel .owl-nav {
    position: relative;
    width: 80px;
    height: 80px;
    margin: -40px auto 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
}



.page-header {
    margin-bottom: 6rem;
    background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../img/carousel-1.jpg) center center no-repeat;
    background-size: cover;
}

.breadcrumb-item+.breadcrumb-item::before {
    color: var(--light);
}


/*** Facts ***/
.fact-item {
    transition: .5s;
}

.fact-item:hover {
    margin-top: -10px;
    background: #FFFFFF !important;
    box-shadow: 0 0 45px rgba(0, 0, 0, .07);
}


/*** About ***/
.img-twice::before {
    position: absolute;
    content: "";
    width: 60%;
    height: 80%;
    top: 10%;
    left: 20%;
    background: var(--primary);
    border: 25px solid var(--light);
    border-radius: 6px;
    z-index: -1;
}


/*** Product ***/
.product-item {
    transition: .5s;
}

.product-item:hover {
    background: var(--primary) !important;
}

.product-item:hover * {
    color: var(--light);
}

.product-item:hover .border-primary {
    border-color: var(--light) !important;
}

.product-item .product-overlay {
    position: absolute;
    width: 100%;
    height: 0;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0, 0, 0, .5);
    overflow: hidden;
    opacity: 0;
    transition: .5s;
}

.product-item:hover .product-overlay {
    height: 100%;
    opacity: 1;
}


/*** Team ***/
.team-item .team-text {
    position: relative;
    height: 100px;
    overflow: hidden;
}

.team-item .team-title {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: var(--light);
    transition: .5s;
}

.team-item:hover .team-title {
    top: -100px;
}

.team-item .team-social {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 100px;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--primary);
    transition: .5s;
}

.team-item .team-social .btn {
    margin: 0 3px;
}

.team-item:hover .team-social {
    top: 0;
}


/*** Testimonial ***/
.testimonial-carousel .owl-item .testimonial-item img {
    width: 60px;
    height: 60px;
}

.testimonial-carousel .owl-item .testimonial-item,
.testimonial-carousel .owl-item .testimonial-item * {
    transition: .5s;
}

.testimonial-carousel .owl-item.center .testimonial-item {
    background: var(--primary) !important;
}

.testimonial-carousel .owl-item.center .testimonial-item * {
    color: #FFFFFF !important;
}

.testimonial-carousel .owl-nav {
    margin-top: 30px;
    display: flex;
    justify-content: center;
}

.testimonial-carousel .owl-nav .owl-prev,
.testimonial-carousel .owl-nav .owl-next {
    margin: 0 12px;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50px;
    font-size: 22px;
    color: var(--light);
    background: var(--primary);
    transition: .5s;
}


.footer h4{
    color: #e91e63;
}

/*** Footer ***/
.footer .btn.btn-link {
    display: block;
    margin-bottom: 5px;
    padding: 0;
   text-decoration: none;
    text-align: left;
    color: #FFFFFF;
    font-weight: normal;
    text-transform: capitalize;
    transition: .3s;
}

.footer .btn.btn-link::before {
    position: relative;
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    color: #e91e63;
    margin-right: 10px;
}

.footer .btn.btn-link:hover {
    color: var(--primary);
    letter-spacing: 1px;
    box-shadow: none;
}

.copyright {
    background:#e91e63;
}

.copyright a {
    color: var(--primary);
}

.copyright a:hover {
    color: var(--light);
}
/* General styling for the testimonial section */
.testimonials-section {
    padding: 50px;
    text-align: center;
    background-color: #fbdae5;
}

.testimonials-section h2 {
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 30px;
}

/* Styling for the testimonial container */
.testimonial-container {
    position: relative;
    display: flex;
    overflow: hidden;
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
}

/* Styling each testimonial card */
.testimonial-card {
    min-width: 100%;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    transform: scale(0.8);
   
    display: none;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
  
}

.testimonial-card p {
    font-size: 1.2rem;
    color: #666;
}
/* Cache tous les témoignages sauf celui actif */
.testimonial-card {
   
}

/* Témoignage actif */
.testimonial-card.active {
    display: block;
    opacity: 1;
}

.testimonial-card h4 {
    font-size: 1.1rem;
    margin-top: 15px;
    color: #e91e63;
}

/* Active testimonial styling */
.active {
    transform: scale(1);
    opacity: 1;
}

/* Navigation button styling */
.testimonial-nav {
    margin-top: 20px;
}

.testimonial-nav button {
    background-color: #e91e63;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 1.5rem;
    border-radius: 5px;
    cursor: pointer;
}

.testimonial-nav button:hover {
    background-color: #d81b60;
}

/* Responsiveness */
@media (max-width: 768px) {
    .testimonials-section {
        padding: 30px;
    }

    .testimonial-card {
        padding: 15px;
    }

    .testimonial-nav button {
        padding: 8px 16px;
        font-size: 1.2rem;
    }
}
.testimonial-card img {
            width: 80px; /* Taille de l'image */
            height: 80px;
            border-radius: 50%; /* Cercle pour l'image */
            margin-bottom: 15px;
            object-fit: cover;
        }
.homelink::focus{
    color: #e91e63;
}

</style>
<body>

    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('asset/images/cake.jpg')}}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                           
                              
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
        {{-- <div class="body2"> 
            <div class="offer-section">
                <!-- Image à gauche -->
                <img src="{{asset('asset/images/fraise.jpg')}}" alt="Offre Image">
                
                <!-- Détails des produits offerts -->
                <div class="offer-details">
                    <h2>What We Offer</h2>
                    <ul>
                        <li>
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                Wedding cakes
                            </a>
                        </li>
                        <li>
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                Sculpted cakes
                            </a>
                        </li>
                        <li>
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                Celebration cakes
                            </a>
                        </li>
                        <li>
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                               Moroccan Sweets
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>--}}
   
        <div class="cardespastry">
            <div><h2 class="H2">Menu</h2></div>
            <div class="container mt-5">
                <div class="row">
                    <!-- Carte 1 -->
                    <div class="col-md-3 mb-4"> <!-- Changed col-md-4 to col-md-3 -->
                        <div class="card">
                            <img src="{{ asset('asset/images/redvelvetcake.jpg') }}" class="card-img-top" alt="Cake 1">
                            <div class="card-body text-center">
                                <h5 class="card-title">Gâteau Chocolat</h5>
                                <p class="card-text">Prix: 15€</p>
                                
                            </div>
                        </div>
                    </div>
            
                    <!-- Carte 2 -->
                    <div class="col-md-3 mb-4"> <!-- Changed col-md-4 to col-md-3 -->
                        <div class="card">
                            <img src="{{ asset('asset/images/tiramisu.jpg') }}" class="card-img-top" alt="Cake 2">
                            <div class="card-body text-center">
                                <h5 class="card-title">Gâteau Fraise</h5>
                                <p class="card-text">Prix: 12€</p>
                               
                            </div>
                        </div>
                    </div>
                    
                    <!-- Carte 3 -->
                    <div class="col-md-3 mb-4"> <!-- Changed col-md-4 to col-md-3 -->
                        <div class="card">
                            <img src="{{ asset('asset/images/carrotcake.jpg') }}" class="card-img-top" alt="Cake 2">
                            <div class="card-body text-center">
                                <h5 class="card-title">Gâteau Carrote</h5>
                                <p class="card-text">Prix: 12€</p>
                               
                            </div>
                        </div>
                    </div>
                    
                    <!-- Carte 4 -->
                    <div class="col-md-3 mb-4"> <!-- Changed col-md-4 to col-md-3 -->
                        <div class="card">
                            <img src="{{ asset('asset/images/fruitcake.jpg') }}" class="card-img-top" alt="Cake 3">
                            <div class="card-body text-center">
                                <h5 class="card-title">Gâteau Vanille</h5>
                                <p class="card-text">Prix: 10€</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4"> <!-- Changed col-md-4 to col-md-3 -->
                        <div class="card">
                            <img src="{{ asset('asset/images/rasberycake.jpg') }}" class="card-img-top" alt="Cake 3">
                            <div class="card-body text-center">
                                <h5 class="card-title">Gâteau Vanille</h5>
                                <p class="card-text">Prix: 10€</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4"> <!-- Changed col-md-4 to col-md-3 -->
                        <div class="card">
                            <img src="{{ asset('asset/images/pink2.jpg') }}" class="card-img-top" alt="Cake 3">
                            <div class="card-body text-center">
                                <h5 class="card-title">Gâteau Vanille</h5>
                                <p class="card-text">Prix: 10€</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4"> <!-- Changed col-md-4 to col-md-3 -->
                        <div class="card">
                            <img src="{{ asset('asset/images/honeycake.jpg') }}" class="card-img-top" alt="Cake 3">
                            <div class="card-body text-center">
                                <h5 class="card-title">Gâteau Vanille</h5>
                                <p class="card-text">Prix: 10€</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4"> <!-- Changed col-md-4 to col-md-3 -->
                        <div class="card">
                            <img src="{{ asset('asset/images/cupcake.jpg') }}" class="card-img-top" alt="Cake 3">
                            <div class="card-body text-center">
                                <h5 class="card-title">Gâteau Vanille</h5>
                                <p class="card-text">Prix: 10€</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                       
                        <h1 class="display-6 mb-4" style="color: #e91e63;">What Do We Offer For You?</h1>
                        <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="row gy-5 gx-4">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square  rounded-circle me-3" style="background-color: #d81b60;">
                                        <i class="fa fa-bread-slice text-white"></i>
                                    </div>
                                    <h5 class="mb-0">Quality Products</h5>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square  rounded-circle me-3" style="background-color: #d81b60;">
                                        <i class="fa fa-birthday-cake text-white"></i>
                                    </div>
                                    <h5 class="mb-0">Custom Products</h5>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square  rounded-circle me-3" style="background-color: #d81b60;">
                                        <i class="fa fa-cart-plus text-white icon"></i>
                                    </div>
                                    <h5 class="mb-0">Online Order</h5>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square  rounded-circle me-3" style="background-color: #d81b60;">
                                        <i class="fa fa-truck text-white"></i>
                                    </div>
                                    <h5 class="mb-0">Home Delivery</h5>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row img-twice position-relative h-100">
                            <div class="col-6">
                                <img class="img-fluid rounded" src="{{ asset('asset/images/pink1.jpg') }}" alt="">
                            </div>
                            <div class="col-6 align-self-end">
                                <img class="img-fluid rounded" src="{{ asset('asset/images/fruitcake.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl py-6">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                  
                    <h1 class="display-6 mb-4" style="color: #e91e63;">We're Super Professional At Our Skills</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <img class="img-fluid" src="{{ asset('asset/images/chef1.jpg') }}" alt="">
                            <div class="team-text">
                                <div class="team-title">
                                    <h5>Full Name</h5>
                                    <span>Designation</span>
                                </div>
                                <div class="team-social">
                                    <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <img class="img-fluid" src="{{ asset('asset/images/chef2.jpg') }}" alt="">
                            <div class="team-text">
                                <div class="team-title">
                                    <h5>Full Name</h5>
                                    <span>Designation</span>
                                </div>
                                <div class="team-social">
                                    <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <img class="img-fluid" src="{{ asset('asset/images/chef1.jpg') }}" alt="">
                            <div class="team-text">
                                <div class="team-title">
                                    <h5>Full Name</h5>
                                    <span>Designation</span>
                                </div>
                                <div class="team-social">
                                    <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <img class="img-fluid" src="{{ asset('asset/images/chef2.jpg') }}" alt="">
                            <div class="team-text">
                                <div class="team-title">
                                    <h5>Full Name</h5>
                                    <span>Designation</span>
                                </div>
                                <div class="team-social">
                                    <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section id="client-testimonials" class="testimonials-section">
            <h2>Our Clients Say!!!</h2>
        
            <!-- Container for testimonials -->
            <div class="testimonial-container">
                <div class="testimonial-card">
                    <img src="{{ asset('asset/images/chef2.jpg') }}" alt="Michael Lee">
                    <p>"This service is amazing! Highly recommended."</p>
                    <h4>- John Doe</h4>
                </div>
        
                <div class="testimonial-card">
                    <img src="{{ asset('asset/images/chef2.jpg') }}" alt="Michael Lee">
                    <p>"Exceptional quality and fantastic customer support."</p>
                    <h4>- Jane Smith</h4>
                </div>
        
                <div class="testimonial-card">
                    <img src="{{ asset('asset/images/chef2.jpg') }}" alt="Michael Lee">
                    <p>"A seamless experience from start to finish."</p>
                    <h4>- Michael Lee</h4>
                </div>
            </div>
        
            <!-- Navigation buttons -->
            <div class="testimonial-nav">
                <button id="prev-btn">❮</button>
                <button id="next-btn">❯</button>
            </div>
        </section>
        
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

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="public/lib/wow/wow.min.js"></script>
        <script src="public/lib/easing/easing.min.js"></script>
        <script src="public/lib/waypoints/waypoints.min.js"></script>
        <script src="public/lib/counterup/counterup.min.js"></script>
        <script src="public/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/main.js"></script>
    <script>
        // JavaScript to handle testimonial slider animation
document.addEventListener('DOMContentLoaded', function() {
    const testimonials = document.querySelectorAll('.testimonial-card');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    let currentIndex = 0;

    // Function to update active testimonial
    function updateTestimonials(index) {
        testimonials.forEach((testimonial, i) => {
            if (i === index) {
                testimonial.classList.add('active');
            } else {
                testimonial.classList.remove('active');
            }
        });
    }

    // Show the next testimonial
    function showNext() {
        currentIndex = (currentIndex + 1) % testimonials.length;
        updateTestimonials(currentIndex);
    }

    // Show the previous testimonial
    function showPrev() {
        currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
        updateTestimonials(currentIndex);
    }

    // Auto-slide every 5 seconds
    setInterval(showNext, 5000);

    // Event listeners for buttons
    nextBtn.addEventListener('click', showNext);
    prevBtn.addEventListener('click', showPrev);

    // Initialize the first testimonial as active
    updateTestimonials(currentIndex);
});

    </script>
</body>

</html>

@endsection