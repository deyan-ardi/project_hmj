    <div class="main">
        <!-- ***** Header Start ***** -->
        <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.html">
                    <img class="navbar-brand-regular" src="<?= base_url() ?>assets/img/logo/NAV.png" alt="brand-logo" />
                    <img class="navbar-brand-sticky" src="<?= base_url() ?>assets/img/logo/NAV.png"
                        alt="sticky brand-logo" />
                </a>
            </div>
        </header>
        <!-- ***** Header End ***** -->

        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section welcome-area bg-inherit h-100vh overflow-hidden">
            <div class="shapes-container">
                <div class="bg-shape"></div>
            </div>
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-12 col-md-5 order-0 order-lg-1">
                        <!-- Welcome Thumb -->
                        <div class=" welcome-thumb" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
                            <img src="<?= base_url() ?>assets/img/maskot/welcome.png" style="max-width: unset;"
                                alt="Maskot">
                        </div>
                    </div>
                    <!-- Welcome Intro Start -->
                    <div class="col-12 col-md-7">
                        <div class="welcome-intro">
                            <h1>
                                Electronic Open Recruitment System HMJ TI UNDIKSHA
                            </h1>
                            <p class="my-4">Electronic Open Recruitment System adalah sebuah sistem pendaftaran berbasis
                                website yang digunakan untuk pendaftaran kepanitiaan ataupun keanggotaan di lingkungan
                                HMJ Jurusan Teknik Informatika.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Welcome Area End ***** -->

        <!-- ***** Tujuan Area Start ***** -->
        <section id="features" class="section features-area ptb_100 bg-gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-6">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2>Tujuan E-ORS</h2>
                            <p class="mt-4">Ada beberapa tujuan pembuatan Electronic Open Recruitment System HMJ TI,
                                diantaranya
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Icon Box -->
                        <div class="icon-box text-center p-4 wow fadeInUp" data-wow-duration="2s">
                            <!-- Featured Icon -->
                            <div class="featured-icon mb-3">
                                <span class="flaticon-tap"></span>
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Mudah Digunakan</h3>
                                <p>Mempermudah dalam melakukan kegiatan Open Recruitment kepanitiaan atapun keanggotaan
                                    HMJ
                                    TI Undiksha</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Icon Box -->
                        <div class="icon-box text-center p-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <!-- Featured Icon -->
                            <div class="featured-icon mb-3">
                                <span class="flaticon-fingerprint"></span>
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Ramah Kertas</h3>
                                <p>Mengurangi penggunaan kertas sekali pakai yang biasanya digunakan dalam setiap berkas
                                    yang dikumpul pada kegiatan Open Recruitment secara konvensional</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Icon Box -->
                        <div class="icon-box text-center p-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                            <!-- Featured Icon -->
                            <div class="featured-icon mb-3">
                                <span class="flaticon-notification"></span>
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Proses Mudah</h3>
                                <p>Mempermudah dalam melakukan pendataan, melakukan wawancara, penilaian wawancara,
                                    hingga
                                    memberikan keputusan akhir penerimaan peserta</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Tujuan Area End ***** -->

        <!-- ***** Kepanitiaan Area Start ***** -->
        <section id="blog" class="section blog-area ptb_100">
            <div class="section-heading text-center">
                <h2>Kepanitiaan yang Bisa Diikuti</h2>
            </div>
            <div class="container">
                <div class="row">
                    <?php foreach ($kegiatan as $data) { ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Blog -->
                        <div class="single-blog res-margin">
                            <!-- Blog Thumb -->
                            <div class="blog-thumb" style="height: 17rem;">
                                <img src="<?= base_url() ?>assets/img/lomba/dance2.png" alt="">
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content p-4">
                                <!-- Meta Info -->
                                <?php if (date('Y-m-d H:i:s') < $data['tgl_mulai']) {
                                        $start = new Datetime(date('Y-m-d H:i:s'));
                                        $end = new Datetime($data['tgl_mulai']);
                                        $interval = $start->diff($end);
                                    ?>
                                <p>Dimulai dalam <?= $interval->d ?> hari <?= $interval->h ?> jam <?= $interval->i ?>
                                    menit</p>
                                <?php } else if (date('Y-m-d H:i:s') >= $data['tgl_mulai'] && date('Y-m-d H:i:s') <= $data['tgl_akhir']) {
                                        $start = new Datetime(date('Y-m-d H:i:s'));
                                        $end = new Datetime($data['tgl_akhir']);
                                        $interval = $start->diff($end);
                                    ?>
                                <p>Berakhir dalam <?= $interval->d ?> hari <?= $interval->h ?> jam <?= $interval->i ?>
                                    menit</p>
                                <?php } else { ?>
                                <p>Pendaftaran Telah Berakhir</p>
                                <?php } ?>
                                <!-- Blog Title -->
                                <h3 class="blog-title my-3"><?= $data['nama_kegiatan'] ?></h3>
                                <p><?= $data['deskripsi'] ?></p>
                                <?php if (date('Y-m-d H:i:s') > $data['tgl_akhir']) { ?>
                                <a href="<?= base_url() ?>eors/lihat_hasil/<?= $data['nama_kegiatan'] ?>"
                                    class="btn btn-primary mt-3">Lihat Hasil</a>
                                <?php } else { ?>
                                <a href="<?= base_url() ?>eors/daftar_sekarang/<?= $data['nama_kegiatan'] ?>"
                                    class="btn btn-primary mt-3">Daftar
                                    Sekarang</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- ***** Kepanitiaan Area End ***** -->

        <!-- ***** Pertanyaan umum Area Start ***** -->
        <section class="section faq-area ptb_100 bg-gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Pertanyaan umum seputar E-ORS</h2>
                            <p class=" mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.
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
                                                        How to install sApp?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3 bg-gray">
                                                    The point of using Lorem Ipsum is that it has a more-or-less normal
                                                    distribution of letters, as opposed to using 'Content here, content
                                                    here', making it look like readable English. Many desktop publishing
                                                    packages and web page editors now use Lorem Ipsum as their default
                                                    model text.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-gray border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-3" type="button"
                                                        data-toggle="collapse" data-target="#collapseTwo">
                                                        Can I get support from the Author?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3 bg-gray">
                                                    Contrary to popular belief, Lorem Ipsum is not simply random text.
                                                    It has roots in a piece of classical Latin literature from 45 BC,
                                                    making it over 2000 years old. Richard McClintock, a Latin professor
                                                    at Hampden-Sydney College in Virginia, looked up one of the more
                                                    obscure Latin words, consectetur, from a Lorem Ipsum passage, and
                                                    going through the cites of the word in classical literature,
                                                    discovered the undoubtable source.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-gray border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-3" type="button"
                                                        data-toggle="collapse" data-target="#collapseThree">
                                                        Do you have a free trail?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3 bg-gray">
                                                    It has survived not only five centuries, but also the leap into
                                                    electronic typesetting, remaining essentially unchanged. It was
                                                    popularised in the 1960s with the release of Letraset sheets
                                                    containing Lorem Ipsum passages, and more recently with desktop
                                                    publishing software like Aldus PageMaker including versions of Lorem
                                                    Ipsum.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-gray border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-3" type="button"
                                                        data-toggle="collapse" data-target="#collapseFour">
                                                        How can I edit my personal information?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFour" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
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
                                        <!-- Single Accordion Item -->
                                        <div class="card border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-gray border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-3" type="button"
                                                        data-toggle="collapse" data-target="#collapseFive">
                                                        Contact form isn't working?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFive" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3 bg-gray">
                                                    There are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour, or randomised words which don't look even slightly
                                                    believable. If you are going to use a passage of Lorem Ipsum, you
                                                    need to be sure there isn't anything embarrassing hidden in the
                                                    middle of text.
                                                </div>
                                            </div>
                                        </div>
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
        <!--====== Footer Area Start ======-->
        <footer class="footer-area footer-fixed">
            <!-- Footer Top -->
            <div class="footer-top ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Logo -->
                                <div class="navbar-brand">
                                    <img class="logo" src="<?= base_url() ?>assets/img/logo/UNDIKSHA.png"
                                        alt="Logo HMJ TI" style="height: 4.8rem;" />
                                    <img class="logo" src="<?= base_url() ?>assets/img/logo/HMJ.png" alt="Logo HMJ TI"
                                        style="height: 4.8rem;" />
                                </div>
                                <p class="mt-2 mb-3">
                                    Jl. Udayana No.11, Banjar Tegal, Singaraja, Kabupaten Buleleng, Bali
                                </p>
                                <!-- Social Icons -->
                                <div class="social-icons d-flex">
                                    <a class="facebook" href="https://web.facebook.com/hmj.ti.undiksha/?_rdc=1&_rdr"
                                        target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="twitter" href="https://www.instagram.com/hmj_ti.undiksha/"
                                        target="_blank">
                                        <i class="fab fa-instagram"></i>
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a class="google-plus"
                                        href="https://www.youtube.com/channel/UCjvKksTEifUWNU_rfCHubDg?app=desktop"
                                        target="_blank">
                                        <i class="fab fa-youtube"></i>
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                    <a class="vine" href="mailto:hmjtiundiksha@gmail.com" target="_blank">
                                        <i class="far fa-envelope"></i>
                                        <i class="far fa-envelope"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title mb-2">Lomba</h3>
                                <ul>
                                    <li class="py-2"><a class="scroll" href="#">Bidang Seni</a></li>
                                    <li class="py-2"><a class="scroll" href="#">Bidang Karya Tulis</a></li>
                                    <li class="py-2"><a class="scroll" href="#">Bidang It</a></li>
                                    <li class="py-2"><a class="scroll" href="#">Bidang Games</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title mb-2">Konten</h3>
                                <ul>
                                    <li class="py-2" href="#">Beranda</a></li>
                                    <li class="py-2"><a href="#">Tentang</a></li>
                                    <li class="py-2"><a href="#">Jadwal</a></li>
                                    <li class="py-2"><a href="#">Lomba</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title mb-2">Layanan</h3>
                                <ul>
                                    <li class="py-2"><a href="#">Beranda</a></li>
                                    <li class="py-2"><a href="#">Website</a></li>
                                    <li class="py-2"><a href="#">Integer</a></li>
                                    <li class="py-2"><a href="#">OKK</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Copyright Area -->
                            <div
                                class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                                <!-- Copyright Left -->
                                <div class="copyright-left">
                                    &copy; Copyrights 2020 HMJ TI Undiksha. All rights reserved.
                                </div>
                                <!-- Copyright Right -->
                                <div class="copyright-right">
                                    Made with <i class="fas fa-heart"></i> By
                                    <a href="#" class="text-primary" data-toggle="modal" data-target="#devModal">Team
                                        Dev</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--====== Footer Area End ======-->

        <!--====== Modal Developer Area Start ======-->
        <div class="modal fade" id="devModal" tabindex="-1" role="dialog" aria-labelledby="devModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="devModalLabel">Team Developer</h4>
                    </div>
                    <div class="modal-body">
                        <h5>Coordinator</h5>
                        <p>Irfan Walhidayah</p>
                        <p>Putu Zasya Eka Satya Nugraha</p>
                        <hr>
                        <h5>Front End</h5>
                        <p>I Nyoman Triarta</p>
                        <hr>
                        <h5>Back End</h5>
                        <p>I Gede Riyan Ardi Darmawan</p>
                        <p>Ida Bagus Made Yudha Wirawan</p>
                        <hr>
                        <h5>Assets and Contents</h5>
                        <p>I Wayan Darmika</p>
                        <p>I Gede Anggie Suardika Arpin</p>
                        <p>Ni Made Mirah Pradnya Pramesti</p>
                        <p>Ketut Nova Wirya Dinata</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Modal Developer Area End ======-->
    </div>