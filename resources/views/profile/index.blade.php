<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="author" content="" />

	<title>{{ $title }} | Titipan - Jasa Pindahan & Pengiriman Terbaik</title>
	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet" />

	{{-- ICON BOOTSTRAP --}}
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

	{{-- css BOOTSTRAP --}}
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	{{-- SWEET ALERT CSS --}}
	{{--
	<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css"> --}}

	<!-- Custom styles for this template-->
	<link href="css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body id="page-top">
	<!-- Page Wrapper -->
	<div id="wrapper">
		<!-- Sidebar -->

		<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #3eabb3">
			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon">
					<h3><img src="images/titipanfix.png" alt="" height="80px" width="80px" style="float: left">
					</h3>
				</div>
				<div class="sidebar-brand-text mx-3">
				</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0" />

			<!-- Nav Item - Dashboard -->
			<li class="nav-item {{ $title === 'Profile' ? 'active' : '' }}">
				<a class=" nav-link" href="/profile">
					<i class="fa-solid fa-user"></i>
					<span>Profile</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider" />

			<!-- Heading -->
			<div class="sidebar-heading">Interface</div>

			<!-- Nav Item - Home-->
			<li class="nav-item">
				<a class="nav-link" href="/home">
					<i class="fa-solid fa-house"></i>
					<span>Home</span>
				</a>

				<!-- Nav Item - Jasa Pindahan -->
			<li class="nav-item">
				<a class="nav-link" href="/jasapindahan">
					<i class="fa-solid fa-truck-ramp-box"></i>
					<span>Jasa Pindahan</span>
				</a>
			</li>

			<!-- Nav Penyimpanan -->
			<li class="nav-item">
				<a class="nav-link" href="/jasapenyimpanan">
					<i class="fa-solid fa-truck-arrow-right"></i>
					<span>Jasa Penyimpanan</span></a>
			</li>

			<!-- Nav Jasa Pengiriman -->
			<li class="nav-item">
				<a class="nav-link" href="jasapengiriman">
					<i class="fa-solid fa-truck-plane"></i>
					<span>Jasa Pengiriman</span></a>
			</li>

			<li class="nav-item {{ $title === 'Edit Profile' ? 'active' : '' }}">
				<form action="">
					<a class="nav-link" href="/profile/edit-profile">
						<i class="fa-solid fa-user-pen"></i>
						<span>Edit Profile</span></a>
				</form>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="/sesi/logout">
					<i class="fas fa-sign-out"></i>
					<span>Logout</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block" />

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>
		<!-- End of Sidebar -->


		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">
			<!-- Main Content -->
			<div id="content">
				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>
					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
								aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small"
											placeholder="Search for..." aria-label="Search"
											aria-describedby="basic-addon2" />
										<div class="input-group-append">
											<button class="btn btn-primary" type="button">
												<i class="fas fa-search fa-sm"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</li>



						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
								style="color: #3EABB3;">
								<span class=" mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->check() ?
									auth()->user()->name : '' }}</span>
							</a>
						</li>
					</ul>
				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">
					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Daftar Transaksi</h1>
					</div>
					<div class="container">
						@if ($message=Session::get('success'))
						<div class="col-md-12">
							<div class="alert alert-success alert-dismissible fade show" onclick="closeAlert()"
								role="alert">
								<strong>{{ $message }}</strong>
								<button type="button" class="btn-close" data-bs-dismiss="alert"
									aria-label="Close"></button>
							</div>
						</div>
						@endif
						<table class="table text-center">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Alamat</th>
									<th>Jenis Layanan</th>
									<th>Jasa Layanan</th>
									<th>Harga</th>
									<th>Status Pesanan</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($transactions as $transaction)
								<tr>
									<td style="vertical-align: middle;">{{ $loop->iteration }}</td>
									<td style="vertical-align: middle;">{{ $transaction->nama_user }}</td>
									<td style="vertical-align: middle;">{{ $transaction->alamat }}</td>
									<td style="vertical-align: middle;">{{ $transaction->jenis_layanan }}</td>
									<td style="vertical-align: middle;">{{ $transaction->nama_layanan }}</td>
									<td style="vertical-align: middle;">{{ 'Rp ' . number_format($transaction->harga, 0,
										',', '.') }}</td>
									<td style="vertical-align: middle;">{{ $transaction->status }}</td>

									<td class="text-center">
										{{-- <a href=""><button type="button" class="btn btn-success mb-2"><i
													class="fas fa-user-edit"></i>
												Edit Order</button></a> --}}

										<form id="cancelOrderForm{{ $transaction->id }}"
											action="{{ route('cancel.order', $transaction->id) }}" method="POST">
											@csrf
											@method('PUT')

											<button type="submit" class="btn btn-danger"
												onclick="return confirm('Are you sure you want to cancel this order?')">
												<i class="fas fa-strikethrough"></i> Cancel Order
											</button>
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>

						</table>
						{{-- @endif --}}
					</div>

					<!-- Footer -->
					<footer class="sticky-footer bg-white" style="margin-top: 500px;">
						<div class="container my-auto">
							<div class="copyright text-center my-auto">
								<span>Copyright &copy; Your Website 2021</span>
							</div>
						</div>
					</footer>
					<!-- End of Footer -->
				</div>
				<!-- End of Content Wrapper -->
			</div>
			<!-- End of Page Wrapper -->

			<!-- Scroll to Top Button-->
			<a class="scroll-to-top rounded" href="#page-top">
				<i class="fas fa-angle-up"></i>
			</a>



			{{-- SWEET ALERT --}}
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

			<script src="https://kit.fontawesome.com/198689d7a2.js" crossorigin="anonymous"></script>

			<!-- Bootstrap core JavaScript-->
			<script src="vendor/jquery/jquery.min.js"></script>
			<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

			<!-- Core plugin JavaScript-->
			<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

			<!-- Custom scripts for all pages-->
			<script src="js/sb-admin-2.min.js"></script>

			<!-- Page level plugins -->
			<script src="vendor/chart.js/Chart.min.js"></script>

			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
				integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
				crossorigin="anonymous">
			</script>
</body>

</html>