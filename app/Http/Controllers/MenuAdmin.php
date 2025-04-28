<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Importer le facade DB

class MenuAdmin extends Controller
{

    public function indexx()
{
    // Récupérer uniquement les produits de la catégorie 1
    $products = DB::table('menu')->where('categorie', 1)->get();
    return view('menu', compact('products'));
}

public function indexcontact()
{
    
   
    return view('contact');
}

    public function indexxx()
    {
        
        $products = DB::table('menu')->get();
        return view('Admin.listeproduits', compact('products'));
      
    }


    public function index()
    {
        // Récupérer tous les produits
        $products = DB::table('menu')->get();
        return view('Admin.gestionproduit', compact('products'));
    }

    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'image' => 'required',
            'prix' => 'required',
            'categorie' => 'required',
        ]);
    
        // Stockage de l'image dans public/asset/images
        $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension(); // Générer un nom d'image unique
        $request->file('image')->move(public_path('asset/images'), $imageName); // Déplacer l'image
    
        // Enregistrement du produit dans la base de données
        try {
            DB::table('menu')->insert([
                'nom' => $request->nom,
                'description' => $request->description,
                'image' => 'asset/images/' . $imageName, // Enregistrer le chemin relatif de l'image
                'prix' => $request->prix,
                'categorie' => $request->categorie,
            ]);
            return redirect()->route('admin.menu')->with('success', 'Produit ajouté avec succès');
        } catch (\Exception $e) {
            return redirect()->route('admin.menu')->with('error', 'Erreur lors de l\'ajout du produit : ' . $e->getMessage());
        }
    }
    

    public function edit($id)
{
    // Récupérer le produit par son ID
    $product = DB::table('menu')->where('id', $id)->first();
    return view('Admin.editProduct', compact('product')); // Assurez-vous d'avoir cette vue
}

public function update(Request $request, $id)
{
    // Validation des données
    $request->validate([
        'nom' => 'required',
        'description' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        'prix' => 'required|numeric',
        'categorie' => 'required',
    ]);

    // Récupérer le produit existant
    $product = DB::table('menu')->where('id', $id)->first();

    // Si une nouvelle image est téléchargée, gérer l'upload
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('asset/images'), $imageName);
        $imagePath = 'asset/images/' . $imageName;
    } else {
        $imagePath = $product->image; // Conserver l'ancienne image si aucune nouvelle n'est téléchargée
    }

    // Mise à jour du produit dans la base de données
    DB::table('menu')->where('id', $id)->update([
        'nom' => $request->nom,
        'description' => $request->description,
        'image' => $imagePath,
        'prix' => $request->prix,
        'categorie' => $request->categorie,
    ]);

    return redirect()->route('liste.produit')->with('success', 'Produit mis à jour avec succès');
}

public function destroy($id)
{
    DB::table('menu')->where('id', $id)->delete();
    return redirect()->route('liste.produit')->with('success', 'Produit supprimé avec succès');
}

// filtrer Prix

public function filterProducts(Request $request) {
    $price = $request->input('price');
    
   
    $products = DB::table('menu') 
        ->where('prix', '=', $price)
        ->where('categorie', 1)
        ->get();

    return response()->json(['menu' => $products]);
}


public function getCakeTypes() {
    // Récupérer les noms des gâteaux de la catégorie 1
    $types = DB::table('menu')->where('categorie', 1)->pluck('nom'); 
    return response()->json($types);
}



public function filterProductsByType(Request $request) {
    $type = $request->input('type');
    
    // Récupérer les produits qui correspondent au type sélectionné
    $products = DB::table('menu')
        ->where('nom', $type)
        ->where('categorie', 1) // Assurez-vous que cela correspond à la colonne correcte
        ->get();

    return response()->json(['products' => $products]);
}


// Birtdaycake's menu

public function indexbirthday()
{
   // Vérifie si la collection n'est pas vide
    
   
    // Récupérer uniquement les produits de la catégorie 1
    $products = DB::table('menu')->where('categorie', 2)->get();
    $hasProducts = $products->isNotEmpty(); 
    return view('birthdaycake', compact('products','hasProducts'));
}


public function filterbirthdayProducts(Request $request) {
    $price = $request->input('price');
    
   
    $products = DB::table('menu') 
        ->where('prix', '=', $price)
        ->where('categorie', 2)
        ->get();

    return response()->json(['menu' => $products]);
}



public function getbirthdayCakeTypes() {
    // Récupérer les noms des gâteaux de la catégorie 2
    $types = DB::table('menu')->where('categorie', 2)->pluck('nom'); 
    return response()->json($types);
}



