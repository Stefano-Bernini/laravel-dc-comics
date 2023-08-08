@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h2>Modifica fumetto</h2>
            </div>
            <div class="col-12">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="control-label">Titolo</label>
                        <input class="form-control" type="text" id="title" name="title" placeholder="Titolo" value="{{ $comic->title }}">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Serie</label>
                        <input class="form-control" type="text" id="series" name="series" placeholder="Serie" value="{{ $comic->series }}">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Prezzo</label>
                        <input class="form-control" type="text" id="price" name="price" placeholder="Prezzo" value="{{ $comic->price }}">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tipo</label>
                        <input class="form-control" type="text" id="type" name="type" placeholder="Tipo" value="{{ $comic->type }}">
                    </div>
                    <div class="form-group mt-4">
                        <button class="btn btn-success" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection