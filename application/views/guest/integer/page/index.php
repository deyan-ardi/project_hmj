<!-- ***** Intro Video Area Start ***** -->
<section id="intro">
    <div id="intro-video" class="row justify-content-center">
        <video autoplay disablePictureInPicture muted loop>
            <source
                src="<?= base_url() ?>assets/upload/Folder_integer_website/video/<?= $kegiatan[0]['video_integer'] ?>"
                type="video/mp4">
        </video>
    </div>
    <div id="content">
        <div class="intro-text text-center">
            <h1 id="getAnimate" data-first="HMJ TI UNDIKSHA" data-sec="PROUDLY PRESENT">
            </h1>
            <div id="titleInteger" class="d-none">
                <!-- <img src="<?= base_url() ?>assets/upload/Folder_integer_website/foto/<?= $kegiatan[0]['logo_integer'] ?>"> -->
                <h1><?= strtoupper($kegiatan[0]['nama_integer']) ?></h1>
            </div>


        </div>
    </div>
</section>
<!-- *****  Intro Video Area End ***** -->

<!-- ***** Welcome Area Start ***** -->
<section id="home" class="section welcome-area bg-inherit h-100vh overflow-hidden">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <!-- Welcome Intro Start -->
            <div class="col-12 col-md-7">
                <div class="welcome-intro">
                    <h1>
                        <?= ucwords($kegiatan[0]['tema_integer']) ?>
                    </h1>
                    <p class="my-4"><?= $kegiatan[0]['deskripsi_integer'] ?></p>
                </div>
            </div>
            <div class="col-12 col-md-5 d-none d-lg-block"">
                        <!-- Welcome Thumb -->
                        <div class=" welcome-thumb" data-aos="fade-right" data-aos-delay="500"
                data-aos-duration="1000">
                <img src="<?= base_url() ?>assets/img/maskot/welcome.png" style="max-width: unset;" alt="Maskot">
            </div>
        </div>
    </div>
    </div>
</section>
<!-- ***** Welcome Area End ***** -->

<!-- ***** Features Area Start ***** -->
<section id="features" class="section features-area ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-6">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>Tujuan <?= strtoupper($kegiatan[0]['nama_integer']) ?></h2>
                    <p class="mt-4">Secara umum, adapun tujuan dilaksanakannya
                        <?= strtoupper($kegiatan[0]['nama_integer']) ?> adalah
                        sebagai berikut
                    </p>
                </div>
            </div>
        </div>
        <div class="row mb-lg-4 mb-md-3 mb-sm-2 justify-content-center">
            <div class="col-10 col-md-6 col-lg-3">
                <!-- Icon Box -->
                <div class="icon-box text-center p-4 wow fadeInUp" data-wow-duration="2s">
                    <!-- Featured Icon -->
                    <div class="featured-icon mb-3">
                        <span class="flaticon-tap"></span>
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Perayaan HUT</h3>
                        <p>Untuk memperingati
                            hari ulang tahun
                            Jurusan TI yang ke-
                            2.</p>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-6 col-lg-3">
                <!-- Icon Box -->
                <div class="icon-box text-center p-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                    <!-- Featured Icon -->
                    <div class="featured-icon mb-3">
                        <span class="flaticon-fingerprint"></span>
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Perkenalan
                            Jurusan</h3>
                        <p>Memperkenalkan
                            Jurusan TI kepada
                            masyarakat luar.</p>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-6 col-lg-3">
                <!-- Icon Box -->
                <div class="icon-box text-center p-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                    <!-- Featured Icon -->
                    <div class="featured-icon mb-3">
                        <span class="flaticon-notification"></span>
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Publikasi Karya</h3>
                        <p>Menunjukkan hasil
                            karya Mahasiswa TI
                            melalui kegiatan
                            expo.</p>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-6 col-lg-3">
                <!-- Icon Box -->
                <div class="icon-box text-center p-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                    <!-- Featured Icon -->
                    <div class="featured-icon mb-3">
                        <span class="flaticon-place"></span>
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Media Kreativitas</h3>
                        <p>Sebagai media
                            penyalur kreativitas
                            dan ide-ide
                            Mahasiswa TI</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Area End ***** -->
