@extends('layouts/master')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/album.css') }}">
@endsection

@section('content')
    <h2 class="display-4 text-color">Certificates</h2>
    <div class="separator"></div>
    @if($data->count() == 0)
        <b style="color: darkred">Data Doesn't Exists</b>
    @endif
    <div class="album py-5">
        <div class="row">
            @foreach($data as $d)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{ $d->link_picture }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $d->name }}</h5>
                            <p class="card-text">{{ $d->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection