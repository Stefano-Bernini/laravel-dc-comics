@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h2>DC Comics</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <a class="btn btn-primary" href="{{ route('comics.index')}}">Visualizza tutti i fumetti</a>
            </div>
        </div>
    </div>
@endsection