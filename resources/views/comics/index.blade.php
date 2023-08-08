@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <a class="btn btn-sm btn-primary" href="{{ route('comics.create') }}">Aggiungi fumetto</a>
            </div>
            <div class="col-12">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titolo</th>
                            <th>Serie</th>
                            <th>Prezzo</th>
                            <th>Tipo</th>
                            <th>Azioni</th>
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
                                    <form class="d-inline-block" action="{{route('comics.destroy', $comic->id)}}}}" onsubmit="return confirm('Sei ssicuro di voler cancellare questo elemento?')" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection