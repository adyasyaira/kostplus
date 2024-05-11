<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style_fp.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css_login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <!-- Sertakan jQuery atau library serupa -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Sertakan file JavaScript yang Anda buat -->

</head>

<body>
    <!-- NAVIGASI -->
    <div class="navbar navbar-expand-lg navbar-expand-sm navbar-expand-md">
        <div class="container-fluid">
            <div class="col-2"></div>
            <div class="col-3">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/logo.jpeg') }}" width="220px">
                    </a>
                </div>
            </div>
            <div class="7">
                <ul class="nav justify-content-end" id="menu">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('login') }}">
                            <img src="{{ asset('images/icon-profil.png') }}" alt="" width="25px">
                        </a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Search">
                            <img src="{{ asset('images/icon-search.png') }}" alt="" width="25px"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <h3>Kost Ibani</h3>
        <div class="row">
            <div class="col-sm-7">
                <img src="{{ asset('images/produk1.jpg') }}" class="rounded float-right" width="630px"
                    alt="Gambar Kanan 2">
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ asset('images/produk1.jpg') }}" class="rounded float-right" width="300px"
                            alt="Gambar Kanan 2">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="{{ asset('images/produk1.jpg') }}" class="rounded float-right" width="300px"
                                alt="Gambar Kanan 2">
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" id="detail">
            <div class="col-sm-1">
                <h6 id="jenis">Kos Putri</h6>
            </div>
            <div class="col-sm-2" id="location">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 21 21">
                    <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" transform="translate(4 2)">
                        <path
                            d="m6.5 16.54l.631-.711c.716-.82 1.36-1.598 1.933-2.338l.473-.624c1.975-2.661 2.963-4.773 2.963-6.334C12.5 3.201 9.814.5 6.5.5s-6 2.701-6 6.033c0 1.561.988 3.673 2.963 6.334l.473.624a54.84 54.84 0 0 0 2.564 3.05z" />
                        <circle cx="6.5" cy="6.5" r="2.5" />
                    </g>
                </svg>
                Condong Catur
            </div>
            <div class="col-sm-3" id="keterangan">
                <div class="icon-container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 512 512">
                        <path fill="#ff6d70" d="M400 464V64H112v400H16v32h480v-32Zm-32 0H144V96h224Z" />
                        <path fill="#ff6d70" d="M312 252h32v72h-32z" />
                    </svg>
                    <span class="text">Dua Kamar Kosong</span>
                </div>
            </div>
            <div class="col-sm-5" id="harga">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="4"
                        d="M15 8C8.925 8 4 12.925 4 19c0 11 13 21 20 23.326C31 40 44 30 44 19c0-6.075-4.925-11-11-11c-3.72 0-7.01 1.847-9 4.674A10.987 10.987 0 0 0 15 8Z" />
                </svg>
                <span id="harga1">
                    Rp 1.500.000
                </span>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="d-flex justify-content-between align-content-center my-3">
                        <div class="d-flex gap-4">
                            <div id="tab">
                                <nav>
                                    <a href="#" class="active fs-5 fw-medium text-decoration-none"
                                        data-id='1'>Deskripsi</a>
                                    <a href="#" class="fs-5 fw-medium text-decoration-none" data-id='2'>Fasilitas</a>
                                    <a href="#" class="fs-5 fw-medium text-decoration-none" data-id='3'>Peraturan
                                        Kost</a>
                                </nav>

                                <div class="tab-content active" data-content='1'>
                                    <p>
                                        Kost ini terdiri dari 5 lantai dengan lokasi yang strategis yang memiliki
                                        jendela
                                        menghadap ke arah luar.
                                    </p>
                                </div>
                                <div class="tab-content" data-content='2'>
                                    <div>
                                        <!-- Fasilitas Kamar -->
                                        <h6>Fasilitas Kamar</h6>
                                        <i class="fas fa-cube icon"></i><span class="black-text">Lemari</span><br>
                                        <i class="fas fa-snowflake icon"></i><span class="black-text">AC</span><br>
                                        <i class="fas fa-bed icon"></i><span class="black-text">Kasur dan
                                            Bantal</span><br>
                                        <i class="fas fa-chair icon"></i><span class="black-text">Kursi</span><br>
                                    </div>
                                    <br>
                                    <div>
                                        <!-- Fasilitas Kamar Mandi -->
                                        <h6>Fasilitas Kamar Mandi</h6>
                                        <i class="fas fa-shower icon"></i><span class="black-text">Shower</span><br>
                                        <i class="fas fa-bath icon"></i><span class="black-text">Kamar Mandi
                                            Dalam</span><br>
                                        <i class="fas fa-toilet icon"></i><span class="black-text">Kloset</span><br>
                                    </div>
                                    <br>
                                    <div>
                                        <!-- Fasilitas Kamar Mandi -->
                                        <h6>Fasilitas Umum</h6>
                                        <i class="fas fa-blender icon"></i><span class="black-text">Dapur</span><br>
                                        <i class="fas fa-parking icon"></i><span class="black-text">Parkir</span><br>
                                        <i class="fas fa-tshirt icon"></i><span class="black-text">Tempat Jemur</span>
                                        <br>
                                    </div>
                                </div>
                                <div class="tab-content" data-content='3'>
                                    <h6>Peraturan Kost</h6>
                                    <i class="fas fa-dog icon"></i><span class="black-text">Dilarang membawa
                                        hewan</span><br>
                                    <i class="fas fa-car icon"></i><span class="black-text"></span>Bertamu harap
                                    izin<br>
                                    <i class="fas fa-volume-mute icon"></i><span class="black-text">Dilarang berisik
                                        diatas jam 12 malam</span><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="d-flex gap-4">
                        <button id="chat-pemilik" type="button" class="btn btn-lg btn-outline-dark">Chat Pemilik <i
                                class="fa-regular fa-comment"></i></button>
                        <div id="myModal" class="penghalang">
                            <div class="modal-content" id='modal'>
                                <span id="tutup">&times;</span>
                                <div class="col" id="logowa">
                                    <svg id="logo-whatsapp" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                        viewBox="0 0 24 24">
                                        <path fill="#088000"
                                            d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2m.01 1.67c2.2 0 4.26.86 5.82 2.42a8.225 8.225 0 0 1 2.41 5.83c0 4.54-3.7 8.23-8.24 8.23c-1.48 0-2.93-.39-4.19-1.15l-.3-.17l-3.12.82l.83-3.04l-.2-.32a8.188 8.188 0 0 1-1.26-4.38c.01-4.54 3.7-8.24 8.25-8.24M8.53 7.33c-.16 0-.43.06-.66.31c-.22.25-.87.86-.87 2.07c0 1.22.89 2.39 1 2.56c.14.17 1.76 2.67 4.25 3.73c.59.27 1.05.42 1.41.53c.59.19 1.13.16 1.56.1c.48-.07 1.46-.6 1.67-1.18c.21-.58.21-1.07.15-1.18c-.07-.1-.23-.16-.48-.27c-.25-.14-1.47-.74-1.69-.82c-.23-.08-.37-.12-.56.12c-.16.25-.64.81-.78.97c-.15.17-.29.19-.53.07c-.26-.13-1.06-.39-2-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.12-.24-.01-.39.11-.5c.11-.11.27-.29.37-.44c.13-.14.17-.25.25-.41c.08-.17.04-.31-.02-.43c-.06-.11-.56-1.35-.77-1.84c-.2-.48-.4-.42-.56-.43c-.14 0-.3-.01-.47-.01Z" />
                                    </svg>
                                </div>
                                <p class="whatsapp-text">WhatsApp</p>
                                <button type="button" onclick="openWhatsApp()" class="whatsapp-button">Chat
                                    Pemilik</button>
                            </div>
                        </div>
                        <button type="button" class="btn btn-lg btn-outline-dark" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">Ajukan Sewa</button>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Rp 1.500.000</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="date" class="tanggal-input">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Waktu Sewa Kos
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Sewa Satu Bulan</a></li>
                                                <li><a class="dropdown-item" href="#">Sewa Tiga Bulan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" id='button' class="btn btn-primary d-grid gap-2 col-6 mx-auto">Ajukan Sewa</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <span class="navbar-text">
                            <h6>ABOUT</h6>
                            <p>
                                KostPlus merupakan website yang dirancang untuk mempermudah para pencari kost agar
                                dapat mendapatkan kost secara online.
                            </p>
                        </span>
                    </div>
                    <div class="col">
                        <div class="container">
                            <span class="navbar-text">
                                <h6>CONTACT</h6>
                                <p></p>
                            </span>
                        </div>
                        <div class="container-fluid">
                            <div class="row row-cols-auto">
                                <a href="https://www.facebook.com/">
                                    <div class="col">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 24 24">
                                            <path fill="black"
                                                d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5Z" />
                                        </svg>
                                    </div>
                                </a>
                                <a href="https://www.instagram.com/">
                                    <div class="col">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 24 24">
                                            <g fill="none" stroke="black" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 16a4 4 0 1 0 0-8a4 4 0 0 0 0 8Z" />
                                                <path
                                                    d="M3 16V8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m17.5 6.51l.01-.011" />
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                                <a href="https://twitter.com/">
                                    <div class="col">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 24 24">
                                            <path fill="black"
                                                d="M22 5.8a8.49 8.49 0 0 1-2.36.64a4.13 4.13 0 0 0 1.81-2.27a8.21 8.21 0 0 1-2.61 1a4.1 4.1 0 0 0-7 3.74a11.64 11.64 0 0 1-8.45-4.29a4.16 4.16 0 0 0-.55 2.07a4.09 4.09 0 0 0 1.82 3.41a4.05 4.05 0 0 1-1.86-.51v.05a4.1 4.1 0 0 0 3.3 4a3.93 3.93 0 0 1-1.1.17a4.9 4.9 0 0 1-.77-.07a4.11 4.11 0 0 0 3.83 2.84A8.22 8.22 0 0 1 3 18.34a7.93 7.93 0 0 1-1-.06a11.57 11.57 0 0 0 6.29 1.85A11.59 11.59 0 0 0 20 8.45v-.53a8.43 8.43 0 0 0 2-2.12Z" />
                                        </svg>
                                    </div>
                                </a>
                                <a href="https://www.tiktok.com/">
                                    <div class="col">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 24 24">
                                            <path fill="black"
                                                d="M16.6 5.82s.51.5 0 0A4.278 4.278 0 0 1 15.54 3h-3.09v12.4a2.592 2.592 0 0 1-2.59 2.5c-1.42 0-2.6-1.16-2.6-2.6c0-1.72 1.66-3.01 3.37-2.48V9.66c-3.45-.46-6.47 2.22-6.47 5.64c0 3.33 2.76 5.7 5.69 5.7c3.14 0 5.69-2.55 5.69-5.7V9.01a7.35 7.35 0 0 0 4.3 1.38V7.3s-1.88.09-3.24-1.48z" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <span class="navbar-text" id="information">
                            <h6>INFORMATION</h6>
                            <p></p>
                            <a class="information" href="Our Story.html"> Our Story</a></p>
                            <a class="information" href="#"> How To Shop</a></p>
                            <a class="information" href="#"> Term & Condition</a></p>
                            <a class="information" href="#"> Privacy Policy</a></p>
                        </span>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <span class="navbar-text">
                            <center>
                                <h5>
                                    KostPlus © 2023
                                </h5>
                            </center>
                        </span>
                    </div>
                </div>
            </div>
        </footer>

        <script>
        $("#tab nav a").click(function() {
            const id = $(this).data('id');
            if (!$(this).hasClass('active')) {
                $("#tab nav a").removeClass('active');
                $(this).addClass('active');

                $('.tab-content').hide();
                $(`[data-content=${id}]`).fadeIn();
            }
        });

        var modal = document.getElementById('myModal');
        var btn = document.getElementById("chat-pemilik");
        var span = document.getElementById("tutup");

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(e) {
            if (e.target == modal) {
                modal.style.display = "none";
            }
        }

        // Function to open WhatsApp when the button is clicked
        function openWhatsApp() {
            // Replace the phone number with your desired number
            var phoneNumber = "+6283138042897";
            var textMessage = "Halo, saya tertarik dengan produk Anda. Bisa kita bicara lebih lanjut?";

            // Create the WhatsApp link
            var whatsappURL = "https://api.whatsapp.com/send?phone=" + phoneNumber + "&text=" + encodeURIComponent(
                textMessage);

            // Open WhatsApp in a new window or tab
            window.open(whatsappURL, "_blank");
        }
        </script>
</body>

</html>