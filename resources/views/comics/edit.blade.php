@extends('layouts.app')

@section('page_content')

    <h2 class="py-3">Modifica il tuo fumetto</h2>
    <p>speravi di averlo inserito giusto eh?</p>

    @if ($errors->any())
        <div class="alert alert-danger">
            Errori di validazione:

            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @csrf
        @method('PATCH')

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-uppercase">Comic Title</label>
        <input type="text" class="form-control" name="title" id="exampleFormControlInput1" value="{{ $comic->title }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label text-uppercase">Comic Description</label>
        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{!! $comic->description !!}}</textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-uppercase">Comic Image</label>
        <input type="text" class="form-control" name="thumb" id="exampleFormControlInput1" value="{{ $comic->thumb }}"">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-uppercase">Comic price</label>
        <input type="number" class="form-control" name="price" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-uppercase">Comic series</label>
        <input type="text" class="form-control" name="series" id="exampleFormControlInput1" value="{{ $comic->series }}"">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-uppercase">Comic Sale Date</label>
        <input type="date" class="form-control" name="date" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-uppercase">Comic Type</label>
        <input type="text" class="form-control" name="type" id="exampleFormControlInput1" value="{{ $comic->type }}"">
    </div>

    <button type="submit" class="btn btn-success mb-5">Aggiorna fumetto</button>
    <a href="{{ route('home') }}" class="btn btn-secondary mb-5">Annulla</a>

</form>

@endsection