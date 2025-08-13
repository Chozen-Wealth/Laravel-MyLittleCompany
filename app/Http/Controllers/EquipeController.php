<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function newEmploye (Request $request) {
        $employe = new Employe();
        $employe->nom = $request->nom;
        $employe->prenom = $request->prenom;
        $employe->tel = $request->tel;
        $employe->email = $request->email;
        $employe->post = $request->post;
        $employe->role = $request->role;
        $employe->salaire = $request->salaire;
        $employe->save();
        return redirect()->route("employes");
    }
    public function employes () {
        $employe = Employe::all();
        return view("backend.employes", compact("employe"));
    }
    public function delete_employe ($id) {
        $employe = Employe::where("id", $id)->delete();
        return redirect()->route("employes");
    }
    public function create_employe_page () {
        return view("backend.create_employe");
    }
}
