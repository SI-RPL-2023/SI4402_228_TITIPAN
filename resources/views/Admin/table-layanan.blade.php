@extends('admin.layouts.main')

@section('container')
<h1>Layanan</h1>
<a href="{{ route('admin.create-layanan') }}" class="btn btn-primary mb-3">Tambah Layanan</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Layanan</th>
            <th scope="col">Jenis Layanan</th>
            <th scope="col">Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($layanan as $layananItem)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $layananItem->nama_layanan }}</td>
            <td>{{ $layananItem->jenis_layanan }}</td>
            <td>{{ $layananItem->harga }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection