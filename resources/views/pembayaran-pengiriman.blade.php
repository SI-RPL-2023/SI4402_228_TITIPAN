<!DOCTYPE html>
<html>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/custom.css">

	<title>Tiba-tiba pindahan</title>
</head>

<body>
	<div class="container">

		<!-- HEADER -->
		<nav class="navbar navbar-expand-lg navbar-light bg-white py-4">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">Titipan</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
					aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
					</ul>

					<a href="keranjang-belanja.html" class="btn btn-success position-relative rounded-circle">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
							stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
							class="feather feather-shopping-bag">
							<path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
							<line x1="3" y1="6" x2="21" y2="6"></line>
							<path d="M16 10a4 4 0 0 1-8 0"></path>
						</svg> <span
							class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">1<span
								class="visually-hidden">Keranjang belanja</span></span>
					</a>



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
				<h1 class="text-judul-halaman">Pembayaran</h1>
			</div>
			</div>


		<div class="row">
			<!-- KOLOM 1 -->
			<div class="col-md-7">
				<form id="paymentForm" onsubmit="return calculateTotal()">
					<h3 class="text-judul">Alamat Customer</h3>

					<label class="w-100 mb-3">
						Nama lengkap <br>
						<input value="{{ auth()->user()->name }}" type="text" name="nama" required placeholder="Nama Lengkap" class="form-control">
					</label>
					<label class="w-100 mb-3">
						Alamat lengkap <br>
						<input type="text" name="alamat" required placeholder="Jl.A, No 11" class="form-control">
					</label>

					<h3 class="text-judul mt-5">Jenis Layanan</h3>
					@foreach ($layanan as $item)
					<label class="w-100 mb-3 border rounded p-2">
					<input class="form-check-input" type="radio" name="layanan" value="{{ $item->jenis_layanan }}" onclick="calculateTotal()">
        			<label class="form-check-label">
           				{{ $item->nama_layanan }} - {{ $item->jenis_layanan }} - Rp {{ number_format($item->harga, 0, ',', '.') }}
        			</label>
				</label>
				@endforeach
				
				<h3 class="text-judul mt-5">Metode Pembayaran</h3>
				<label class="w-100 mb-3 border rounded p-2">
					<input type="radio" name="metode_pembayaran" value="transfer_bank" onclick="calculateTotal()">
					Transfer Bank 
				</label>
				<label class="w-100 mb-3 border rounded p-2">
					<input type="radio" name="metode_pembayaran" value="gopay" onclick="calculateTotal()">
					<img src="../images/bayar-1.png">
				</label>
				<label class="w-100 mb-3 border rounded p-2">
					<input type="radio" name="metode_pembayaran" value="dana" onclick="calculateTotal()">
					<img src="../images/bayar-2.png">
				</label>
				<label class="w-100 mb-3 border rounded p-2">
					<input type="radio" name="metode_pembayaran" value="ovo" onclick="calculateTotal()">
					<img src="../images/bayar-3.png">
				</label>
				
				<button type="submit" class="btn btn-lg btn-success mt-5 mb-5">Bayar</button>
				</form>
			</div>

			<!-- KOLOM 2 -->
			<div class="col-md-4 offset-md-1">
				<div class="card sticky-top">
					<div class="card-header bg-white">
						<h3 class="text-judul">Detail Pembayaran</h3>
					</div>
					<div class="card-body">
						<div class="row mt-2 mb-2">
							<div class="col-md"><small>Jenis Layanan</small></div>
							<div class="col-md" id="jenisLayanan"></div>
						</div>
						<div class="row mt-2 mb-2">
							<div class="col-md"><small>Metode Pembayaran</small></div>
							<div class="col-md" id="metodePembayaran"></div>
						</div>
						<div class="row mt-2 mb-2">
							<div class="col-md"><small>Total</small></div>
							<div class="col-md" id="total"></div>
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-lg btn-success w-100">Bayar</button>
					</div>
				</div>
			</div>
		</div>

	</div> <!-- PENUTUP CONTAINER -->


	<!-- JS -->
	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	<script>
		function calculateTotal() {
			var layanan = document.querySelector('input[name="layanan"]:checked').value;
			var metodePembayaran = document.querySelector('input[name="metode_pembayaran"]:checked').value;
			var total = 0;
			// Hitung total berdasarkan jenis layanan
			// Misalnya:
			if (layanan === "basic") {
				total = 200000;
			} else if (layanan === "premium") {
				total = 500000;
			} else if (layanan === "advance") {
				total = 800000;
			}
			// Tampilkan hasil perhitungan di tabel detail pembayaran
			document.getElementById("jenisLayanan").innerText = layanan;
			document.getElementById("metodePembayaran").innerText = metodePembayaran;
			document.getElementById("total").innerText = "Rp " + total.toLocaleString();
		}

		document.getElementById("paymentForm").addEventListener("submit", function(event) {
			event.preventDefault();
			// Lakukan aksi setelah tombol Bayar ditekan
			// Misalnya, lakukan proses pembayaran atau pengiriman data ke server
		});
	</script>
</body>

</html>
