@extends('layouts.app')

@section('page_content')

    <h2 class="py-3">Aggiungi il tuo nuovo fumetto</h2>
    <p>yea!</p>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-uppercase">Comic Title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label text-uppercase">Comic Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-uppercase">Comic Image</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-uppercase">Comic price</label>
        <input type="number" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-uppercase">Comic series</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-uppercase">Comic Sale Date</label>
        <input type="date" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-uppercase">Comic Type</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>

    <button type="submit" class="btn btn-success mb-5">Aggiungi fumetto</button>

@endsection