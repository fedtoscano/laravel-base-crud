<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $table = "animals";
    protected $fillable = [
        "Nome",
        "Specie",
        "Sesso",
        "Età",
        "Data_di_Arrivo",
        "Peso",
        "Habitat",
        "Salute",
        "Note"
    ];
}
