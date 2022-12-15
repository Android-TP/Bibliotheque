<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre;

class MainController extends Controller
{
    //

    public function index(){
        return view("pages.index", ["livres"=>Livre::all()]);
    }
    public function user_profile(){

    }
    public function dashboard(){
        return view("dashboard.custom-dash");
    }

    public function commander(){
        return view("pages.commande");
    }

    public function abonnement(){
        return view("pages.abonnement");
    }

    public function books(){
        
        return view("pages.books");
    }
    public function emprunts(){
        return view("pages.emprunts");
    }
}
