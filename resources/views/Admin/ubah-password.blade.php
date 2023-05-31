@extends('admin.layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <h4>Edit Password User</h4>
        </div>
    </div>
    <div class="row mt-3 rounded-4 p-3 shadow justify-content-center" style="background-color: white;">
        <a href="{{ route('admin.edit-user', $customer->id) }}"><button
                class="btn btn-secondary mb-3 float-end">Kembali</button></a>
        <div class="col-md-8 mx-auto">
            <form action="{{ route('admin.proses.edit-password', $customer->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="current_password">Name User:</label>
                    <input type="text" class="form-control" id="current_password" name="current_password"
                        placeholder="Masukan Password Lama" value="{{ $customer->name }}" disabled>
                    @error('current_password')
                    <div class="text-danger mt-2 text-sm"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="current_password">Current Password:</label>
                    <input type="password" class="form-control" id="current_password" name="current_password"
                        placeholder="Masukan Password Lama">
                    @error('current_password')
                    <div class="text-danger mt-2 text-sm"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">New Password:</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Masukan Password Baru">
                    @error('password')
                    <div class="text-danger mt-2 text-sm"> {{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password:</label>
                    <input class="form-control" id="password_confirmation" name="password_confirmation"
                        placeholder="Konfirmasi Password" value="" type="password"></input>
                    @error('password_confirmation')
                    <div class="text-danger mt-2 text-sm"> {{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn mt-3" style="background-color: #079992; color:#fff">Simpan
                    Perubahan</button>
            </form>
        </div>
    </div>

</div>
@endsection