<?php
$i = 1;
foreach ($kategori as $data) {
    $i++;
    if ($i % 2 == 0) {
?>
<!-- ***** Seni Area Start ***** -->
<section class="section discover-area bg-gray overflow-hidden ptb_100" id="<?= $i ?>">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-6 order-1 order-lg-1">
                <!-- Discover Thumb -->
                <div class="service-thumb discover-thumb mx-auto text-center wow fadeInLeft">
                    <img src="<?= base_url() ?>assets/upload/Folder_integer_website/icon_kategori/<?= $data['icon_kategori_lomba_integer'] ?>"
                        alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6 order-2 order-lg-2">
                <!-- Discover Text -->
                <div class="discover-text px-0 px-lg-4 pt-4 pt-lg-0">
                    <h2 class="pb-4"><?= ucwords($data['nama_kategori_lomba_integer']) ?></h2>
                    <!-- Check List -->
                    <p class="mb-3">
                        <?= $data['deskripsi_kategori_lomba_integer'] ?>
                    </p>
                    <ul class="check-list">
                        <?php foreach ($lomba as $lomba_data) {
                                    if ($lomba_data['id_kategori_lomba_integer'] == $data['id_kategori_lomba_integer']) {
                                ?>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-2"><?= $lomba_data['nama_lomba_integer'] ?></span>
                            </div>
                        </li>
                        <?php }
                                } ?>
                    </ul>
                    <a href="<?= base_url() ?>integer/lomba_integer/<?= $data['id_kategori_lomba_integer'] ?>"
                        class="btn btn-bordered mt-4">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Seni Area End ***** -->
<?php } else { ?>
<!-- ***** Karya Tulis Area Start ***** -->
<section class="section discover-area overflow-hidden ptb_100" id="<?= $i ?>">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-6 order-1 order-lg-2">
                <!-- Discover Thumb -->
                <div class="service-thumb discover-thumb mx-auto text-center wow fadeInRight">
                    <img src="<?= base_url() ?>assets/upload/Folder_integer_website/icon_kategori/<?= $data['icon_kategori_lomba_integer'] ?>"
                        alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <!-- Discover Text -->
                <div class="discover-text px-0 px-lg-4 pt-4 pt-lg-0">
                    <h2 class="pb-4"><?= ucwords($data['nama_kategori_lomba_integer']) ?></h2>
                    <!-- Check List -->
                    <p class="mb-3">
                        <?= $data['deskripsi_kategori_lomba_integer'] ?>
                    </p>
                    <ul class="check-list">
                        <?php foreach ($lomba as $lomba_data) {
                                    if ($lomba_data['id_kategori_lomba_integer'] == $data['id_kategori_lomba_integer']) {
                                ?>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-2"><?= $lomba_data['nama_lomba_integer'] ?></span>
                            </div>
                        </li>
                        <?php }
                                } ?>
                    </ul>
                    <a href="<?= base_url() ?>integer/lomba_integer/<?= $data['id_kategori_lomba_integer'] ?>"
                        class="btn btn-bordered mt-4">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php }
} ?>


<!-- ***** IT Area End ***** -->

<!-- ***** Partisipasi Start ***** -->
<section class="section work-area bg-overlay overflow-hidden ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <!-- Work Content -->
                <div class="work-content text-center">
                    <h2 class="text-white">Partisipasi Sekarang!</h2>
                    <p class="text-white my-3 mt-sm-4 mb-sm-5">Ayo berpartisipasi dalam kegiatan lomba serangkaian
                        <?= strtoupper($kegiatan[0]['nama_integer']) ?> yang dipersembahkan oleh HMJ Teknik Informatika
                        Undiksha.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <!-- Single Work -->
                <div class="single-work text-center p-3">
                    <!-- Work Icon -->
                    <div class="work-icon">
                        <img class="avatar-md" src="<?= base_url() ?>assets/img/icon/work/register.png" alt="">
                    </div>
                    <h3 class="text-white py-3">Registrasi</h3>
                    <p class="text-white">Pilihlah lomba yang akan diikuti</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <!-- Single Work -->
                <div class="single-work text-center p-3">
                    <!-- Work Icon -->
                    <div class="work-icon">
                        <img class="avatar-md" src="<?= base_url() ?>assets/img/icon/work/competence.png" alt="">
                    </div>
                    <h3 class="text-white py-3">Bertanding</h3>
                    <p class="text-white">Ikuti perlombaan dan berjuang sekuat tenaga</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <!-- Single Work -->
                <div class="single-work text-center p-3">
                    <!-- Work Icon -->
                    <div class="work-icon">
                        <img class="avatar-md" src="<?= base_url() ?>assets/img/icon/work/winning.png" alt="">
                    </div>
                    <h3 class="text-white py-3">Juara</h3>
                    <p class="text-white">Raihlah juara dan buktikan siapa dirimu</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Partisipasi Area End ***** -->