public function filterbirthdayProductsByType(Request $request) {
    $type = $request->input('type');
    
    // Récupérer les produits qui correspondent au type sélectionné
    $products = DB::table('menu')
        ->where('nom', $type)
        ->where('categorie', 2)// Assurez-vous que cela correspond à la colonne correcte
        ->get();

    return response()->json(['products' => $products]);
}
// Smple cake menu ////////////////////////////////////////////////////////////////////////////////SIMPLECAKE MENU

public function indexsimple()
{
   // Vérifie si la collection n'est pas vide
    
   
    // Récupérer uniquement les produits de la catégorie 1
    $products = DB::table('menu')->where('categorie', 3)->get();
    $hasProducts = $products->isNotEmpty(); 
    return view('simplecake', compact('products','hasProducts'));
}


public function filtersimpleProducts(Request $request) {
    $price = $request->input('price');
    
   
    $products = DB::table('menu') 
        ->where('prix', '=', $price)
        ->where('categorie', 3)
        ->get();

    return response()->json(['menu' => $products]);
}



public function getsimpleCakeTypes() {
    // Récupérer les noms des gâteaux de la catégorie 3
    $types = DB::table('menu')->where('categorie', 3)->pluck('nom'); 
    return response()->json($types);
}



public function filtersimpleProductsByType(Request $request) {
    $type = $request->input('type');
    
    // Récupérer les produits qui correspondent au type sélectionné et à la catégorie 3
    $products = DB::table('menu')
        ->where('nom', $type)
        ->where('categorie', 3) // Assurez-vous que cela correspond à la colonne correcte
        ->select('nom') // Sélectionner uniquement la colonne 'nom'
        ->get();

    return response()->json(['products' => $products]);
}
/////////////////////////////////////////////BUFFET MENU CAKE///////////////////////////////////BUFFET MENU CAKE


public function indexbuffet()
{
   // Vérifie si la collection n'est pas vide
    
   
    // Récupérer uniquement les produits de la catégorie 1
    $products = DB::table('menu')->where('categorie', 4)->get();
    $hasProducts = $products->isNotEmpty(); 
    return view('buffet', compact('products','hasProducts'));
}


public function filterbuffetProducts(Request $request) {
    $price = $request->input('price');
    
    // Récupérer les produits dont le prix est inférieur ou égal au prix sélectionné
    $products = DB::table('menu') 
        ->where('prix', '<=', $price) // Changer '=' à '<='
        ->where('categorie', 4) // Filtrer la catégorie 4
        ->get();

    return response()->json(['products' => $products]);
}




public function getbuffetCakeTypes() {
    // Récupérer les noms des gâteaux de la catégorie 4
    $types = DB::table('menu')->where('categorie', 4)->pluck('nom'); 
    return response()->json($types);
}



public function filterbuffetProductsByType(Request $request) {
    $type = $request->input('type');
    
    // Récupérer les produits qui correspondent au type sélectionné et à la catégorie 4
    $products = DB::table('menu')
        ->where('nom', $type)
        ->where('categorie', 4) // Assurez-vous que cela correspond à la colonne correcte
        ->select('nom') // Sélectionner uniquement la colonne 'nom'
        ->get();

    return response()->json(['products' => $products]);
}





public function storeContact(Request $request)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Enregistrement du message de contact dans la base de données
        try {
            DB::table('contact')->insert([
                'nom' => $request->nom,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
                  // Ajouter la date de mise à jour
            ]);

            return redirect()->route('contact')->with('success', 'Message envoyé avec succès');
        } catch (\Exception $e) {
            return redirect()->route('contact')->with('error', 'Erreur lors de l\'envoi du message : ' . $e->getMessage());
        }
    }


    ////////////////////////////////////////////////////////commadesdesclents///////////////////////////
    public function commandes()
    {
        // Récupérer toutes les commandes depuis la table 'produits'
        $commandes = DB::table('produits')->get(); 
        
        return view('Admin.commandeclient', compact('commandes'));
    }
    public function deleteCommande($id)
    {
        // Supprimer une commande en utilisant le query builder
        $deleted = DB::table('produits')->where('id', $id)->delete();

        if ($deleted) {
            return redirect()->route('admin.commande')->with('success', 'Commande supprimée avec succès.');
        }

        return redirect()->route('admin.commande')->with('error', 'Commande non trouvée.');
    }


    // contact admin contact admin et les client le clientccontacdamin contat admi
    public function contactes()
{
    // Récupère tous les contacts de la base de données
    $contacts = DB::table('contact')->get();
    return view('Admin.contactclient', compact('contacts'));
}


public function destroycontact($id)
{
    // Supprime le contact de la base de données
    DB::table('contact')->where('id', $id)->delete();

    // Redirige avec un message de succès
    return redirect()->route('admin.contact')->with('success', 'Contact supprimé avec succès.');
}
}

