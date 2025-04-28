<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pâtisserie')</title> <!-- Titre de la page dynamique -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* Navbar Brand */
    /********** Template CSS **********/
:root {
    --primary: #e91e63;
    --secondary: #545454;
    --light: #FDF5EB;
    --dark: #1E1916;
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
nav
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
.navbar .dropdown-toggle::after {
    border: none;
    content: "\f107";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    vertical-align: middle;
    margin-left: 8px;
}

.navbar .navbar-nav .nav-link {
    padding: 35px 15px;
    color: var(--light);
    outline: none;
}



.navbar.fixed-top {
    transition: .5s;
}

@media (max-width: 991.98px) {
    .navbar .navbar-nav {
        margin-top: 10px;
        border-top: 1px solid rgba(255, 255, 255, .3);
        background: var(--dark);
    }

    .navbar .navbar-nav .nav-link {
        padding: 10px 0;
    }
}

@media (min-width: 992px) {
    .navbar .nav-item .dropdown-menu {
        display: block;
        visibility: hidden;
        top: 100%;
        transform: rotateX(-75deg);
        transform-origin: 0% 0%;
        transition: .5s;
        opacity: 0;
    }

    .navbar .nav-item:hover .dropdown-menu {
        transform: rotateX(0deg);
        visibility: visible;
        transition: .5s;
        opacity: 1;
    }
}


/*** Header ***/
.header-carousel .owl-carousel-inner {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    background: rgba(0, 0, 0, .5);
}

@media (max-width: 768px) {
    .header-carousel .owl-carousel-item {
        position: relative;
        min-height: 600px;
    }

    .header-carousel .owl-carousel-item img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .header-carousel .owl-carousel-item p {
        font-size: 16px !important;
    }
}

.header-carousel .owl-nav {
    position: relative;
    width: 80px;
    height: 80px;
    margin: -40px auto 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
}

.header-carousel .owl-nav::before {
    position: absolute;
    content: "";
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: #FFFFFF;
    transform: rotate(45deg);
}

.header-carousel .owl-nav .owl-prev,
.header-carousel .owl-nav .owl-next {
    position: relative;
    font-size: 40px;
    color: var(--primary);
    transition: .5s;
    z-index: 1;
}

.header-carousel .owl-nav .owl-prev:hover,
.header-carousel .owl-nav .owl-next:hover {
    color: var(--dark);
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

.testimonial-carousel .owl-nav .owl-prev:hover,
.testimonial-carousel .owl-nav .owl-next:hover {
    color: var(--primary);
    background: var(--dark);
}


/*** Footer ***/

.navbar-black {
    background-color: rgb(17, 17, 17) !important;
    transition: background-color 0.3s ease;
}

</style>
<body>
    <!-- Navbar -->
   
    <!-- Spinner End -->


    <!-- Topbar Start -->
    
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-black navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text m-0" style="font-style: italic; color:#e91e63;">Souka's Cake</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto p-4 p-lg-0">
                <a href="{{route('home')}}" class="nav-item nav-link homelink active">Home</a>
                <a href="{{route('menu')}}" class="nav-item nav-link mariagelink activee">Wedding Cake</a>
                
                <a href="{{route('menubirthday')}}" class="nav-item nav-link birhtdaycake activeee">Birthday cake</a>
                <a href="{{route('menusimple')}}" class="nav-item nav-link activeeee">Simple cake</a>
                <a href="{{route('menubuffet')}}" class="nav-item nav-link activeeeee">Buffet</a>
                <a href="{{route('contact')}}" class="nav-item nav-link activeeeeee">Contact</a>
            </div>
            <div class=" d-none d-lg-flex">
                <div class="flex-shrink-0 btn-lg-square border border-light rounded-circle">
                    <i class="fa fa-phone" style="color: #e91e63;"></i>
                </div>
                <div class="ps-3">
                    <small class="text mb-0" style="color:#e91e63">Call Us</small>
                    <p class="text-light fs-5 mb-0">+212 6345 67894</p>
                </div>
            </div>
        </div>
    </nav>
        @yield('contenu')  <!-- Ceci injectera le contenu de chaque page enfant -->
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener("scroll", function() {
            var navbar = document.querySelector(".navbar");
            if (window.scrollY > 100) { // Tu peux ajuster la valeur de 100 à ta convenance
                navbar.classList.add("navbar-black");
            } else {
                navbar.classList.remove("navbar-black");
            }
        });
    </script>
    
</body>
</html>
