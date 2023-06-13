@extends('admin.layouts.main')

@section('container')
<div class="container">
    <h4>Edit Layanan</h4>

    <form action="{{ route('admin.update-layanan', $layanan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_layanan" class="form-label">Nama Layanan</label>
            <input type="text" class="form-control @error('nama_layanan') is-invalid @enderror" id="nama_layanan"
                name="nama_layanan" value="{{ old('nama_layanan', $layanan->nama_layanan) }}" required>
            @error('nama_layanan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga"
                value="{{ old('harga', $layanan->harga) }}" required>
            @error('harga')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jenis_layanan" class="form-label">Jenis Layanan</label>
            <select class="form-control @error('jenis_layanan') is-invalid @enderror" id="jenis_layanan"
                name="jenis_layanan" required>
                @foreach($jenisLayananOptions as $option)
                <option value="{{ $option }}" {{ old('jenis_layanan', $layanan->jenis_layanan) === $option ? 'selected'
                    : '' }}>
                    {{ $option }}
                </option>
                @endforeach
            </select>
            @error('jenis_layanan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection