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

    public function show(){
        //restituisce solo alcuni animali
    }
}
