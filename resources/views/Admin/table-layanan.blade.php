@extends('admin.layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Layanan</h1>
            <a href="{{ route('admin.create-layanan') }}" class="btn btn-primary mb-3"><i
                    class="bi bi-building-fill-add"></i> Tambah Layanan</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Layanan</th>
                        <th scope="col">Jenis Layanan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($layanan as $layananItem)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $layananItem->nama_layanan }}</td>
                        <td>{{ $layananItem->jenis_layanan }}</td>
                        <td>{{ 'Rp ' . number_format( $layananItem->harga, 0, ',', '.') }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.edit-layanan', $layananItem->id) }}">
                                <button type="button" class="btn btn-success">
                                    <i class="bi bi-building-fill-exclamation"></i> Edit
                                </button>
                            </a>
                            |
                            <button type="button" class="btn btn-danger"
                                onclick="confirmDelete({{ $layananItem->id }})">
                                <i class=" fas fa-trash-alt"></i>
                                Delete
                            </button>

                            <script>
                                function confirmDelete(layananId) {
                                                                swal({
                                                                    title: "Are you sure?",
                                                                    text: "You will not be able to recover this layanan!",
                                                                    type: "warning",
                                                                    showCancelButton: true,
                                                                    confirmButtonColor: "#DD6B55",
                                                                    confirmButtonText: "Yes, delete it!",
                                                                    cancelButtonText: "No, cancel plx!",
                                                                    closeOnConfirm: false,
                                                                    closeOnCancel: false
                                                                }, function(isConfirm) {
                                                                    if (isConfirm) {
                                                                        deleteLayanan(layananId);
                                                                    } else {
                                                                        swal("Cancelled", "Your layanan is safe :)", "error");
                                                                    }
                                                                });
                                                            }
                                                                        
                                                            function deleteLayanan(layananId) {
                                                                // Mengirim permintaan DELETE menggunakan Ajax
                                                                $.ajax({
                                                                    url: '/admin/layanan/' + layananId,
                                                                    type: 'DELETE',
                                                                    dataType: 'json',
                                                                    headers: {
                                                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                                                    },
                                                                    success: function(response) {
                                                                        if (response.success) {
                                                                            swal("Deleted!", response.message, "success");
                                                                            // Lakukan pembaruan tampilan setelah layanan dihapus
                                                                            location.reload(); // Memuat ulang halaman secara otomatis
                                                                        } else {
                                                                            swal("Error", response.message, "error");
                                                                        }
                                                                    },
                                                                    error: function(xhr, status, error) {
                                                                        swal("Error", "Something went wrong. Please try again later.", "error");
                                                                    }
                                                                });
                                                            }
                            </script>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection