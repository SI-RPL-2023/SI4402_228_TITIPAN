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

<main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('images/page-header.jpg');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Paket Layanan</h2>
                            <p>Selamat datang di halaman paket layanan kami! Kami sangat senang dapat menawarkan berbagai pilihan paket layanan yang dirancang untuk memenuhi kebutuhan Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Service Package</li>
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
                            <a href="pindahan.html">Jasa Pindahan</a>
                            <a href="pengiriman.html">Jasa Pengiriman</a>
                            <a href="penyimpanan.html" class="active">Jasa Penyimpanan</a>
                        </div>

                        <h4>Tiba-tiba pindahan</h4>
                        <p>Titipan adalah layanan jasa pindahan kantor, rumah, gudang terpercaya. Selain pindahan titipan juga menyediakan jasa penyimpanan barang dan jasa pengiriman ke seluruh Indonesia.</p>
                    </div>

                    <div class=" col-lg-8 ">
                        <img src="{{asset('images/penyimpanan.jpg')}}" alt=" " class="img-fluid services-img ">
                        <h3>Premium Plan</h3>
                        <p>
                        Dari layanan pengiriman barang, jasa pindahan, hingga layanan penyimpanan, kami memiliki paket yang tepat untuk memenuhi kebutuhan bisnis atau pribadi Anda. Kami yakin bahwa 
                        dengan pengalaman kami yang luas dan pelayanan yang berkualitas, kami dapat memberikan solusi terbaik untuk memenuhi kebutuhan pengiriman dan logistik Anda. Silakan jelajahi halaman ini untuk melihat daftar lengkap dari paket layanan kami dan jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan atau butuh bantuan.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Gratis asuransi</span></li>
                            <p>Dalam paket Premium Plan, pelanggan akan mendapatkan asuransi gratis. Ini berarti jika terjadi kerusakan atau kehilangan barang selama proses pengiriman, maka pelanggan akan mendapatkan penggantian dari penyedia layanan pengiriman.</p>
                            <li><i class="bi bi-check-circle"></i> <span>Gratis survey</span></li>
                            <p>Pelanggan juga akan mendapatkan survey gratis, yang bertujuan untuk mengetahui jenis barang yang akan dikirimkan, ukuran, dan berat barang. Dengan demikian, penyedia jasa akan bisa menentukan armada yang tepat untuk mengangkut barang tersebut.</p>
                            <li><i class="bi bi-check-circle"></i> <span>Armada berkualitas</span></li>
                            <p>Premium Plan juga menawarkan armada berkualitas untuk pengiriman barang. Armada tersebut telah terjamin kualitasnya dan siap mengirimkan barang pelanggan dengan aman dan tepat waktu.</p>
                            <li><i class="bi bi-check-circle"></i> <span>Material</span></li>
                            <p>Premium Plan akan menyediakan material untuk pengemasan barang. Ini termasuk kotak, bubble wrap, dan lain-lain yang dibutuhkan untuk memastikan barang tetap aman selama pengiriman.</p>
                            <li><i class="bi bi-check-circle"></i> <span>Manpower</span></li>
                            <p>Paket ini akan menyediakan tenaga kerja yang terlatih dan terampil untuk membantu dalam proses pengemasan dan pengiriman barang. Ini akan memudahkan pelanggan untuk menghemat waktu dan tenaga dalam proses pengiriman barang.</p>
                            <li><i class="bi bi-check-circle"></i> <span>Packing</span></li>
                            <p>Paket layanan ini akan membantu pelanggan dalam proses pengemasan barang, sehingga barang dapat dikemas dengan aman dan tepat.</p>
                        </ul>
                        <p>
                            Namun, perlu diingat bahwa Premium Plan tidak termasuk unpacking dan reposisi. Ini berarti pelanggan harus melakukan proses membuka kemasan barang dan reposisi sendiri.
                        </p>
                        <p>
                            Dengan Premium Plan, pelanggan dapat memperoleh pengiriman barang yang aman dan terjamin dengan biaya yang lebih tinggi, namun tetap memperoleh beberapa keuntungan penting seperti bantuan dalam proses pengemasan dan pengiriman barang serta jaminan asuransi.
                        </p>
                        
                    </div>
                    
                </div>

            </div>
        </section>
        <!-- End Service Details Section -->

    </main>
    <!-- End #main -->
@endsection