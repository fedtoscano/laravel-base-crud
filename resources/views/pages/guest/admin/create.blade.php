<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <header>
                    <h1>Inserisci un nuovo animale!</h1>
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

                {{-- FORM --}}
                <form action="{{ route("pages.admin.store")}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old("Nome")}}" name="Nome" placeholder="Inserisci il nome dell'animale">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Specie</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old("Specie")}}" name="Specie" placeholder="Inserisci la specie dell'animale">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Sesso</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old("Sesso")}}" name="Sesso" placeholder="Inserisci il sesso dell'animale">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Età</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old("Età")}}" name="Età" placeholder="Inserisci l'età dell'animale">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Data di arrivo</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old("Data_di_Arrivo")}}" name="Data_di_Arrivo" placeholder="Inserisci la data di arrivo dell'animale">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Peso</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old("Peso")}}" name="Peso" placeholder="Inserisci il peso dell'animale">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Habitat</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old("Habitat")}}" name="Habitat" placeholder="Inserisci l'habitat dell'animale">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Salute</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old("Salute")}}" name="Salute" placeholder="Inserisci le condizioni di salute dell'animale">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Note</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old("Note")}}" name="Note" placeholder="Inserisci ulteriori note sull'animale">
                    </div>


                    <div class="button-container d-flex justify-content-center">
                        <button class="btn btn-primary btn-sm" type="submit">Aggiungi il nuovo animale</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>
