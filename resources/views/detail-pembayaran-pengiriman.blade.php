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

        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                @csrf
                @method('POST')
                <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama Layanan</th>
                                
                                <th>Jenis Layanan</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($layanan as $item)
                                <tr>
                                    <td>{{ $item->nama_layanan }}</td>
                                    <td>{{ $item->jenis_layanan }}</td>
                                    <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        <br>
        <div class="row">
            <div class=" text-center">
                <div class="col-md-6">
                    <table class="table">
                            <td colspan="2">
                                <form action="">
                                    <a href="/detail-pembayaran-pengiriman/lakukan-pembayaran-pengiriman" class="btn btn-lg btn-success w-100">Selesaikan
                                        Pembayaran</a>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>



    </div> <!-- PENUTUP CONTAINER -->


    <!-- JS -->
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
