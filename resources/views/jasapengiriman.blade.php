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
                        <h2>Jasa Pengiriman</h2>
                        <p>Titipan melayani jasa pindahan, dimana titipan akan menangani proses pengiriman barang atau
                            dokumen dari satu lokasi ke lokasi lain. Ini meliputi pengambilan barang di lokasi asal,
                            pengiriman melalui jalur transportasi yang
                            sesuai, dan pengantaran barang ke lokasi tujuan. Jasa pengiriman biasanya ditawarkan oleh
                            perusahaan logistik dan dapat meliputi berbagai jenis barang, seperti paket, dokumen, dan
                            bahan-bahan berbahaya.</p>
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
                        <a href="jasapenyimpanan">Jasa Penyimpanan</a>
                        <a href="jasapengiriman" class="active">Jasa Pengiriman</a>
                    </div>

                    <h4>Tiba-tiba pindahan</h4>
                    <p>Titipan adalah layanan jasa pindahan kantor, rumah, gudang terpercaya. Selain pindahan titipan
                        juga menyediakan jasa penyimpanan barang dan jasa pengiriman ke seluruh Indonesia.</p>
                </div>

                <div class="col-lg-8">
                    <img src="{{ asset('images/pengiriman.jpg') }}" alt="" class="img-fluid services-img">
                    <h3>Sebelum menggunakan layanan kami yuk kenali apa itu "Jasa pengiriman" dan apa saja yang kamu
                        dapatkan ketika menggunakan layanan ini.</h3>
                    <p>
                        Jasa pengiriman adalah layanan yang menyediakan pengiriman barang dari satu lokasi ke lokasi
                        lainnya. Jasa pengiriman biasanya dilakukan oleh perusahaan pengiriman yang menyediakan berbagai
                        jenis layanan pengiriman seperti pengiriman paket, dokumen, barang-barang komersial, dan lain
                        sebagainya.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Tersedia layanan packing barang.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Tersedia layanan asuransi.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Gratis biaya penjemputan.</span></li>
                    </ul>
                    <p>
                        Jasa pengiriman biasanya meliputi proses pengambilan barang dari lokasi pengirim, pengemasan,
                        pengiriman, dan pengantaran barang ke lokasi tujuan. Beberapa perusahaan pengiriman juga
                        menyediakan layanan tambahan seperti asuransi pengiriman, pelacakan pengiriman, dan pengiriman
                        barang dalam waktu tertentu.
                    </p>
                    <p>
                        Jasa pengiriman sangat penting bagi bisnis atau perusahaan yang membutuhkan pengiriman barang
                        secara teratur, seperti perusahaan e-commerce atau perusahaan pengiriman logistik. Jasa
                        pengiriman juga dapat sangat bermanfaat bagi individu yang membutuhkan pengiriman barang atau
                        dokumen ke lokasi yang jauh atau ke luar negeri. Harga jasa pengiriman biasanya bervariasi
                        tergantung pada jenis barang yang dikirim, lokasi pengiriman dan tujuan, ukuran dan berat
                        barang, serta layanan tambahan yang dipesan.
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
                        title: 'You need to Login First!',
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