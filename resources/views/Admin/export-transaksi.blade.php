<!DOCTYPE html>
<html>

<head>
    <title>Export Transaksi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <img src="images/titipan-laporan-logo.png" alt="" style="background-size: cover; width: 100%; height: 250px;">
    <h2>Daftar Transaksi</h2>
    <table>
        <thead>
            <tr>
                <th>Nama Pengguna</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Nama Layanan</th>
                <th>Harga</th>
                <th>Tanggal Pembayaran</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php
            $totalHarga = 0;
            @endphp
            @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction->nama_user }}</td>
                <td>{{ $transaction->alamat }}</td>
                <td>{{ $transaction->phone_number }}</td>
                <td>{{ $transaction->nama_layanan }}</td>
                <td>Rp {{ number_format($transaction->harga, 0, ',', '.') }}</td>
                <td>{{ $transaction->tanggal_pembayaran }}</td>
                <td>{{ $transaction->status }}</td>
            </tr>
            @php
            $totalHarga += $transaction->harga;
            @endphp
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="4">Total Harga:</th>
                <th>Rp {{ number_format($totalHarga, 0, ',', '.') }}</th>
                <th colspan="2"></th>
            </tr>
        </tfoot>
    </table>
</body>

</html>