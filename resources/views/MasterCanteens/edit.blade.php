@extends('layout/main')

@section('title', 'Master Product')


@section('container')

    <div class="container">
    <div class="row">
    <div class="col-6">
    <h1 class="mt-3">Form Ubah Data Menu</h1>
   
    <form method="post" action="/mscanteens/{{ $mscanteen->kode }}">
        @method ('patch')
        @csrf
        <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" placeholder="Masukkan Kode" name="kode" value="{{ $mscanteen->kode }}">
            @error('kode')
            <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="namabarang">Nama Barang</label>
            <input type="text" class="form-control @error('namabarang') is-invalid @enderror" id="namabarang" placeholder="Masukkan Namabarang" name="namabarang" value="{{ $mscanteen->namabarang }}">
            @error('namabarang')
            <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="groups">Groups</label>
            <input type="text" class="form-control @error('groups') is-invalid @enderror" id="groups" placeholder="Masukkan Groups" name="groups" value="{{ $mscanteen->groups }}">
            @error('groups')
            <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Masukkan Price" name="price" value="{{ $mscanteen->price }}">
            @error('price')
            <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="text" class="form-control" id="gambar" placeholder="Masukkan Gambar" name="gambar" value="{{ $mscanteen->gambar }}">
        </div>
        <div class="form-group">
            <label for="descripsi">Descripsi</label>
            <input type="text" class="form-control" id="descripsi" placeholder="Masukkan Descripsi" name="descripsi" value="{{ $mscanteen->descripsi }}">
        </div>

        <button type="submit" class="btn btn-primary">Ubah Data</button>

</form>

    </div>
    </div>
    </div>
    @endsection