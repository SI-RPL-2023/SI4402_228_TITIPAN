@extends('layouts.layout')

@section('content')
<link rel="stylesheet " href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css ">
<a href="https://api.whatsapp.com/send/?phone=628112199706&text=Halo admin Titipan, Saya ingin bertanya tentang:&type=phone_number&app_absent=0 "
    class="float " target="_blank ">
    <i class="fa fa-whatsapp my-float "></i>
</a>

<a href="# " class="scroll-top d-flex align-items-center justify-content-center "><i
        class="bi bi-arrow-up-short "></i></a>

<div id="preloader "></div>

<!-- Vendor JS Files -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
<script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }} "></script>
<script src="{{ asset('vendor/glightbox/js/glightbox.min.js ') }}"></script>
<script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }} "></script>
<script src="{{ asset('vendor/aos/aos.js') }} "></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }} "></script>

<!-- Template Main JS File -->
<script src="{{ asset('js/main.js') }} "></script>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('images/page-header.jpg');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Jasa Penyimpanan</h2>
                        <p>Titipan melayani jasa penyimpanan, dimana titipan akan menyediakan fasilitas untuk menyimpan
                            barang-barang pribadi atau bisnis secara temporari atau jangka panjang. Fasilitas ini
                            biasanya terdiri dari unit-unit penyimpanan
                            yang terlindung dan dilengkapi dengan sistem keamanan. Jasa penyimpanan sangat berguna bagi
                            individu atau bisnis yang membutuhkan ruang tambahan untuk menyimpan barang-barang mereka
                            selama periode tertentu.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Service Details</li>
                </ol>
            </div>
        </nav>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="services-list">
                        <a href="jasapindahan">Jasa Pindahan</a>
                        <a href="jasapenyimpanan" class="active">Jasa Penyimpanan</a>
                        <a href="jasapengiriman">Jasa Pengiriman</a>
                    </div>

                    <h4>Tiba-tiba pindahan</h4>
                    <p>Titipan adalah layanan jasa pindahan kantor, rumah, gudang terpercaya. Selain pindahan titipan
                        juga menyediakan jasa penyimpanan barang dan jasa pengiriman ke seluruh Indonesia.</p>
                </div>

                <div class=" col-lg-8 ">
                    <img src="{{ asset('images/penyimpanan.jpg') }}" alt=" " class="img-fluid services-img ">
                    <h3>Sebelum menggunakan layanan kami yuk kenali apa itu "Jasa penyimpanan/penitipan barang" dan apa
                        saja yang kamu dapatkan ketika menggunakan layanan ini.</h3>
                    <p>
                        Jasa penyimpanan adalah layanan yang menyediakan tempat penyimpanan sementara atau jangka
                        panjang untuk barang atau benda milik seseorang atau perusahaan. Jasa penyimpanan biasanya
                        diberikan oleh perusahaan penyedia layanan penyimpanan yang menyediakan ruang penyimpanan yang
                        aman dan teratur untuk menyimpan berbagai jenis barang.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Tersedia layanan packing barang.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Tersedia layanan penataan barang.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Gratis biaya penjemputan ke lokasi tujuan.</span>
                        </li>
                    </ul>
                    <p>
                        Jasa penyimpanan dapat sangat bermanfaat bagi orang atau perusahaan yang membutuhkan ruang
                        tambahan untuk menyimpan barang-barang mereka yang tidak dapat disimpan di rumah atau kantor
                        mereka, atau jika mereka membutuhkan penyimpanan sementara selama proses pemindahan atau
                        renovasi. Jasa penyimpanan juga dapat membantu dalam hal perlindungan dan keamanan barang,
                        karena penyedia jasa penyimpanan biasanya menyediakan fasilitas yang dilengkapi dengan keamanan
                        yang ketat dan sistem pengawasan yang canggih.
                    </p>
                    <p>
                        Beberapa perusahaan penyedia jasa penyimpanan juga menyediakan layanan pengambilan dan
                        pengiriman barang, sehingga memudahkan pelanggan untuk menyimpan atau mengambil barang mereka
                        dari tempat penyimpanan. Harga jasa penyimpanan biasanya bervariasi tergantung pada ukuran dan
                        jenis ruang penyimpanan yang disewa serta durasi penyimpanan.
                    </p>
                </div>
                @if (!Auth::check())
                <div class="col-lg-8" style="margin-left: 1100px">
                    <a class="btn btn-checkout btn-outline-light btn-lg" href="#" role="button"
                        onclick="showLoginAlert()">Pesan
                        Layanan</a>
                </div>

                <script>
                    function showLoginAlert() {
                                            Swal.fire({
                                            title: 'You need to Login?',
                                            text: "You won't be able to revert this!",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Login'
                                            }).then((result) => {
                                            if (result.isConfirmed) {
                                                window.location.href = "/sesi";
                                            }
                                            })
                
                                            }
                </script>
                @else
                <div class="col-lg-8" style="margin-left: 1100px">
                    <a class="btn btn-checkout btn-outline-light btn-lg" href="/detail-pembayaran" role="button"
                        target="_blank">Pesan
                        Layanan</a>
                </div>
                @endif

            </div>

        </div>
    </section>
    <!-- End Service Details Section -->

</main>
<!-- End #main -->
@endsection