<section id="information" class="section price-plan-area bg-gray overflow-hidden ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>Kabar Integer</h2>
                    <p class="mt-4">
                        Kunjungi halaman berikut untuk mendapatkan pengumuman atau informasi lainnya terkait dengan
                        pelaksanaan Integer #2
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-2">
            <div class="col-12 col-sm-10 col-lg-8">
                <div class="row price-plan-wrapper">
                    <div class="col-12 col-md-6 mb-3">
                        <!-- Single Price Plan -->
                        <div class="single-price-plan text-center p-4 wow fadeInLeft" data-aos-duration="2s"
                            data-wow-delay="0.4s">
                            <!-- Plan Thumb -->
                            <div class="plan-thumb text-primary">
                                <i class="fas fa-bullhorn" style="font-size: 4rem;"></i>
                            </div>
                            <!-- Plan Title -->
                            <div class="plan-title my-2 my-sm-3">
                                <h3 class="text-uppercase">Pengumuman</h3>
                            </div>
                            <!-- Plan Description -->
                            <div class="plan-description text-left overflow-auto" style="height: 15rem;">
                                <ul class="plan-features">
                                    <li class="border-bottom"></li>
                                    <?php foreach ($berita as $data) {
                                        if ($data['kategori_berita_integer'] == 2) {
                                    ?>
                                    <li class="border-bottom py-3">
                                        <a
                                            href="<?= base_url() ?>integer/detail_kabar_integer/<?= $data['id_berita_integer'] ?>">
                                            <?= $data['nama_berita_integer'] ?>
                                        </a>
                                    </li>
                                    <?php }
                                    } ?>
                                </ul>
                            </div>
                            <!-- Plan Button -->
                            <div class="button">
                                <a href="<?= base_url() ?>integer/detail_kabar_integer"
                                    class="btn mt-4">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <!-- Single Price Plan -->
                        <div class="single-price-plan text-center p-4 wow fadeInRight" data-aos-duration="2s"
                            data-wow-delay="0.4s">
                            <!-- Plan Thumb -->
                            <div class="plan-thumb text-primary">
                                <i class="far fa-newspaper" style="font-size: 4rem;"></i>
                            </div>
                            <!-- Plan Title -->
                            <div class="plan-title my-2 my-sm-3">
                                <h3 class="text-uppercase">Berita</h3>
                            </div>
                            <!-- Plan Description -->
                            <div class="plan-description text-left overflow-auto" style="height: 15rem;">
                                <ul class="plan-features">
                                    <li class="border-bottom"></li>
                                    <?php foreach ($berita as $data) {
                                        if ($data['kategori_berita_integer'] == 1) {
                                    ?>
                                    <li class="border-bottom py-3">
                                        <a
                                            href="<?= base_url() ?>integer/detail_kabar_integer/<?= $data['id_berita_integer'] ?>">
                                            <?= $data['nama_berita_integer'] ?>
                                        </a>
                                    </li>
                                    <?php }
                                    } ?>
                                </ul>
                            </div>
                            <!-- Plan Button -->
                            <div class="button">
                                <a href="<?= base_url() ?>integer/detail_kabar_integer"
                                    class="btn mt-4">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- *****  Sponsor Area Start ***** -->
