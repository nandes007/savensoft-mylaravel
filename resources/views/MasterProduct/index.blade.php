@extends('layout/main')

@section('title', 'Master Product')


@section('container')
    <div class="container">
    <div class="row">
    <div class="col-10">
    <h1 class="mt-3">List Barang Gelael</h1>

        <table class="table mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ProductID</th>
                    <th scope="col">Barcode</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">H. Jual</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($msproduct as $mspro)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $mspro->ProductID }}</td>
                    <td>{{ $mspro->BarcodeID }}</td>
                    <td>{{ $mspro->Merk }}</td>
                    <td>{{ $mspro->ProductName }}</td>
                    <td>{{ $mspro->Jual }}</td>
                    <td>
                        <a href="" class="badge badge-success">Edit</a>
                        <a href="" class="badge badge-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    </div>
    </div>
    @endsection