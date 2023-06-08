@extends('admin.layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <h4>Edit User</h4>
        </div>
    </div>
    <div class="col-md-8 mx-auto">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $transaction->name }}"
                name="name" required>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1"
                name="email" aria-describedby="emailHelp" value="{{ $transaction->email }}" readonly>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="exampleInputEmail1"
                name="address" value="{{ $transaction->alamat }}" readonly>
            @error('address')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal Pemesanan</label>
            <input type="date" class="form-control @error('date_birth') is-invalid @enderror" id="exampleInputEmail1"
                name="date_birth" value="{{ $transaction->tanggal_pembayaran }}" readonly>
            @error('date_birth')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No Telfon</label>
            <input type="number" class="form-control @error('phone_number') is-invalid @enderror"
                id="exampleInputEmail1" name="phone_number" value="{{ $transaction->phone_number }}" readonly>
            @error('phone_number')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Status</label>
            <form action="{{ route('admin.update-transaksi', ['id' => $transaction->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <select name="status" class="form-control" onchange="this.form.submit()">
                    <option value="pending" {{ $transaction->status === 'pending' ? 'selected' : '' }}>Pending
                    </option>
                    <option value="confirmed" {{ $transaction->status === 'confirmed' ? 'selected' : '' }}>Confirmed
                    </option>
                    <option value="completed" {{ $transaction->status === 'completed' ? 'selected' : '' }}>Completed
                    </option>
                    <option value="cancelled" {{ $transaction->status === 'cancelled' ? 'selected' : '' }}>Cancelled
                    </option>
                </select>
            </form>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Total Harga</label>
            <input type="number" class="form-control @error('phone_number') is-invalid @enderror"
                id="exampleInputEmail1" name="phone_number" value="{{ $transaction->harga}}" readonly>
            @error('phone_number')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleSelect1" class="form-label @error('path_bukti_pembayaran') is-invalid @enderror">
                Bukti
                Transfer</label>

            <a href="{{ asset('storage/' . $transaction->path_bukti_pembayaran) }}">
                <img src="{{ asset('storage/' . $transaction->path_bukti_pembayaran) }}" alt="Bukti Pembayaran"
                    width="400" height="360">
            </a>
            @error('path_bukti_pembayaran')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
</div>

</div>
@endsection