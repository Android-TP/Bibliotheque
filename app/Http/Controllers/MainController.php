<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre;
use App\Models\Detail_scientifique;

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
        $livres = Detail_scientifique::all();
        if($livres->count()==0){
            for($i=0; $i<10; $i++){
                Detail_scientifique::create([
                    "livre_id"=>$i+1,
                    "auteur"=>"C.Ramon",
                    "resume"=>"lorem ipsum",
                    "maison_edition"=>"Dunod",
                    "isbn"=>"21543"
                ]);
            }
        }
        return view("pages.books", ["livres"=>Livre::all()]);
    }
    public function emprunts(){
        return view("pages.emprunts", ["livres"=>Livre::all()]);
    }
}
