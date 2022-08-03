@extends('layouts.app')

@section('page_content')

    <h2 class="py-3">Fumetti</h2>
    <p>Una pagina con dei fumetti</p>

    <a href="{{ route('comics.create') }}" class="btn btn-danger mb-4">Add Comic</a>
    
    <div class="row">
    @foreach ($comics as $comic)

        <div class="col-2">
            <div class="card" style="width: 100%; text-align: center;">
                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $comic['title'] }}</h5>
                <h6 class="card-text" style="font-size: .8rem;">{{ $comic['series'] }}</h6>
                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success">Details</a>
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Edit</a>

                {{-- pulsante per cancellare che devo ricordare a memoria e non succederà mai --}}
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST"
                    class="form-delete">
                    @csrf
                    @method('DELETE')

                        <button type="submit" class="btn btn-danger">X</button>
                    </form>

                </div>
            </div>
        </div>

    @endforeach
    </div>

@endsection