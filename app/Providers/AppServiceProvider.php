<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Partager les données de l'utilisateur authentifié avec toutes les vues
        View::composer('*', function ($view) {
            $view->with('authUser', Auth::user()); // Utiliser le guard par défaut
        });

        // Partager les données de l'administrateur avec toutes les vues
        // Si vous avez un guard spécifique pour les administrateurs, ajoutez-le ici
    }

  
}
