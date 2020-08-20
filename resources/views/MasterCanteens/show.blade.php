@extends('layout/main')

@section('title', 'Master Product')


@section('container')

    <div class="container">
    <div class="row">
    <div class="col-5">
    <h1 class="mt-3">List Barang Canteen</h1>
    
    <div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $mscanteen->namabarang }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $mscanteen->kode }}</h6>
        <p class="card-text">{{ $mscanteen->groups }}</p>
        <p class="card-text">{{ $mscanteen->price }}</p>
        
        <a href="{{ $mscanteen->kode }}/edit" class="btn btn-primary">Edit</a>

        <form action="/mscanteens/{{ $mscanteen->kode }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        <a href="/mscanteens" class="card-link">Kembali</a>
    </div>
    </div>

    </div>
    </div>
    </div>
    @endsection