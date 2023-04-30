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
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
<script src="{{ asset('vendor/purecounter/purecounter_vanilla.js')}} "></script>
<script src="{{ asset('vendor/glightbox/js/glightbox.min.js ')}}"></script>
<script src="{{ asset('vendor/swiper/swiper-bundle.min.js')}} "></script>
<script src="{{ asset('vendor/aos/aos.js')}} "></script>
<script src="{{ asset('vendor/php-email-form/validate.js')}} "></script>

<!-- Template Main JS File -->
<script src="{{ asset('js/main.js')}} "></script>

<body oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false;' ondragstart='return false'
    onselectstart='return false' style='-moz-user-select: none; cursor: default;'>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('images/page-header.jpg');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Jasa Pindahan</h2>
                            <p>Titipan melayani jasa pindahan, dimana titipan akan menangani proses pemindahan barang
                                dan peralatan dari satu lokasi ke lokasi lain. Ini meliputi pem packing, pengangkutan,
                                dan pemasangan barang di lokasi tujuan. Jasa ini
                                biasanya digunakan ketika individu atau bisnis pindah rumah atau kantor.</p>
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
                            <a href="jasapindahan" class="active">Jasa Pindahan</a>
                            <a href="jasapenyimpanan">Jasa Penyimpanan</a>
                            <a href="jasapengiriman">Jasa Pengiriman</a>
                        </div>

                        <h4>Tiba-tiba pindahan</h4>
                        <p>Titipan adalah layanan jasa pindahan kantor, rumah, gudang terpercaya. Selain pindahan
                            titipan juga menyediakan jasa penyimpanan barang dan jasa pengiriman ke seluruh Indonesia.
                        </p>
                    </div>

                    <div class="col-lg-8">
                        <img src="{{ asset('images/pindahan.jpg')}}" alt="" class="img-fluid services-img">
                        <h3>Sebelum menggunakan layanan kami yuk kenali apa itu "Jasa pindahan" dan apa saja yang kamu
                            dapatkan ketika menggunakan layanan ini.</h3>
                        <p>
                            Jasa pindahan adalah layanan yang menyediakan bantuan dalam proses pemindahan barang atau
                            peralatan dari satu lokasi ke lokasi lainnya. Jasa pindahan umumnya meliputi kegiatan
                            pengemasan, pengangkutan, dan pemuatan ulang barang-barang yang akan dipindahkan.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Tersedia layanan packing barang.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Tersedia layanan penataan barang.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Gratis biaya pengantaran ke lokasi
                                    tujuan.</span></li>
                        </ul>
                        <p>
                            Jasa pindahan biasanya digunakan oleh orang-orang yang akan pindah rumah atau kantor, atau
                            oleh perusahaan yang memindahkan peralatan atau barang-barang mereka dari satu lokasi ke
                            lokasi lainnya. Jasa pindahan ini dapat membantu mengurangi beban dan stres yang biasanya
                            terkait dengan proses pemindahan, karena para ahli yang terlatih dalam jasa pindahan akan
                            menangani seluruh proses pemindahan barang-barang tersebut.
                        </p>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Service Details Section -->

    </main>
    <!-- End #main -->

    @endsection