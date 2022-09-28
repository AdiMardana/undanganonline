<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HTML Meta Tags -->
    <title>Wiguna & Friska | Pawiwahan</title>
    <meta name="description" content="Undangan Pawiwahan Wiguna & Friska. Jumat, 30 September 2022. Desa Pengastulan, Kec. Seririt, Kab. Buleleng.">
    <meta name="keywords" content="Undangan Digital, Undangan Online, Wedding Invitation">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Undangan Pawiwahan Wiguna & Friska">
    <meta itemprop="description" content="Undangan Pawiwahan Wiguna & Friska. Jumat, 30 September 2022. Desa Pengastulan, Kec. Seririt, Kab. Buleleng.">
    <meta itemprop="image" content="http://undanglewat.online/data-master/custom-thumbnail/cover-thumb.jpg">
    <!-- Ubah directory file image -->

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://undanglewat.online/data-master/custom-thumbnail/cover-thumb.jpg">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Undangan Pawiwahan Wiguna & Friska">
    <meta property="og:description" content="Undangan Pawiwahan Wiguna & Friska. Jumat, 30 September 2022. Desa Pengastulan, Kec. Seririt, Kab. Buleleng.">
    <meta property="og:image" content="http://undanglewat.online/data-master/custom-thumbnail/cover-thumb.jpg">
    <!-- Ubah directory file image -->

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Undangan Pawiwahan Wiguna & Friska">
    <meta name="twitter:description" content="Undangan Pawiwahan Wiguna & Friska. Jumat, 30 September 2022. Desa Pengastulan, Kec. Seririt, Kab. Buleleng.">
    <meta name="twitter:image" content="http://undanglewat.online/data-master/custom-thumbnail/cover-thumb.jpg">
    <!-- Ubah directory file image -->

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Data AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modal.css">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">

</head>

<body>

    <!-- Modal Start -->
    <div itemprop="image" itemscope="itemscope" itemtype="http://undanglewat.online/index.php">
        <meta content="http://undanglewat.online/data-master/custom-thumbnail/cover-thumb.jpg" itemprop="url">
    </div>

    <div class="modal" id="modal">
        <img src="img/flower4.png" alt="" class="img-1">
        <img src="img/flower4.png" alt="" class="img-2">
        <img src="img/flower2.png" alt="" class="img-3">
        <img src="img/flower3.png" alt="" class="img-4">
        <img src="img/flower3-flip.png" alt="" class="img-5">
        <img src="img/flower2-flip.png" alt="" class="img-6">
        <div class="modal-container">
            <div class="modal-cover">
                <div class="modal-content">
                    <div class="modal-card">
                        <p class="title-card">Undangan Pawiwahan <br>Wiguna & Friska</p>
                        <p class="label">Kepada: Yth. Bapak/Ibu/Saudara/i</p>
                        <h3 class="nama-tamu">
                            <?php
                                $id = $_GET['kepada'];
                                echo ucwords($id);
                            ?>
                        </h3>
                        </h3>
                        <button class="btn-undangan" id="btn-modal" onclick="popupToggle();" style="color: white;">
                            BUKA UNDANGAN
                        </button>
                        </dv>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var fixed = document.getElementById('modal');

        fixed.addEventListener('touchmove', function(e) {

            e.preventDefault();

        }, false);
    </script>


    <!-- Modal End -->

    <!-- Audio Start -->
    <button class="btn-audio" onclick="toggleMusic()" id="buttonmusic" data-play="true">
        <i class='btn bx bx-volume-full'></i>
    </button>

    <!-- <iframe src="audio/backsound.mp3" allow="autoplay" id="iframeAudio" style="display: none"></iframe> -->

    <audio id="player" loop>
        <source src="../data-master/audio/backsound.mp3" type="audio/mp3">
    </audio>

    <!-- Opsi 2nd -->
    <!-- <button class="btn-audio" onclick="toggleMusic()" id="btn-playback" data-play="true">
        <i class='btn bx bx-volume-full'></i>
    </button>
    <audio id="audio" loop>
        <source src="audio/backsound.mp3" type="audio/mpeg">
    </audio> -->


    <!-- Audio End -->

    <!-- Scrool Up Start -->
    <a class="btn-scroll" data-aos="fade-up" href="#waveHeader">
        <i class='btn bx bx-chevron-up'></i>
    </a>
    <!-- Scroll Up End -->

    <div class="wave-header header" id="waveHeader">

        <!--Content before waves-->
        <div class="inner-header flex">
            <div class="img-box">
                <img src="img/header-cover.jpg" class="header-cover" alt="">
                <div class="inner-label">
                    <h1 class="inner-heading" data-aos="fade-up" data-aos-duration="700">Wiguna & Friska</h1>
                    <p class="inner-subheading" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">PAWIWAHAN <br> 30/09/2022</p>
                </div>
            </div>
        </div>

        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
        </g>
        </svg>
        </div>
        <!--Waves end-->

    </div>
    <!--Header ends-->

    <!--Content starts-->
    <div class="content-wave content">
        <!-- Profile Start -->
        <section class="profile">
            <div class="container">
                <div class="profile-heading">
                    <img src="img/pembuka.png" class="salam-pembuka" alt="" data-aos="fade-up" data-aos-duration="700">
                    <p class="profile-subheading" data-aos="fade-up" data-aos-duration="700">
                        Atas Asung Kertha Wara Nugraha Ida Sang Hyang Widhi Wasa / Tuhan Yang Maha Esa. Kami bermaksud mengundang Bapak/Ibu/Saudara/I pada Upacara Manusa Yadnya Pawiwahan (Pernikahan).
                    </p>
                </div>
                <div class="profile-content">
                    <div class="col-lg-5 profile-male">
                        <div class="img-box" data-aos="fade-up" data-aos-duration="700">
                            <img src="img/profile-male.png" class="img-male profile-img" alt="">
                            <img src="img/list.png" class="profile-list" alt="">
                        </div>
                        <div data-aos="fade-up" data-aos-duration="700">
                            <h2 class="male-name profile-name">I Gede Wiguna Yasdira </h2>
                            <p class="male-detail profile-detail">
                                Putra pertama dari pasangan <br>
                                <span>I Nyoman Muliana <br>& Ni Kadek Parmiti</span>
                            </p>
                            <p class="address">
                                Desa Pengastulan, Kec. Seririt, Kab. Buleleng
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2" data-aos="fade-in" data-aos-duration="700">
                        <!-- <h3>&amp;</h3> -->
                        <img src="img/dan.png" class="divider" alt="">
                    </div>
                    <div class="col-lg-5 profile-female">
                        <div class="img-box" data-aos="fade-up" data-aos-duration="700">
                            <img src="img/profile-female.png" class="img-female profile-img" alt="">
                            <img src="img/list.png" class="profile-list" alt="">
                        </div>
                        <div data-aos="fade-up" data-aos-duration="700">
                            <h2 class="female-name profile-name">Ni Made Friska Rahayu Putri </h2>
                            <p class="female-detail profile-detail">
                                Putri kedua dari pasangan <br>
                                <span>I Wayan Ardhana <br>& Ni Ketut Suma Sari</span>
                            </p>
                            <p class="address">
                                Jl. Uluwatu Gg. Lebuh Api No. 1 Jimbaran
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Profile End -->

        <!-- Date Start -->
        <section class="date-section" data-aos="fade-in" data-aos-duration="700">
            <div class="container-date">
                <div class="card">
                    <div data-aos="fade-up" data-aos-duration="700">
                        <img src="img/cincin.png" alt="">
                        <h1 class="date-heading">Pawiwahan</h1>
                        <p class="date-detail">
                            Jumat, 30 September 2022 <br> 14:00 WITA - Selesai <br> Bertempat di <br> Desa Pengastulan, Kec. Seririt, Kab. Buleleng
                        </p>
                        <button class="btn-lokasi">
                            <a href="https://goo.gl/maps/6FrbEXrUJBjSYSzX7" class="link-lokasi" target="_blank">MAP LOKASI ACARA</a>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Date End -->

        <!-- Thankyou Start -->
        <section class="thanks-section">
            <div class="container">

                <div class="card">
                    <p data-aos="fade-up" data-aos-duration="700">
                        Merupakan suatu kebahagiaan bagi kami sekeluarga apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu kepada kami.
                    </p>
                    <p data-aos="fade-up" data-aos-duration="700">
                        Atas kehadiran dan doa restunya kami ucapkan terima kasih.
                    </p>
                    <img src="img/penutup.png" class="salam-penutup" alt="" data-aos="fade-up" data-aos-duration="700">
                    <p data-aos="fade-up" data-aos-duration="700">
                        <span>
                            Kami yang berbahagia <br>
                            Kel. I Nyoman Muliana & Kel. I Wayan Ardhana
                        </span>
                    </p>
                </div>

                <div class="countdown-box">
                    <div class="container">
                        <h1 class="heading" data-aos="fade-up" data-aos-duration="700">Menuju Acara</h1>
                        <div class="countdown">
                            <div class="time">
                                <span id="days">00</span>
                                <span class="label">days</span>
                            </div>
                            <div class="semicolon">:</div>
                            <div class="time">
                                <span id="hours">00</span>
                                <span class="label">hours</span>
                            </div>
                            <div class="semicolon">:</div>
                            <div class="time">
                                <span id="minutes">00</span>
                                <span class="label">minutes</span>
                            </div>
                            <div class="semicolon">:</div>
                            <div class="time">
                                <span id="seconds">00</span>
                                <span class="label">seconds</span>
                            </div>
                        </div>
                        <div id="expired" class="expired" data-aos=""></div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Thankyou End -->

        <!-- Gallery Start -->

        <section class="gallery-grid" id="gallery-grid">
            <div class="container">
                <div class="img-box">
                    <h1 class="gallery-heading">Gallery</h1>
                </div>

                <div class="gallery-swiper" data-aos="fade-in" data-aos-duration="700">
                    <!-- Swiper -->
                    <div class="swiper mySwiperGallery">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide img-box-landscape">
                                <div class="img-box">
                                    <a href="img/photo-12.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="img/photo-12.jpg" class="img-landscape" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-box">
                                    <a href="img/photo-3.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="img/photo-3.jpg" class="img-landscape" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-box">
                                    <a href="img/photo-2.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="img/photo-2.jpg" class="img-landscape" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-box">
                                    <a href="img/photo-8.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="img/photo-8.jpg" class="img-landscape" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-box">
                                    <a href="img/photo-10.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="img/photo-10.jpg" class="img-landscape" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-box">
                                    <a href="img/photo-1.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="img/photo-1.jpg" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-box">
                                    <a href="img/photo-4.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="img/photo-4.jpg" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-box">
                                    <a href="img/photo-5.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="img/photo-5.jpg" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-box">
                                    <a href="img/photo-6.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="img/photo-6.jpg" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-box">
                                    <a href="img/photo-7.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="img/photo-7.jpg" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-box">
                                    <a href="img/photo-11.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="img/photo-11.jpg" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-box">
                                    <a href="img/header-cover.jpg" class="fancybox" data-fancybox="gallery1">
                                        <img src="img/header-cover.jpg" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
            <!-- Prokes Start -->
            <div class="prokes">
                <div class="container">
                    <div class="prokes-title">
                        <h1 class="prokes-heading" data-aos="fade-up" data-aos-duration="700">Protokol Kesehatan</h1>
                        <p class="prokes-subheading" data-aos="fade-up" data-aos-duration="700">Mohon agar tetap mematuhi protokol kesehatan yang berlaku untuk mencegah penyebaran virus COVID-19.</p>
                    </div>
                    <div class="prokes-img">
                        <div class="img-box">
                            <img src="img/cuci-tangan.png" alt="">
                            <p class="label">Cuci Tangan</p>
                        </div>
                        <div class="img-box">
                            <img src="img/jaga-jarak.png" alt="">
                            <p class="label">Jaga Jarak</p>
                        </div>
                        <div class="img-box">
                            <img src="img/masker.png" alt="">
                            <p class="label">Menggunakan Masker</p>
                        </div>
                        <div class="img-box">
                            <img src="img/gel.png" alt="">
                            <p class="label">Gunakan Hand-sanitizer</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Prokes End -->

            <div class="footer" data-aos="fade-down" data-aos-duration="700">
                <h1 class="footer-heading">Matur Suksma</h1>
                <div class="social">
                    <a href="https://s.id/contact-bali-ngerajin" target="_blank" class="social-wa"><i class='bx bxl-whatsapp'></i></a>
                    <a href="https://gmail.com" target="_blank" class="social-gmail"><i class='bx bxl-gmail' ></i></a>
                    <a href="https://gmail.com" class="social-gmail" style="display: block;" target="_blank" class="social-gmail">undanglewatonline@gmail.com</a>
                </div>
                <p class="copy">&copy;Copyright | undanglewat.online 2022</p>
            </div>
        </section>
        <!-- Gallery End -->
        <script>
            // Atur Tanggal Acara
            var countDownDate = new Date("Sep 30, 2022 22:00:00").getTime();
            // Hitungan Mundur Waktu Dilakukan Setiap Satu Detik
            var x = setInterval(function() {
                // Mendapatkan Tanggal dan waktu Pada Hari ini
                var now = new Date().getTime();
                //Jarak Waktu Antara Hitungan Mundur
                var distance = countDownDate - now;
                // Perhitungan waktu hari, jam, menit dan detik
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                // Mengambil id label dari elemen HTML
                var textDays = document.getElementById("days");
                var textHours = document.getElementById("hours");
                var textMinutes = document.getElementById("minutes");
                var textSeconds = document.getElementById("seconds");

                textDays.innerHTML = days < 10 ? "0" + days : days;
                textHours.innerHTML = hours < 10 ? "0" + hours : hours;
                textMinutes.innerHTML = minutes < 10 ? "0" + minutes : minutes;
                textSeconds.innerHTML = seconds < 10 ? "0" + seconds : seconds;
                // Jika hitungan mundur selesai,
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("expired").innerHTML = "Acara kami telah usai";
                }
            }, 1000);
        </script>
    </div>
    <!--Content ends-->

    <script src="../data-master/script/jquery-3.3.1.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js " integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>

    <!-- Fancybox JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- Custom JS -->
    <script src="../data-master/script/script.js "></script>
</body>

</html>