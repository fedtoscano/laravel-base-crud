<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animal Deleted Index</title>
    @vite('resources/js/app.js')
</head>
<body>

    <div class="container container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>DELETED ANIMALS</h1>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Specie</th>
                        <th scope="col">Sesso</th>
                        <th scope="col">Età</th>
                        <th scope="col">Data di arrivo</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Habitat</th>
                        <th scope="col">Salute</th>
                        <th scope="col">Note</th>
                        <th scope="col">Azioni</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($animals as $singleAnimal)
                    <tr>
                        <th scope="row">{{$singleAnimal->id}}</th>
                        <td>{{$singleAnimal->Nome}}</td>
                        <td>{{$singleAnimal->Specie}}</td>
                        <td>{{$singleAnimal->Sesso}}</td>
                        <td>{{$singleAnimal->Età}}</td>
                        <td>{{$singleAnimal->Data_di_Arrivo}}</td>
                        <td>{{$singleAnimal->Peso}}kg</td>
                        <td>{{$singleAnimal->Habitat}}</td>
                        <td>{{$singleAnimal->Salute}}</td>
                        <td>{{$singleAnimal->Note}}</td>
                        <td>
                            <form action="{{ route( "animal.restore", ["id" => $singleAnimal->id]) }}" method="POST">
                                @csrf
                                @method("PATCH")
                                <button class="btn btn-warning btn-sm">Restore</button>
                            </form>

                            <form action="{{route("animals.permanent.delete", ["id" => "$singleAnimal->id"])}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger btn-sm">Permanent Delete</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>


</body>
</html>
