<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('asset/images/logo_img.png') }}">

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="{{ asset('asset/css/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/css/lib/data-table/buttons.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/css/style.css') }}" rel="stylesheet">
</head>

<style>
    .logo {
        background-color: rgb(255, 255, 255);
    }

    #modifier {
        background-color: #e91e63;
        color: rgb(255, 255, 255);
        border: none;
        border-radius: 5px;
        width: 100%;
        height: 40px;
    }

    #modifier:hover {
        background-color: #5e5f61;
    }
    @media (max-width: 375px) {
    a {
        font-size: 12px;
    }
}
    
</style>

<body>
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <div class="logo">
                    <a class="navbar-brand" href="">
                       
                    </a>
                </div>
                <ul>

                    <!----------------------------tableau de bord
                    <li>                       <a class="sidebar-sub-toggle">
                            <i class="ti-home"></i> Tableau de bord
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                        </ul>
                    </li>
                   ------------------------------------>
                    
                     <!------------------------------------------------------le tableau de bord ---------------------------------------->
                    
                    <!-----------------------------------------------------Gestion des comptes ---------------------------------------->
                    <li><a href="{{route('dashboard')}}" > <i class="ti-bar-chart-alt"></i> Gestion des comptes </a></li>
                    <!------------------------------------------------------Liste des étudiants---------------------------------------->
                    
                    <!----------------------------------------------------------Liste des enseignants------------------------------------>
                    <li><a href="{{route('admin.menu')}}"><i class="ti-user"></i> Gestion des produits</a></li>
                    <li><a href="{{route('liste.produit')}}"><i class="ti-user"></i> Liste des produits</a></li>
                    <!---------------------------------------------------------Demandes de scolarité----------------------------------------->
                    <li><a href="{{route('admin.commande')}}"><i class="ti-layout-grid2-alt"></i>Commandes des clients</a></li>
                   
                    <!----------------------------------------------------------Réclamations de scolarité--------------------------------------->
                    <li><a href="{{route('admin.contact')}}"><i class="ti-layout-grid2-alt"></i> Contact Client</a></li>
                    <!-----------------------------------------------------Génération emploi du temps---------------------------------------->
                    
                   
                   
                    
                    <!------------------------------------------changement de mot de passe ------------------------------------->
                    
                    
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <li class="nav-item">
                                    @if (Auth::user())
                                        <span class="navbar-text" style="color:#5f0556; font-size:15px;font-weight:600;">
                                            {{ Auth::user()->name }}
                                        </span>
                                    @else
                                        <a class="nav-link" href="#" style="color: #5f0556;">Nom utilisateur</a>
                                    @endif
                                    <i class="ti-user" style="color:#5f0556;"></i>
                                </li>
                            </div>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="ti-power-off"></i> Déconnecter
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                @yield('contenu')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('asset/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/js/lib/jquery.nanoscroller.min.js') }}"></script>
    <!-- nano scroller -->
    <script src="{{ asset('asset/js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ asset('asset/js/lib/preloader/pace.min.js') }}"></script>
    <!-- sidebar -->
    <!-- bootstrap -->
    <script src="{{ asset('asset/js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/scripts.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('asset/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('asset/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('asset/js/lib/data-table/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('asset/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{ asset('asset/js/lib/data-table/pdfmake.min.js') }}"></script>
    <script src="{{ asset('asset/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ asset('asset/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('asset/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{ asset('asset/js/lib/data-table/datatables-init.js') }}"></script>
</body>
</html>
