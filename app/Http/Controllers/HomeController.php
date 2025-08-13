<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Produit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home () {
        return view("home");
    }
    public function produits () {
        $produits = Produit::all();
        return view("produits", compact("produits"));
    }
    public function contact () {
        return view("contact");
    }
    public function equipe () {
        $employes = Employe::all();
        return view("equipe", compact("employes"));
    }
}
