<?php

namespace Database\Seeders;

use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;
use InvalidArgumentException;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $animalsData = $this->getCsvInfo("storage\app\animali_riserva.csv");

        foreach ($animalsData as $index => $singleAnimalData) {
            # code...
            $newAnimal = new Animal();
            //popolo la nuova istanza
            if($index>0){
                $newAnimal->Nome = $singleAnimalData[1];
                $newAnimal->Specie = $singleAnimalData[2];
                $newAnimal->Sesso = $singleAnimalData[3];
                $newAnimal->Età = $singleAnimalData[4];
                $newAnimal->Data_di_Arrivo = $singleAnimalData[5];
                $newAnimal->Peso = $singleAnimalData[6];
                $newAnimal->Habitat = $singleAnimalData[7];
                $newAnimal->Salute = $singleAnimalData[8];
                $newAnimal->Note = $singleAnimalData[9];

                //salvo l'istanza
                $newAnimal->save();
            }
        }
        var_dump($animalsData);
    }

    public function getCsvInfo($filePath){
        // apriamo il file
        $csvData =[];

        $fileData=fopen($filePath, "r");

        //se non lo trovi dimmelo
        if (!$fileData){
            throw new InvalidArgumentException("File not found. Check your path!");
        }

        //se lo trovi bene
        while(($csvRow = fgetcsv($fileData)) !== false){
            $csvData[] = $csvRow;
        }

        //chiudere il file
        fclose($fileData);

        return $csvData;
    }
}
