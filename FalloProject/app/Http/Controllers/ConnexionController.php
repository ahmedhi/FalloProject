<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function form(){
        return view('connexion');
    }

    public function Traitement(){

        $connect = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if($connect){
            return 'Traitement formulaire connexion';
        }
        else return 'Erreur';

    }

}
