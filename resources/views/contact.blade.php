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
                            <h2>Contact</h2>
                            <p>Hubungi titipan atau datang langsung ke kantor untuk info lebih lanjut.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div>
            </nav>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="1300" height="445" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=bandung%20techno%20park&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <a href="https://123movies-to.org"></a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 445px;
                                width: 1300px;
                            }
                        </style><a href="https://www.embedgooglemap.net">inserting google maps</a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 445px;
                                width: 1300px;
                            }
                        </style>
                    </div>
                </div>
                <!-- End Google Maps -->

                <div class="row gy-4 mt-4">

                    <div class="col-lg-4">

                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Location:</h4>
                                <p>Bandung Techno Park, Gedung B No.108, Bandung, Jawa Barat</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>info@titipan.id</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Whatsapp/Call:</h4>
                                <p>+62 822 3574 2048</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                    </div>
                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->
@endsection
