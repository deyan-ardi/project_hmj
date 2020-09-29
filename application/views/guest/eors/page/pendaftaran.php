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
                        <h3 class="text-white">Pendaftaran Kegiatn </h3>
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
                    <form action="" method="POST">
                        <!-- Nama -->
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="namaHelp"
                                required>
                        </div>
                        <!-- NIM -->
                        <div class="form-group" onkeyup="checkProdi()">
                            <label for="NIM">NIM</label>
                            <input type="text" class="form-control" pattern="[0-9]" minlength="10" maxlength="10"
                                id="NIM" name="NIM" aria-describedby="NIMHelp" required>
                        </div>
                        <!-- Prodi-->
                        <div class="form-group">
                            <label for="pilihanUtama">Program Studi</label>
                            <select class="form-control" id="prodi" name="prodi" required>
                                <option value="05" selected>Pendidikan Teknik Informatika</option>
                                <option value="02">Manajemen Informatika</option>
                                <option value="09">Sistem Informasi</option>
                                <option value="10">Ilmu Komputer</option>
                            </select>
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Alamat Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                aria-describedby="emailHelp" required>
                            <small id="emailHelp" class="form-text text-muted">Gunakan Email Undiksha untuk
                                pendaftaran</small>
                        </div>
                        <!-- Pilihan Utama Panitia -->
                        <div class="form-group" onchange="panitiaCadangan()">
                            <label for="pilihanUtama">Pilihan Utama Panitia</label>
                            <select class="form-control" id="pilihanUtama" name="pilihanUtama" required>
                                <option selected>Sie Sekret</option>
                                <option>Sie Acara</option>
                                <option>Sie Kerohanian</option>
                                <option>Sie Keamanan</option>
                                <option>Sie Apanih yee</option>
                            </select>
                        </div>
                        <!-- Pilihan Cadangan Panitia -->
                        <div class="form-group">
                            <label for="pilihanCadangan">Pilihan Cadangan Panitia</label>
                            <select class="form-control" id="pilihanCadangan" name="pilihanCadangan" required>
                                <option selected>Tidak Ada</option>
                            </select>
                            <small id="pilihanCadanganHelp" class="form-text text-muted">Pilihan cadangan akan
                                digunakan jika
                                pilihan
                                utama tidak tersedia.</small>
                        </div>
                        <!-- Moto Hidup -->
                        <div class="form-group">
                            <label for="moto">Moto Hidup</label>
                            <textarea class="form-control" id="moto" rows="4" name="moto" required></textarea>
                        </div>
                        <!-- Foto -->
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control-file" name="foto" id="foto">
                            <small id="fotoHelp" class="form-text text-muted">Gunakan foto berjas dengan latar
                                belakang
                                biru.</small>
                        </div>
                        <!-- Validador -->
                        <div class="form-group form-check mt-5 mb-5">
                            <input type="checkbox" class="form-check-input" id="validator" required>
                            <label class="form-check-label" for="validator">Saya sudah mengisi seluruh data dengan
                                benar. Jika saya
                                mengirimkan data yang salah, saya siap menerima sanksi yang diberikan.</label>
                        </div>
                        <!-- Kirim -->
                        <button type="submit" class="btn btn-primary">Kirim Data</button>
                    </form>
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
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium
                                        aperiam porro,
                                        exercitationem tenetur qui illum nesciunt. Eligendi exercitationem
                                        cupiditate esse quibusdam ullam
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
                                                <p class="small ">Sie Sekret <span class="float-right">10%</span>
                                                </p>
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
                                                <p class="small ">Sie Kerohanian<span class="float-right">20%</span>
                                                </p>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar" role="progressbar" style="width: 20%"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <p class="small ">Sie Keamanan <span class="float-right">10%</span>
                                                </p>
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
                                            Jika menemupkan bug atau masalah pada website silahkan hubungin admin
                                            via <span class="text-primary font-weight-bold">WhatsApp</span> dengan
                                            mengklik tombol dibawah.
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
                    quam cupiditate, ratione, libero dolorum asperiores maxime dolores at veniam ea non quas
                    incidunt molestias
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