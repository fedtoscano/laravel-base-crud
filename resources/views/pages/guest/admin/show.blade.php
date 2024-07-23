<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Animal</title>
    @vite('resources/js/app.js')

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$singleAnimal->Nome}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$singleAnimal->Specie}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{$singleAnimal->Sesso}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{$singleAnimal->Età}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Habitat naturale:{{$singleAnimal->Habitat}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Arrivato il {{$singleAnimal->Data_di_Arrivo}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Peso: {{$singleAnimal->Peso}}kg</h6>
                        <p class="card-text">{{$singleAnimal->Note}}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
