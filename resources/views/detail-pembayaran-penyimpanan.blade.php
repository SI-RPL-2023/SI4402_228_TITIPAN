<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <title>{{ $title }} | Titipan - Jasa Pindahan & Pengiriman Terbaik</title>
</head>

<body>
    <center>
        <div class="container">

            <!-- HEADER -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-4">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">Titipan</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                        </ul>

                        <a href="#" class="btn btn-success ms-4 rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </a>

                    </div>
                </div>
            </nav>

            <!-- JUDUL HALAMAN -->
            <div class="row">
                <div class="col-12">
                    <h1 class="text-judul-halaman">Detail Layanan</h1>
                </div>
            </div>

            @if ($message = Session::get('error'))
            <div class="col-md-3">
                <div class="alert alert-danger alert-dismissible fade show" onclick="closeAlert()" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            @endif

            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <form id="paymentForm" method="POST" action="{{ route('konfimasi.pesanan.penyimpanan') }}"
                            onsubmit="return calculateTotal()">
                            @csrf
                            @foreach($layanan as $item)
                            <input type="hidden" name="id_layanan" value="{{ $item->id }}">
                            @endforeach
                            <table class="table table-hover justify-content-center">
                                <thead>
                                    <tr>
                                        <th>Nama Layanan</th>
                                        <th>Jenis Layanan</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Penyimpanan</td>
                                        <td>
                                            <select name="jenis_layanan" id="layanan" class="form-select w-50"
                                                aria-label="Default select example" required
                                                onchange="updateHiddenFields(this)">
                                                <option selected disabled>Pilih Layanan</option>
                                                <option value="basic" data-harga="500000">Basic</option>
                                                <option value="premium" data-harga="600000">Premium</option>
                                                <option value="advance" data-harga="800000">Advance</option>
                                            </select>
                                        </td>
                                        <td>Rp <span id="harga">0</span></td>
                                    </tr>
                                </tbody>
                            </table>

                            <input type="hidden" id="jenis_layanan" name="jenis_layanan">
                            <input type="hidden" id="nama_layanan" name="nama_layanan">
                            <input type="hidden" id="harga" name="harga">

                            <button type="submit" class="btn btn-lg btn-success w-50 mt-3">Selesaikan
                                Pembayaran</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- PENUTUP CONTAINER -->
    </center>
    <!-- JS -->
    <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
    <script>
        function updateHiddenFields(selectElement) {
            var selectedOption = selectElement.options[selectElement.selectedIndex];
            var jenisLayanan = selectedOption.value;
            var namaLayanan = selectedOption.text;
            var harga = selectedOption.dataset.harga;

            document.getElementById('jenis_layanan').value = jenisLayanan;
            document.getElementById('nama_layanan').value = namaLayanan;
            document.getElementById('harga').textContent = formatRupiah(harga);
            }

            function formatRupiah(angka) {
            var formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
            });

            return formatter.format(angka).replace('Rp', '');
            }
    </script>
</body>

</html>