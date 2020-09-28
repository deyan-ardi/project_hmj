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

    <!-- ***** Breadcrumb Area Start ***** -->
    <section class="section breadcrumb-area bg-overlay d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Breamcrumb Content -->
                    <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                        <h3 class="text-white">Hasil Seleksi Panitia Raker</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <section id="blog" class="section blog-area ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mb-5">

                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Sie</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>1915091001</td>
                                <td>Acara</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>1915091002</td>
                                <td>Kesekretariatan</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>1915091003</td>
                                <td>Pubdekdok</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Jepri</td>
                                <td>1915091004</td>
                                <td>Pubdekdok</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Mangpram</td>
                                <td>1915091005</td>
                                <td>Modusin Cwek</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="col-12 col-lg-4">
                    <aside class="sidebar">
                        <!-- Tentang Widget -->
                        <div class="single-widget">
                            <!-- Post Widget -->
                            <div class="accordions widget post-widget" id="post-accordion">
                                <div class="single-accordion">
                                    <h5>
                                        <a role="button" class="collapse show text-uppercase d-block p-3"
                                            data-toggle="collapse" href="#accordion3">Tentang
                                        </a>
                                    </h5>
                                    <!-- Post Widget Content -->
                                    <div id="accordion3" class="accordion-content widget-content collapse show p-3"
                                        data-parent="#post-accordion">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium aperiam
                                        porro,
                                        exercitationem tenetur qui illum nesciunt. Eligendi exercitationem cupiditate
                                        esse quibusdam ullam
                                        saepe ipsam possimus, praesentium, facilis nesciunt odit nulla!
                                        <button type="button" class="btn btn-primary mt-3" data-toggle="modal"
                                            data-target="#staticBackdrop">
                                            Syarat dan ketentuan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Chart Widget -->
                        <div class="single-widget">
                            <!-- Post Widget -->
                            <div class="accordions widget post-widget" id="post-accordion">
                                <div class="single-accordion">
                                    <h5>
                                        <a role="button" class="collapse show text-uppercase d-block p-3"
                                            data-toggle="collapse" href="#accordion4">live count
                                        </a>
                                    </h5>
                                    <!-- Post Widget Content -->
                                    <div id="accordion4" class="accordion-content widget-content collapse show p-3"
                                        data-parent="#post-accordion">
                                        <!-- chart Pie -->
                                        <p>Program Studi</p>
                                        <div>
                                            <div class="chart-pie pt-4 pb-2">
                                                <canvas id="myPieChart"></canvas>
                                            </div>
                                            <div class="mt-4 text-center small">
                                                <span class="mr-2">
                                                    <i class="fas fa-circle" style="color:#469bd1 ;"></i> PTI
                                                </span>
                                                <span class="mr-2">
                                                    <i class="fas fa-circle" style="color:#f6a80a ;"></i> SI
                                                </span>
                                                <span class="mr-2">
                                                    <i class="fas fa-circle" style="color:#020065 ;"></i> MI
                                                </span>
                                                <span class="mr-2">
                                                    <i class="fas fa-circle" style="color:#00587c ;"></i> ILKOM
                                                </span>
                                            </div>

                                            <!-- chart bar-->
                                            <p class="mt-4 mb-2">Pemilih masing-masing sie</p>
                                            <div>
                                                <p class="small ">Sie Sekret <span class="float-right">10%</span></p>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 10%" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <p class="small ">Sie Acara <span class="float-right">30%</span></p>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 30%" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <p class="small ">Sie Kerohanian<span class="float-right">20%</span></p>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar" role="progressbar" style="width: 20%"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <p class="small ">Sie Keamanan <span class="float-right">10%</span></p>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 10%" aria-valuenow="80" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <p class="small ">Sie Apenih yee <span class="float-right">30%</span>
                                                </p>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 30%" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Bug Widget -->
                        <div class="single-widget">
                            <!-- Post Widget -->
                            <div class="accordions widget post-widget" id="post-accordion">
                                <div class="single-accordion">
                                    <h5>
                                        <a role="button" class="collapse show text-uppercase d-block p-3"
                                            data-toggle="collapse" href="#accordion2">BUG
                                        </a>
                                    </h5>
                                    <!-- Post Widget Content -->
                                    <div id="accordion2" class="accordion-content widget-content collapse show p-3"
                                        data-parent="#post-accordion">
                                        <p>
                                            Jika menemupkan bug atau masalah pada website silahkan hubungin admin via
                                            <span class="text-primary font-weight-bold">WhatsApp</span> dengan mengklik
                                            tombol dibawah.
                                        </p>
                                        <a href="#" class="btn btn-primary mt-3" data-target="#staticBackdrop">
                                            Hubungi
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->
    <!-- Syarat Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Syarat dan Ketentuan</h5>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas atque ullam suscipit facere
                    blanditiis,
                    quam cupiditate, ratione, libero dolorum asperiores maxime dolores at veniam ea non quas incidunt
                    molestias
                    commodi.
                    <ul class="check-list">
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-2">Combined with a handful of model sentence
                                    structures looks reasonable.</span>
                            </div>
                        </li>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-2">Contrary to popular belief, Lorem Ipsum is not
                                    simply random text.</span>
                            </div>
                        </li>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-2">Sed ut perspiciatis unde omnis iste natus error
                                    sit voluptatem accusantium.</span>
                            </div>
                        </li>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-2">Natus error sit voluptatem unde omnis iste natus
                                    error sit voluptatem accusantium.</span>
                            </div>
                        </li>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-2">All the Lorem Ipsum generators on the Internet
                                    tend to repeat necessary.</span>
                            </div>
                        </li>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-2">All the Lorem Ipsum generators on the Internet
                                    tend to repeat necessary.</span>
                            </div>
                        </li>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-2">All the Lorem Ipsum generators on the Internet
                                    tend to repeat necessary.</span>
                            </div>
                        </li>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-2">All the Lorem Ipsum generators on the Internet
                                    tend to repeat necessary.</span>
                            </div>
                        </li>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-2">All the Lorem Ipsum generators on the Internet
                                    tend to repeat necessary.</span>
                            </div>
                        </li>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-2">All the Lorem Ipsum generators on the Internet
                                    tend to repeat necessary.</span>
                            </div>
                        </li>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-2">All the Lorem Ipsum generators on the Internet
                                    tend to repeat necessary.</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Mengerti</button>
                </div>
            </div>
        </div>
    </div>
    <!--====== Footer Area Start ======-->
    <footer class="section inner-footer bg-gray ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <!-- Footer Items -->
                    <div class="footer-items text-center">
                        <!-- Logo -->
                        <a class="navbar-brand" href="#">
                            <img class="logo" src="<?= base_url() ?>assets/img/logo/NAV.png" alt="">
                        </a>
                        <p class="mt-2 mb-3">Seluruh konten dibuat dan diunggah oleh Himpunan Mahasiswa Jurusan
                            Teknik Informatika Undiksha.</p>
                        <!-- Copyright Area -->
                        <div class="copyright-area border-0 pt-3">
                            &copy; Copyrights 2020 HMJ TI Undiksha. All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--====== Footer Area End ======-->
</div>