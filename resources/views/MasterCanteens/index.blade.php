@extends('layout/main')

@section('title', 'Master Product')


@section('container')

    <div class="container">
    <div class="row">
    <div class="col-5">
    <h1 class="mt-3">List Barang Canteen</h1>

    <a href="/mscanteens/create" class="btn btn-primary my-3">Tambah Data : :</a>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    
<ul class="list-group">
    @foreach( $mscanteen as $ctn)
  <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $ctn->namabarang }}
        
    <a href="/mscanteens/{{ $ctn->kode }}" class="badge badge-info">detail</a>
  </li>
  @endforeach
</ul>

    </div>
    </div>
    </div>
    @endsection