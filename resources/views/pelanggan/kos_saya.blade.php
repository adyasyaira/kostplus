<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <!-- Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/kos_saya.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap.min.css') }}">
    <title>Riwayat Transaksi</title>
</head>

<body>
    <div class="container profile-container">
        <div class="row">
            <div class="col-4">
                <div class="container foto">
                    <div class="row">
                        <div class="col">
                            <img class="img-profil" src="{{ asset('images/1646715544604.jpeg') }}" alt="">
                        </div>
                        <div class="col">
                            Adya Gita Syaira
                            <div class="d-grid gap-2 d-md-block">
                                <a href="{{ route('ubah_profil') }}" id='buttonedit' class="btn btn-primary">Edit Profil</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 menu-profil">
                    <ul class="menu-list">
                        <li class="menu-button">
                            <a href="">
                                <img class="menu-icon" src="{{ asset('images/home (2).png') }}" alt="">
                                <span class="menu-desc link-active">Kos Saya</span>
                            </a>
                        </li>
                        <li class="menu-button">
                            <a href="">
                                <img class="menu-icon" src="{{ asset('images/note.png') }}" alt="">
                                <span class="menu-desc link-active">Riwayat Booking</span>
                            </a>
                        </li>
                        <li class="menu-button">
                            <a href="">
                                <img class="menu-icon" src="{{ asset('images/transaksi.png') }}" alt="">
                                <span class="menu-desc link-active">Riwayat Transaksi</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <div class="kost-main">
                            <h2 class="kost-main__title bg-c-text bg-c-text--heading-5">
                                Kost Saya
                            </h2>
                            <div class="kost-empty">
                                <p>
                                <h4>Kamu belum menyewa kos</h4>
                                </p>
                                <p>
                                    Yuk, sewa di Mamikos atau masukkan kode </br>
                                    dari pemilik kos untuk aktifkan halaman ini! </br>
                                    Coba cara ngekos modern dengan </br>
                                    manfaat berikut ini. </br>
                                </p>
                                <ul class="benefit-list">
                                    <li class="benefit-button">

                                        <img class="benefit-icon" src="{{ asset('images/tagihan.png') }}" alt="">
                                        <span class="benefit-desc">Tagihan dan kontrak sewa tercatat rapi</span>

                                    </li>
                                    <li class="benefit-button">

                                        <img class="benefit-icon" src="{{ asset('images/pembayaran.png') }}" alt="">
                                        <span class="benefit-desc">KostPlus menjaga keamanan transaksi</span>

                                    </li>
                                    <li class="benefit-button">

                                        <img class="benefit-icon" src="{{ asset('images/cashless.png') }}" alt="">
                                        <span class="benefit-desc">Cashless, dengan beragam metode pembayaran</span>

                                    </li>
                                </ul>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-success" type="button">
                                        Mulai cari dan sewa kos
                                    </button>
                                    <button class="btn btn-outline-success" type="button">
                                        Masukkan kode dari pemilik
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>