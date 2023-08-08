@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <a class="btn btn-sm btn-primary" href="{{ route('comics.create') }}">Aggiungi fumetto</a>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titolo</th>
                            <th>Serie</th>
                            <th>Prezzo</th>
                            <th>Tipo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>
                                <td>{{ $comic->id }}</td>
                                <td>{{ $comic->title }}</td>
                                <td>{{ $comic->series }}</td>
                                <td>{{ $comic->price }}</td>
                                <td>{{ $comic->type }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('comics.show', $comic->id)}}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a class="btn btn-warning btn-sm" href="{{route('comics.edit', $comic->id)}}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection