<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <title>{{ $title }} | Titipan - Jasa Pindahan & Pengiriman Terbaik</title>
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

                    <a href="keranjang-belanja.html" class="btn btn-success position-relative rounded-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-shopping-bag">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg> <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">1<span
                                class="visually-hidden">Keranjang belanja</span></span>
                    </a>

                    <a href="#" class="btn btn-success ms-4 rounded-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-user">
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
                <h1 class="text-judul-halaman">Keranjang Belanja</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Foto</th>
                            <th>Nama Layanan</th>
                            <th>Harga Harga Layanan</th>
                            <th></th>
                            <th>Hapus</th>
                        </tr>

                        <tr>
                            <td><img src="assets/img/.png" class="img-cart"></td>
                            <td>
                                Paket Pindahan Basic<br>
                            </td>
                            <td>IDR 2.000.000</td>
                            <td></td>
                            <td>IDR 2.000.000</td>
                            <td>
                                <a href="#" class="btn btn-danger rounded-circle btn-tambah">
                                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_54_458)">
                                            <path
                                                d="M1.125 16.3123C1.125 16.7599 1.30279 17.1891 1.61926 17.5056C1.93572 17.822 2.36495 17.9998 2.8125 17.9998H12.9375C13.3851 17.9998 13.8143 17.822 14.1307 17.5056C14.4472 17.1891 14.625 16.7599 14.625 16.3123V4.49982H1.125V16.3123ZM10.6875 7.31232C10.6875 7.16314 10.7468 7.02006 10.8523 6.91458C10.9577 6.80909 11.1008 6.74982 11.25 6.74982C11.3992 6.74982 11.5423 6.80909 11.6477 6.91458C11.7532 7.02006 11.8125 7.16314 11.8125 7.31232V15.1873C11.8125 15.3365 11.7532 15.4796 11.6477 15.5851C11.5423 15.6906 11.3992 15.7498 11.25 15.7498C11.1008 15.7498 10.9577 15.6906 10.8523 15.5851C10.7468 15.4796 10.6875 15.3365 10.6875 15.1873V7.31232ZM7.3125 7.31232C7.3125 7.16314 7.37176 7.02006 7.47725 6.91458C7.58274 6.80909 7.72582 6.74982 7.875 6.74982C8.02418 6.74982 8.16726 6.80909 8.27275 6.91458C8.37824 7.02006 8.4375 7.16314 8.4375 7.31232V15.1873C8.4375 15.3365 8.37824 15.4796 8.27275 15.5851C8.16726 15.6906 8.02418 15.7498 7.875 15.7498C7.72582 15.7498 7.58274 15.6906 7.47725 15.5851C7.37176 15.4796 7.3125 15.3365 7.3125 15.1873V7.31232ZM3.9375 7.31232C3.9375 7.16314 3.99676 7.02006 4.10225 6.91458C4.20774 6.80909 4.35082 6.74982 4.5 6.74982C4.64918 6.74982 4.79226 6.80909 4.89775 6.91458C5.00324 7.02006 5.0625 7.16314 5.0625 7.31232V15.1873C5.0625 15.3365 5.00324 15.4796 4.89775 15.5851C4.79226 15.6906 4.64918 15.7498 4.5 15.7498C4.35082 15.7498 4.20774 15.6906 4.10225 15.5851C3.99676 15.4796 3.9375 15.3365 3.9375 15.1873V7.31232ZM15.1875 1.12482H10.9688L10.6383 0.467401C10.5683 0.326851 10.4604 0.208624 10.3269 0.126019C10.1934 0.0434148 10.0394 -0.000289557 9.88242 -0.000176942H5.86406C5.7074 -0.000779187 5.55373 0.0427622 5.42067 0.125459C5.28761 0.208155 5.18054 0.326662 5.11172 0.467401L4.78125 1.12482H0.5625C0.413316 1.12482 0.270242 1.18409 0.164752 1.28958C0.0592632 1.39506 0 1.53814 0 1.68732L0 2.81232C0 2.96151 0.0592632 3.10458 0.164752 3.21007C0.270242 3.31556 0.413316 3.37482 0.5625 3.37482H15.1875C15.3367 3.37482 15.4798 3.31556 15.5852 3.21007C15.6907 3.10458 15.75 2.96151 15.75 2.81232V1.68732C15.75 1.53814 15.6907 1.39506 15.5852 1.28958C15.4798 1.18409 15.3367 1.12482 15.1875 1.12482Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_54_458">
                                                <rect width="15.75" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </a>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 ms-auto">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Biaya Layanan</th>
                            <td>IDR -</td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td>IDR 2.000.000</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <form action="">
                                    <a href="pembayaran" class="btn btn-lg btn-success w-100">Selesaikan
                                        Pembayaran</a>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>














    </div> <!-- PENUTUP CONTAINER -->


    <!-- JS -->
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
