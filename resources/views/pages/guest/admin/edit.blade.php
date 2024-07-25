<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    @vite('resources/js/app.js')

</head>
<body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <header>
                        <h2>Vuoi editare {{$animal->Nome}}?</h2>
                    </header>

                {{--! SE CI SONO ERRORI, MOSTRALI IN QUESTO DIV--}}
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                    <form action="{{ route("admin.animal.update", ["animal"=> $animal])}}" method="POST">
                        @method("PUT")
                        @csrf

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nome</label>
                            <input type="text" value="{{old("Nome", $animal->Nome)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nome" placeholder="Inserisci il nome dell'animale">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Specie</label>
                            <input type="text" value="{{old("Specie", $animal->Specie)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Specie" placeholder="Inserisci la specie dell'animale">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Sesso</label>
                            <input type="text" value="{{old("Sesso", $animal->Sesso)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Sesso" placeholder="Inserisci il sesso dell'animale">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Età</label>
                            <input type="number" value="{{old("Età", $animal->Età)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Età" placeholder="Inserisci l'età dell'animale">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Data di arrivo</label>
                            <input type="text" value="{{old("Data_di_Arrivo", $animal->Data_di_Arrivo)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Data_di_Arrivo" placeholder="Inserisci la data di arrivo dell'animale">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Peso</label>
                            <input type="text" value="{{old("Peso", $animal->Peso)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Peso" placeholder="Inserisci il peso dell'animale">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Habitat</label>
                            <input type="text" value="{{old("Habitat", $animal->Habitat)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Habitat" placeholder="Inserisci l'habitat dell'animale">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Salute</label>
                            <input type="text" value="{{old("Salute", $animal->Salute)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Salute" placeholder="Inserisci le condizioni di salute dell'animale">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Note</label>
                            <input type="text" value="{{old("Note", $animal->Note)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Note" placeholder="Inserisci ulteriori note sull'animale">
                        </div>


                        <div class="button-container d-flex justify-content-center">
                            <button class="btn btn-primary btn-sm" type="submit">Modifica {{$animal->Nome}}</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>

</body>
</html>
