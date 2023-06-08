<!DOCTYPE html>
<html>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
	<link rel="stylesheet" href="{{ asset('/assets/all.css') }}">
	<link rel="stylesheet" href="{{ asset('/assets/all.min.css') }}">
	<title>Tahap Akhir Pemesanan | Titipan - Jasa Pindahan & Pengiriman Terbaik</title>
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
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
							stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
							class="feather feather-user">
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
				<h1 class="text-judul-halaman">Tahap Akhir Pemesanan</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<form action="{{ route('process.pembayaran.pengiriman') }}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('POST')

					<input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
					<input type="hidden" name="id_layanan" value="{{ $layanan->id }}">

					<div class="mb-3">
						<label for="nama_user" class="form-label">Nama Lengkap</label>
						<input type="text" class="form-control" id="nama_user" name="nama_user"
							value="{{ Auth::user()->name }}" readonly>
					</div>

					<div class="mb-3">
						<label for="alamat" class="form-label">Alamat</label>
						<textarea class="form-control" id="alamat" name="alamat" required></textarea>
					</div>

					<div class="mb-3">
						<label for="jenis_layanan" class="form-label">Jenis Layanan</label>
						<input type="text" class="form-control" id="jenis_layanan" name="jenis_layanan"
							value="{{ $layanan->jenis_layanan }}" readonly>
					</div>
					<div class="mb-3">
						<label for="nama_layanan" class="form-label">Nama Layanan</label>
						<input type="text" class="form-control" id="nama_layanan" name="nama_layanan"
							value="{{ $layanan->nama_layanan }}" readonly>
					</div>
					<div class="mb-3">
						<label for="harga" class="form-label">Harga</label>
						<input type="text" class="form-control" id="harga" name="harga"
							value="{{ 'Rp ' . number_format($layanan->harga, 0, ',', '.') }}" readonly>
					</div>

					<div class="mb-3">
						<label for="jenis_pembayaran" class="form-label">Metode Pembayaran</label>
						<select name="jenis_pembayaran" id="jenis_pembayaran" class="form-select" required>
							<option value="transfer_bank">Transfer Bank</option>
							<option value="gopay" data-thumbnail="../../../images/bayar-1.png">Gopay</option>
							<option value="ovo" data-thumbnail="../../../images/bayar-3.png">OVO</option>
							<option value="dana" data-thumbnail="../../../images/bayar-2.png">DANA</option>
						</select>
						<p class="mt-2">Pembayaran Melalui: <img id="thumbnail" src="" alt="Thumbnail"></p>
					</div>

					<div class="mb-3">
						<label for="bukti_pembayaran" class="form-label">Bukti Pembayaran</label>
						<input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran"
							accept=".png,.jpeg,.jpg" required>
					</div>

					<button type="submit" class="btn btn-lg btn-success w-50 mt-3">Selesaikan Pembayaran</button>
				</form>
			</div>
		</div>
	</div> <!-- PENUTUP CONTAINER -->


	<!-- JS -->
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.bundle.min.js') }}?v={{ time() }}"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
		$('#jenis_pembayaran').change(function() {
		var thumbnailUrl = $('option:selected', this).data('thumbnail');
		$('#thumbnail').attr('src', thumbnailUrl);
		});
		});
	</script>
</body>

</html>