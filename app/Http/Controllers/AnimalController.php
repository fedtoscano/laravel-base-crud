<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnimalRequest;
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
    public function create(){
        //indirizzo l'utente alla pagina con il form da compilare:
            return view("pages.guest.admin.create");
    }

    //funzione store
    public function store(StoreAnimalRequest $request){
        //creo un nuovo animale con il payload in arrivo dal form
        $data = $request->validated();
        $newAnimal = Animal::create($data);

        //reindirizzo l'utente alla homepage
        return redirect()->route("pages.admin.index");
    }

    //funzione edit
    public function edit(Animal $animal){
        //restituisce la pagina di edit
        return view("pages.guest.admin.edit", compact("animal"));
    }

    //funzione update
    public function update(Request $request, Animal $animal){
        $data = $request->all();
        $animal->update($data);

        return redirect()->route("pages.admin.show", $animal->id);
    }

    //funzione destroy
    public function destroy($id){
        $animalToDestroy = Animal::findOrFail($id);
        $animalToDestroy->delete();

        return redirect()->route("pages.admin.index");
    }
}
