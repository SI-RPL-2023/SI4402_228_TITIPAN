@extends('admin.layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <h4>Edit User</h4>
        </div>
    </div>
    <div class="row mt-3 rounded-4 p-3 shadow justify-content-center" style="background-color: white;">
        <a href="{{ route('admin.edit-password.user', $customer->id) }}"><button
                class="btn btn-secondary mb-3 float-end">Ubah
                Password</button></a>
        <div class="col-md-8 mx-auto">
            <form action=" {{ route('admin.proses.edit-user', $customer->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                        value="{{ $customer->name }}" name="name" required>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                        id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="{{ $customer->email }}"
                        required>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror"
                        id="exampleInputEmail1" name="address" value="{{ $customer->address }}" required>
                    @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date Birtrh</label>
                    <input type="date" class="form-control @error('date_birth') is-invalid @enderror"
                        id="exampleInputEmail1" name="date_birth" value="{{ $customer->date_birth }}" required>
                    @error('date_birth')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                    <input type="number" class="form-control @error('phone_number') is-invalid @enderror"
                        id="exampleInputEmail1" name="phone_number" value="{{ $customer->phone_number }}" required>
                    @error('phone_number')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleSelect1" class="form-label @error('role') is-invalid @enderror">Role</label>
                    <select class="form-select" id="exampleSelect1" name="role" required>
                        <option value="" disabled selected style="color: #888888">Role User '{{ $customer->role }}'
                        </option>
                        <option value="customer">Customer</option>
                        <option value="admin">Admin</option>
                    </select>
                    @error('role')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>

</div>
@endsection