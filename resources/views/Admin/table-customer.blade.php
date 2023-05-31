@extends('admin.layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <h4>Table Customer</h4>
            <a href="{{ route('tambah-customer.customer') }}"><button class="btn btn-primary mt-3"><i
                        class="bi bi-person-fill-add"></i> Tambah
                    Customer</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table mt-3 text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @if($customers->isEmpty())
                    <tr>
                        <td colspan="6">Mohon Maaf Data Customer Masih Kosong <i class="fas fa-smile-beam"></i></td>
                    </tr>
                    @else
                    @foreach ($customers as $customer)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $customer->name }} </td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone_number }}</td>
                        <td>{{ $customer->role }}</td>

                        <td class="text-center">
                            <a href="{{ route('admin.edit-user', $customer->id )}}"><button type="button"
                                    class="btn btn-success"><i class="fas fa-user-edit"></i>
                                    Edit</button></a>
                            |
                            <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $customer->id }})">
                                <i class=" fas fa-trash-alt"></i>
                                Delete
                            </button>

                            <script>
                                function confirmDelete(customerId) {
                                    swal({
                                    title: "Are you sure?",
                                    text: "You will not be able to recover this customer!",
                                    type: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "Yes, delete it!",
                                    cancelButtonText: "No, cancel plx!",
                                    closeOnConfirm: false,
                                    closeOnCancel: false
                                    }, function(isConfirm){
                                    if (isConfirm) {
                                        deleteCustomer(customerId);
                                    } else {
                                    swal("Cancelled", "Your customer is safe :)", "error");
                                    }
                                    });
                                    }

                                function deleteCustomer(customerId) {
                                // Mengirim permintaan DELETE menggunakan Ajax
                                $.ajax({
                                url: '/admin/TableCustomer/' + customerId,
                                type: 'DELETE',
                                dataType: 'json',
                                headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                success: function (response) {
                                if (response.success) {
                                swal("Deleted!", response.message, "success");
                                // Lakukan pembaruan tampilan setelah customer dihapus
                                location.reload(); // Memuat ulang halaman secara otomatis
                                } else {
                                swal("Error", response.message, "error");
                                }
                                },
                                error: function (xhr, status, error) {
                                swal("Error", "Something went wrong. Please try again later.", "error");
                                }
                                });
                                }
                            </script>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endsection