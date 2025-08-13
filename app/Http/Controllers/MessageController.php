<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function newMessage (Request $request) {
        $message = new Message();
        $message->nom = $request->nom;
        $message->prenom = $request->prenom;
        $message->mail = $request->mail;
        $message->tel = $request->tel;
        $message->sujet = $request->sujet;
        $message->message = $request->message;
        $message->save();
        return redirect()->route("confirmation");
    }
    public function confirmation () {
        return view("confirmation");
    }
    public function messages () {
        $liste_messages = Message::all();
        return view("backend.messages", compact("liste_messages"));
    }
    public function delete_message ($id) {
        $message = Message::where("id", $id)->delete();
        return redirect()->route("messages");
    }
}