<section class="branding-area ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2 class="mb-5">Sponsor dan Media Partner</h2>
                    <p class="-4">Adapun sponsor dan media partner pada kegiatan
                        <?= strtoupper($kegiatan[0]['nama_integer']) ?> ini yakni sebagai berikut
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Branding Slider -->
            <div class="branding-slider owl-carousel op-5">
                <!-- Single Brand -->
                <?php foreach ($sponsor as $data) { ?>
                <div class="single-brand p-3 d-flex justify-content-center align-items-center">
                    <img src="<?= base_url() ?>assets/upload/Folder_integer_website/sponsor/<?= $data['foto_sponsor_integer'] ?>"
                        style="height: 5rem;" alt="">
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- ***** Sponsor Area End ***** -->

<!-- ***** Pertanyaan umum Area Start ***** -->
<section class="section faq-area ptb_100 bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2 class="text-capitalize">Pertanyaan umum seputar <?= strtoupper($kegiatan[0]['nama_integer']) ?>
                    </h2>
                    <p class=" mt-4">Berikut merupakan beberapa pertanyaan yang sering diajukan oleh peserta
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- FAQ Content -->
                <div class="faq-content">
                    <!-- sApp Accordion -->
                    <div class="accordion" id="sApp-accordion">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-8">
                                <!-- Single Accordion Item -->
                                <div class="card border-top-0 border-left-0 border-right-0 border-bottom">
                                    <!-- Card Header -->
                                    <div class="card-header bg-gray border-0 p-0">
                                        <h2 class="mb-0">
                                            <button class="btn px-0 py-3" type="button" data-toggle="collapse"
                                                data-target="#collapseOne">
                                                Berapa Maksimal Saya Boleh Mengikuti Perlombaan?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#sApp-accordion">
                                        <!-- Card Body -->
                                        <div class="card-body px-0 py-3 bg-gray">
                                            Secara umum, terkait dengan aturan dan ketentuan perlombaan telah diatur
                                            pada buku pedoman Lomba. Untuk informasi terkait buku pedoman, dapat diakses
                                            pada laman Kabar Integer atau dapat menghubungi panitia.
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Accordion Item -->
                                <div class="card border-top-0 border-left-0 border-right-0 border-bottom">
                                    <!-- Card Header -->
                                    <div class="card-header bg-gray border-0 p-0">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed px-0 py-3" type="button" data-toggle="collapse"
                                                data-target="#collapseTwo">
                                                Bukti Pembayaran Saya Belum dikirim
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#sApp-accordion">
                                        <!-- Card Body -->
                                        <div class="card-body px-0 py-3 bg-gray">
                                            Untuk sementara, bukti pembayaran masih harus ditulis manual oleh panitia,
                                            bukti pembayaran anda maksimal dikirim 1x24 jam setelah anda melakukan
                                            konfirmasi kepada panitia. Untuk informasi lebih lanjut dapat mengunjungi
                                            akun instagram HMJ TI Undiksha <span
                                                class="text-primary">@hmj_ti.undiksha</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Accordion Item -->
                                <div class="card border-top-0 border-left-0 border-right-0 border-bottom">
                                    <!-- Card Header -->
                                    <div class="card-header bg-gray border-0 p-0">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed px-0 py-3" type="button" data-toggle="collapse"
                                                data-target="#collapseThree">
                                                Saya menemukan masalah pada website, kemana saya harus melapor?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#sApp-accordion">
                                        <!-- Card Body -->
                                        <div class="card-body px-0 py-3 bg-gray">
                                            Untuk melaporkan masalah pada website, silahkan hubungi akun instagram HMJ
                                            TI Undiksha <span class="text-primary">@hmj_ti.undiksha</span> atau dapat
                                            menghubungi administrator website melalui No Wa berikut <a
                                                href="https://api.whatsapp.com/send?phone=6281915656865&text=Terdapat%20masalah%20pada%20website%20INTEGER,%20mhon%20bantuannya%20untuk%20memperbaiki"><span
                                                    class="text-primary">081915656865</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Accordion Item -->
                                <!-- <div class="card border-top-0 border-left-0 border-right-0 border-bottom">
                                    <div class="card-header bg-gray border-0 p-0">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed px-0 py-3" type="button" data-toggle="collapse"
                                                data-target="#collapseFour">
                                                How can I edit my personal information?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#sApp-accordion">
                                        <div class="card-body px-0 py-3 bg-gray">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                            quae ab illo inventore veritatis et quasi architecto beatae vitae
                                            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
                                            eos qui ratione voluptatem sequi nesciunt.
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-top-0 border-left-0 border-right-0 border-bottom">
   
                                    <div class="card-header bg-gray border-0 p-0">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed px-0 py-3" type="button" data-toggle="collapse"
                                                data-target="#collapseFive">
                                                Contact form isn't working?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="collapse" data-parent="#sApp-accordion">
        
                                        <div class="card-body px-0 py-3 bg-gray">
                                            There are many variations of passages of Lorem Ipsum available, but
                                            the majority have suffered alteration in some form, by injected
                                            humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage of Lorem Ipsum, you
                                            need to be sure there isn't anything embarrassing hidden in the
                                            middle of text.
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Pertanyaan umum Area End ***** -->

<!--====== Height Emulator Area Start ======-->
<div class="height-emulator d-none d-lg-block"></div>
<!--====== Height Emulator Area End ======-->