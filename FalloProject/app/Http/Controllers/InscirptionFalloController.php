<?php

namespace App\Http\Controllers;

use App\user;
use App\utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class InscriptionController extends Controller
{
    public function form(){
        return view('inscription');
    }

    // Fonction d'ajout d'un utilisateur
    public function Traitement(){
        request() -> validate([
            'email' => ['required','email'],
            'password' => ['required','confirmed','min:8'],
            'password_confirmation' => ['required'],
            'nom_complet' => ['required'],
            'image' => ['required'],
            'num' => ['required','min:10','max:10'],
            'date' => ['required'],
            'pays' => ['required'],
            'poids' => ['required'],
            'taille' => ['required'],
        ]);
        $user = \App\utilisateur::create([
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),
            'type' => 1 ,
        ]);

        $table->string('email')->unique;
        $table->string('mot_de_passe');
        $table->integer('type');

        // Save the profil picture
        if( Input::file('image')){
        $file = Input::file('file');
        $file->move('UserImage', $file->getClientOriginalName()); //l'image sera enregistrer dans public/UserImage
        $nameFile = getClientOriginalName() ;
        }
        else {
          $nameFile = "profilIconDefault.png";
        }

        $user = \App\utilisateurs::create([
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),
            'nom' => request('nom'),
            'prenom' => request('prenom'),
            'img' => $nameFile,
            'mail' => request('mail'),
            'tel' => request('tel'),
            'img' => request('img'),
            'taille' => request('taille'),
            'poids' => request('poids'),
            'date_de_naissance' => request('date'),
            'sexe' => request('sexe'),
            'pays' => request('pays'),
        ]);
        */

        return redirect('/connexion'); ;

    }

}
