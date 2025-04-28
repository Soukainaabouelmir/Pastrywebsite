<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CommandeController extends Controller
{
    public function showCommandeForm($id)
{
    // Récupérer le produit par son ID en utilisant la façade DB
    $produit = DB::table('menu')->where('id', $id)->first();

    // Vérifiez si le produit existe
    if (!$produit) {
        abort(404); // Produit non trouvé, afficher une erreur 404
    }

    return view('commande', [
        'id' => $produit->id,
        'nom' => $produit->nom,
        'prix' => $produit->prix,
        'image' => $produit->image,
    ]);
}


        public function validerCommande(Request $request)
        {
            // Validation des données du formulaire
            $request->validate([
               'nom' => 'required',
        'telephone' => 'required',
        'adresse' => 'required',
        'product_nom' => 'required',
        'product_prix' => 'required',
        'quantity' => 'required',
        'image' => 'nullable',
            ]);
        
            // Calcul du prix total (quantité * prix unitaire)
            $total = $request->input('product_prix') * $request->input('quantity') + 3.99;
        
            // Insertion des données dans la table produits avec DB
            DB::table('produits')->insert([
                'nom' => $request->input('nom'),
                'telephone' => $request->input('telephone'),
                'adresse' => $request->input('adresse'),
                'product_nom' => $request->input('product_nom'),
                'product_prix' => $total, // Enregistrer le prix total
                'quantity' => $request->input('quantity'),
                'image' => $request->input('image'),
                
            ]);
        
            return redirect()->back()->with('success', 'Votre commande a été passée avec succès !');
        }

}
