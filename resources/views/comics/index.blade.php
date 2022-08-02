@extends('layouts.app')

@section('page_content')

    <h2>Fumetti</h2>
    <p>una pagina con dei fumetti</p>

    @foreach ($comics as $comic)

        <h6>{{ $comic['title'] }}</h6>
        
    @endforeach

@endsection