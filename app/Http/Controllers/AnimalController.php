<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal as Animal;

class AnimalController extends Controller
{
    //funzione index
    public function index(){
        //restituisce tutti gli animali
        //? prendo TUTTI GLI ANIMALS dal db
        $animals = Animal::all();

        //restituisco la view con tutti gli animali
        return view("pages.guest.admin.index", compact("animals"));
    }

    //funzione show
    public function show($id){
        // Recupero l'animale dal database in base all'ID
        $singleAnimal = Animal::findOrFail($id);

        // Restituisce la vista 'animals.show' con i dati dell'animale
        return view('pages.guest.admin.show', compact("singleAnimal"));
    }

    //funzione create
    public function create(Request $request){
        //creo il nuovo animale con i dati della $request
        $newAnimal = Animal::create($request);

        redirect()->route("pages.admin.index");
    }
}
