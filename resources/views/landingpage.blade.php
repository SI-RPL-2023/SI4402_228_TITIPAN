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

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
                    <div>
                        <h4 class="title">Jasa Pindahan</h4>
                        <p class="description">
                            Kami menyediakan jasa untuk membantu Anda pindah rumah. Jasa pindahan rumah ini merupakan
                            kumpulan profesional yang akan menjaga peralatan dan perabotan Anda aman selama proses
                            pemindahan.</p>
                        <a href="jasapindahan" class="readmore stretched-link"><span>Pelajari Selengkapnya</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
                    <div>
                        <h4 class="title">Jasa Pengiriman</h4>
                        <p class="description">
                            Jasa pengiriman barang merupakan salah satu layanan yang kami tawarkan. Kemudahan dalam
                            proses mengirim suatu barang dari satu kota ke kota lainnya dengan aman dan dapat
                            dipertanggung jawabkan oleh kami.</p>
                        <a href="jasapengiriman" class="readmore stretched-link"><span>Pelajari Selengkapnya</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
                    <div>
                        <h4 class="title">Jasa Penyimpanan</h4>
                        <p class="description">
                            Kami juga menyediakan jasa penyimpanan atau penitipan barang bagi kamu yang bingung atau
                            merasa kurang aman jika barang kamu dtinggalkan, cukup hubungi kami, kami akan membantu
                            anda.</p>
                        <a href="jasapenyimpanan" class="readmore stretched-link"><span>Pelajari Selengkapnya</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                    <img src="{{ asset('images/titipan.png') }}" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                </div>
                <div class="col-lg-6 content order-last  order-lg-first">
                    <h3>Kenapa Memilih Layanan Kami?</h3>
                    <p>
                        Tiba-tiba pindahan adalah perusahaan yang sudah melayani pindahan rumah, kantor & gudang sejak
                        tahun 2020. Kami memiliki karyawan berpengalaman dibidangnya sehingga pekerjaan dapat dilakukan
                        dengan aman & cepat.
                    </p>
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-people-fill"></i>
                            <div>
                                <h5>Tersedia helper</h5>
                                <p>Kami menyediakan helper packing dan unpacking, bagi kamu yang males atau belum sempat
                                    packing.</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-box-seam-fill"></i>
                            <div>
                                <h5>Tersedia layanan packing</h5>
                                <p>Kami dapat membantu pengemasan seluruh barang milik customer.</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-dropbox"></i>
                            <div>
                                <h5>Tersedia layanan unpacking</h5>
                                <p>Kami dapat membantu melepas seluruh material packing yang melekat pada barang milik
                                    customer.</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-check2-all"></i>
                            <div>
                                <h5>Gratis asuransi</h5>
                                <p>Kami menyediakan asuransi jika barang kamu mengalami kerusakan selama pindahan atau
                                    pengiriman.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Testimonials Section ======= -->
    <div class="section-header">
        <h2>Kata Mereka Yang Sudah Menggunakan Layanan Kami</h2>

    </div>
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="slides-1 swiper" data-aos="fade-up">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('images/testimonials/testimonials-1.jpg') }}" class="testimonial-img"
                                alt="">
                            <h3>Eliezer Cosmic</h3>
                            <h4>Karyawan Swasta</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Saya sangat senang dengan jasa pindahan yang diberikan oleh perusahaan ini. Para pekerja
                                yang bekerja sangat profesional dan mengurus barang-barang saya dengan hati-hati. Semua
                                barang saya tiba di lokasi tujuan dengan aman dan tidak rusak. Terima kasih banyak!.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('images/testimonials/testimonials-2.jpg') }}" class="testimonial-img"
                                alt="">
                            <h3>Sarah Puspita Adyatma</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Saya menggunakan jasa penyimpanan untuk beberapa bulan selama renovasi rumah, dan sangat
                                senang dengan pengalaman saya. Ruang penyimpanan yang disewa sangat bersih dan aman, dan
                                saya merasa nyaman mengetahui barang-barang saya berada di tangan yang baik selama masa
                                penyimpanan.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('images/testimonials/testimonials-3.jpg') }}" class="testimonial-img"
                                alt="">
                            <h3>Jena Putri</h3>
                            <h4>Karyawan Swasta</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Para pekerja yang membantu saya dalam proses pemindahan rumah sangat profesional dan
                                ahli dalam pekerjaan mereka. Mereka membantu mengemas dan membawa semua barang-barang
                                saya dengan hati-hati dan sangat efisien. Saya sangat terkesan dengan kinerja mereka dan
                                akan merekomendasikan jasa pindahan ini kepada siapa saja yang membutuhkan layanan ini.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('images/testimonials/testimonials-4.jpg') }}" class="testimonial-img"
                                alt="">
                            <h3>Ari</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Layanan pengiriman barang dari perusahaan ini sangat andal dan efisien. Saya pernah
                                menggunakan beberapa perusahaan pengiriman sebelumnya tetapi pengalaman terbaik saya
                                adalah dengan jasa pengiriman ini. Semua barang saya selalu tiba tepat waktu dan dalam
                                kondisi yang baik.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('images/testimonials/testimonials-5.jpg') }}" class="testimonial-img"
                                alt="">
                            <h3>Yudi Kurniawan</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Perusahaan penyedia jasa pindahan ini telah membantu saya dalam beberapa pemindahan dan
                                selalu memberikan layanan yang luar biasa. Semua stafnya sangat ramah dan membantu, dan
                                saya selalu merasa nyaman menyerahkan barang-barang saya kepada mereka. Terima kasih
                                banyak untuk pelayanan yang luar biasa.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

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

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Pertanyaan yang sering diajukan</h2>

            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-10">

                    <div class="accordion accordion-flush" id="faqlist">

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-1">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Apa saja layanan yang disediakan oleh jasa pindahan dan pengiriman barang?
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Jasa pindahan dan pengiriman barang biasanya menyediakan layanan pengemasan,
                                    pemindahan, pengiriman, dan pengantaran barang dari satu tempat ke tempat lain.
                                    Beberapa perusahaan juga menyediakan layanan tambahan seperti penyimpanan sementara,
                                    asuransi pengiriman, pelacakan pengiriman, dan pengiriman dalam waktu tertentu.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-2">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Berapa biaya yang harus saya bayar untuk menggunakan jasa pindahan atau pengiriman
                                    barang?
                                </button>
                            </h3>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Biaya yang harus dibayar tergantung pada jarak yang harus ditempuh, jumlah dan jenis
                                    barang yang harus dipindahkan atau dikirimkan, serta layanan tambahan yang dipilih
                                    seperti asuransi atau penyimpanan sementara. Anda dapat meminta penawaran harga dari
                                    beberapa perusahaan jasa pindahan atau pengiriman barang untuk membandingkan biaya
                                    yang ditawarkan.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-3">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Bagaimana cara memilih perusahaan jasa pindahan atau pengiriman barang yang tepat?
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Ada beberapa hal yang harus dipertimbangkan saat memilih perusahaan jasa pindahan
                                    atau pengiriman barang, seperti reputasi perusahaan, pengalaman, jenis layanan yang
                                    disediakan, harga, dan kebijakan asuransi. Pastikan untuk melakukan riset terlebih
                                    dahulu dan membandingkan beberapa perusahaan untuk memilih yang paling sesuai dengan
                                    kebutuhan Anda.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-4">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Apakah perusahaan jasa pindahan atau pengiriman barang menyediakan asuransi untuk
                                    barang yang dipindahkan atau dikirimkan?
                                </button>
                            </h3>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Beberapa perusahaan jasa pindahan atau pengiriman barang menyediakan opsi asuransi
                                    untuk barang yang dipindahkan atau dikirimkan, namun tidak semua perusahaan
                                    menyediakan layanan ini. Pastikan untuk bertanya kepada perusahaan apakah mereka
                                    menyediakan asuransi dan bagaimana ketentuan asuransi tersebut.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-5">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Apakah saya harus mengemas barang saya sendiri atau perusahaan jasa pindahan atau
                                    pengiriman barang akan melakukan pengemasan untuk saya?
                                </button>
                            </h3>
                            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Beberapa perusahaan jasa pindahan atau pengiriman barang menyediakan layanan
                                    pengemasan untuk barang Anda, namun layanan ini biasanya dikenakan biaya tambahan.
                                    Jika Anda ingin menghemat biaya, Anda dapat mengemas barang Anda sendiri dengan
                                    benar dan memastikan bahwa mereka siap untuk dipindahkan atau dikirimkan.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->


</main>
<!-- End #main -->
@endsection