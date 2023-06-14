@extends('admin.layouts.main')

@section('container')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4 me-5">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="{{ route('export.transaksi') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
    </a>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <h4>Table Transaksi</h4>
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
                        <th>Nama User</th>
                        <th>No Telepon</th>
                        <th>Nama Layanan</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @if($transactions->isEmpty())
                    <tr>
                        <td colspan="6">Mohon Maaf Data Customer Masih Kosong <i class="fas fa-smile-beam"></i></td>
                    </tr>
                    @else
                    @php
                    $totalHarga = 0;
                    @endphp
                    @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->name }}</td>
                        <td>{{ $transaction->phone_number }}</td>
                        <td>{{ $transaction->nama_layanan }}</td>
                        <td>{{ 'Rp ' . number_format($transaction->harga, 0, ',', '.') }}</td>
                        <td>
                            <form action="{{ route('transactions.update', $transaction) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <select name="status" class="form-control" onchange="this.form.submit()">
                                    <option value="pending" {{ $transaction->status === 'pending' ? 'selected' : ''
                                        }}>Pending</option>
                                    <option value="confirmed" {{ $transaction->status === 'confirmed' ? 'selected' : ''
                                        }}>Confirmed
                                    </option>
                                    <option value="completed" {{ $transaction->status === 'completed' ? 'selected' : ''
                                        }}>Completed
                                    </option>
                                    <option value="cancelled" {{ $transaction->status === 'cancelled' ? 'selected' : ''
                                        }}>Cancelled
                                    </option>
                                </select>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('admin.detail-transaksi', $transaction->id )}}"><button type="button"
                                    class="btn btn-success" onclick="">Detail Transaksi</button></a>
                            |
                            <button type="button" class="btn btn-danger"
                                onclick="confirmDelete({{ $transaction->id }})">
                                <i class="fas fa-trash-alt"></i>
                                Delete
                            </button>

                            <script>
                                function confirmDelete(transactionId) {
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
                                    }, function(isConfirm) {
                                        if (isConfirm) {
                                            deleteTransaction(transactionId);
                                        } else {
                                            swal("Cancelled", "Customer transaction is safe :)", "error");
                                        }
                                    });
                                }
                            
                                function deleteTransaction(transactionId) {
                                    // Mengirim permintaan DELETE menggunakan Ajax
                                    $.ajax({
                                        url: 'transactions/DeleteTransaction/' + transactionId,
                                        type: 'DELETE',
                                        dataType: 'json',
                                        headers: {
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                        },
                                        success: function(response) {
                                            if (response && response.success === true) {
                                                swal("Deleted!", response.message, "success");
                                                // Tunggu 1 detik sebelum memuat ulang halaman
                                                setTimeout(function() {
                                                    location.reload();
                                                }, 1000);
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
                    @php
                    $totalHarga += $transaction->harga;
                    @endphp
                    @endforeach
                    <tr>
                        <td colspan="4"></td>
                        <td></td>
                        <td><strong>Total Harga:</strong>{{ 'Rp ' . number_format($totalHarga, 0, ',', '.') }}</td>
                        <td></td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection