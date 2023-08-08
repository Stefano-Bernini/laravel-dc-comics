@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h2>Aggiungi fumetto</h2>
            </div>
            <div class="col-12">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Titolo</label>
                        <input class="form-control" type="text" id="title" name="title" placeholder="Titolo">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Serie</label>
                        <input class="form-control" type="text" id="series" name="series" placeholder="Serie">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Prezzo</label>
                        <input class="form-control" type="text" id="price" name="price" placeholder="Prezzo">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tipo</label>
                        <input class="form-control" type="text" id="type" name="type" placeholder="Tipo">
                    </div>
                    <div class="form-group mt-4">
                        <button class="btn btn-success" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection