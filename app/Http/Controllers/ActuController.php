<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ActuController extends Controller
{
    //
    public function index($id=0){

        $actus = Actu::all() ;
        $typeactus = Categorie::all() ;
        return view("actu", compact("actus", "typeactus")) ;

    }

    public function categories($id=0){

        $actus = Actu::where('categorie_id', $id)->get() ;
        $typeactus = Categorie::all() ;
        return view("actu", compact("actus", "typeactus")) ;

    }

    public function detail($id=0){

        $details = Actu::Find($id) ;
        return view("detail", compact("details")) ;
    }

}