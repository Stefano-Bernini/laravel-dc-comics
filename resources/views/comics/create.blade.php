@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h2>Aggiungi fumetto</h2>
            </div>
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Titolo</label>
                        <input class="form-control" type="text" id="title" name="title" placeholder="Titolo" value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Serie</label>
                        <input class="form-control" type="text" id="series" name="series" placeholder="Serie" value="{{ old('series') }}">
                        @error('series')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Prezzo</label>
                        <input class="form-control" type="text" id="price" name="price" placeholder="Prezzo" value="{{ old('price') }}">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tipo</label>
                        <input class="form-control" type="text" id="type" name="type" placeholder="Tipo" value="{{ old('type') }}">
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <button class="btn btn-success" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection