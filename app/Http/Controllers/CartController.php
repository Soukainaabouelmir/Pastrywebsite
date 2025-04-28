<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Modèle du produit
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        
        return view('menu');
    }
    
   
}

