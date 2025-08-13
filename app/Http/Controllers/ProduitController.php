<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function create_produits (Request $request) {

        $request->validate(["img" => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120"]);

        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->type = $request->type;
        $produit->descriptif = $request->descriptif;
        $produit->prix = $request->prix;
        if ($request->hasFile("img")) {
            $file = $request->file("img");
            $filename = time()."_".$file->getClientOriginalName();
            $filepath = $file->storeAs("uploads/produits",$filename,"public");
            $produit->img = $filepath;
        }
        $produit->save();
        return redirect()->route("backend_produits");
    }

    public function produits () {
        $produits = Produit::all();
        return view("backend.produits", compact("produits"));
    }
    public function create_produits_page () {
        return view("backend.create_produit");
    }
}
