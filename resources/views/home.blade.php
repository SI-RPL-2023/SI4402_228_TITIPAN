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


<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">

        @if ($message = Session::get('success'))
        <div class="col-md-4">
            <div class="alert alert-success alert-dismissible fade show" onclick="closeAlert()" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif
        <div class="row gy-4 d-flex justify-content-between">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2 data-aos="fade-up">Tiba-tiba Pindahan</h2>
                <h6 data-aos="fade-up" data-aos-delay="100">Jasa pindahan kantor, gudang, rumah & pengiriman terbaik di
                    Indonesia!</h6>

                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a class="btn btn-info btn-outline-light btn-lg"
                        href="https://api.whatsapp.com/send/?phone=628112199706&text=Halo admin Titipan, Saya ingin bertanya tentang:&type=phone_number&app_absent=0"
                        role="button" target="_blank">Hubungi Spesialis</a>
                </div>

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="532" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Pelanggan</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Proyek</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="753" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Dukungan</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Pekerja</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                </div>
            </div>

            <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                <img src="{{ asset('images/titipanfix.png') }}" class="img-fluid mb-3 mb-lg-0" alt="">
            </div>

        </div>
    </div>
</section>
<!-- End Hero Section -->

<main id="main">
    @if(Auth::check())
    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Layanan Kami</h2>

            </div>
            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('images/pindahan-rumah.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <h3><a href="jasapindahan" class="stretched-link">Jasa Pindahan</a></h3>
                        <p>Kami menyediakan jasa untuk membantu Anda pindah rumah. Jasa pindahan rumah ini merupakan
                            kumpulan profesional yang akan menjaga peralatan dan perabotan Anda aman selama proses
                            pemindahan.</p>
                    </div>
                </div>
                <!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('images/logistics-service.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="jasapengiriman" class="stretched-link">Jasa Pengiriman</a></h3>
                        <p>Jasa pengiriman barang merupakan salah satu layanan yang kami
                            tawarkan. Kemudahan dalam proses mengirim suatu barang dari satu kota ke kota
                            lainnya dengan aman dan dapat dipertanggung jawabkan oleh kami.
                            Pengiriman barang dapat berupa dokumen, logistik, produk elektronik dan lainlain.</p>
                    </div>
                </div>
                <!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('images/cargo-service.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="jasapenyimpanan" class="stretched-link">Jasa Penyimpanan</a></h3>
                        <p>Kami juga menyediakan jasa penyimpanan atau penitipan barang bagi kamu yang bingung atau
                            merasa kurang aman jika barang kamu dtinggalkan, cukup hubungi kami, kami akan membantu
                            anda.</p>
                    </div>
                </div>
                <!-- End Card Item -->

            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
        <div class="container" data-aos="zoom-out">

            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1>Mau Cek Estimasi Harga?</h1>
                    <p>Pastikan Anda sudah konsultasi dengan spesialis jasa pindahan kami, untuk membantu dan memberikan
                        solusi kebutuhan pindahan Anda..</p>
                    <a class="cta-btn"
                        href="https://api.whatsapp.com/send/?phone=628112199706&text=Halo admin Titipan, Saya ingin bertanya tentang:&type=phone_number&app_absent=0"
                        target="_blank">Konsultasi Gratis</a>
                </div>
            </div>

        </div>
    </section>
    <!-- End Call To Action Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing pt-0">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Paket Layanan</h2>
            </div>

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-item">
                        <a href="/basicplan">
                            <h2>Basic Plan</h2>
                        </a>
                        <ul>
                            <li><i class="bi bi-check"></i>Gratis asuransi</li>
                            <li><i class="bi bi-check"></i>Gratis survey</li>
                            <li><i class="bi bi-check"></i>Armada Berkualitas</li>
                            <li class="na"><i class="bi bi-x"></i> <span>Material</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Manpower</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Packing</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Unpacking</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Reposisi</span></li>
                        </ul>
                        <a href="https://api.whatsapp.com/send/?phone=628112199706&text=Halo admin Titipan, Saya ingin bertanya tentang:&type=phone_number&app_absent=0"
                            class="buy-btn" target="_blank">Hubungi Spesialis</a>
                    </div>
                </div><!-- End Pricing Item -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-item featured">
                        <a href="/premiumplan">
                            <h2>Premium Plan</h2>
                        </a>
                        <ul>
                            <li><i class="bi bi-check"></i>Gratis asuransi</li>
                            <li><i class="bi bi-check"></i>Gratis survey</li>
                            <li><i class="bi bi-check"></i>Armada Berkualitas</li>
                            <li><i class="bi bi-check"></i>Manpower</li>
                            <li><i class="bi bi-check"></i>Material</li>
                            <li><i class="bi bi-check"></i>Packing</li>
                            <li class="na"><i class="bi bi-x"></i> <span>Unpacking</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Reposisi</span></li>
                        </ul>
                        <a href="https://api.whatsapp.com/send/?phone=628112199706&text=Halo admin Titipan, Saya ingin bertanya tentang:&type=phone_number&app_absent=0"
                            class="buy-btn" target="_blank">Hubungi Spesialis</a>
                    </div>
                </div><!-- End Pricing Item -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-item">
                        <a href="/advanceplan">
                            <h2>Advance Plan</h2>
                        </a>
                        <ul>
                            <li><i class="bi bi-check"></i>Gratis asuransi</li>
                            <li><i class="bi bi-check"></i>Gratis survey</li>
                            <li><i class="bi bi-check"></i>Armada Berkualitas</li>
                            <li><i class="bi bi-check"></i>Manpower</li>
                            <li><i class="bi bi-check"></i>Material</li>
                            <li><i class="bi bi-check"></i>Packing</li>
                            <li><i class="bi bi-check"></i>Unpacking</li>
                            <li><i class="bi bi-check"></i>Reposisi</li>
                        </ul>
                        <a href="https://api.whatsapp.com/send/?phone=628112199706&text=Halo admin Titipan, Saya ingin bertanya tentang:&type=phone_number&app_absent=0"
                            class="buy-btn" target="_blank">Hubungi Spesialis</a>
                    </div>
                </div><!-- End Pricing Item -->

            </div>

        </div>
    </section><!-- End Pricing Section -->


    @else
    @endif

</main>
<!-- End #main -->
@endsection