@extends('admin.layouts.main')

@section('container')
<h1>Tambah Layanan</h1>

<form action="{{ route('admin.store-layanan') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama_layanan" class="form-label">Nama Layanan</label>
        <input type="text" class="form-control" id="nama_layanan" name="nama_layanan" required>
    </div>
    <div class="mb-3">
        <label for="jenis_layanan" class="form-label">Jenis Layanan</label>
        <select class="form-select" id="jenis_layanan" name="jenis_layanan" required>
            <option value="basic">Basic</option>
            <option value="premium">Premium</option>
            <option value="advance">Advance</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" required>
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
@endsection