@extends('layouts.app')

@section('page_content')

    <div class="py-5">
        <div class="row">
            <div class="col text-center">
                <h3>{{ $comic->title }}</h3>
                <img src="{{ $comic->thumb }}" class="w-25">
            </div>
            <div class="col">
                <p style="font-size: .8rem">{{ $comic->description }}</p>
                <small>{{ $comic->date }} - {{ $comic->type }}</small>
                <h6 class="text-danger">{{ $comic->price }} dollars</h6>
            </div>
        </div>
    </div>

@endsection