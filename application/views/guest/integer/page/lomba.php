<!-- ***** Breadcrumb Area Start ***** -->
<section class="section breadcrumb-area bg-overlay d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Breamcrumb Content -->
                <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                    <h3 class="text-white">Cabang Lomba <?= strtoupper($kegiatan[0]['nama_integer']) ?></h3>
                    <form action="" method="POST">
                        <div class="input-group mb-2 mt-5 col-lg-12">
                            <input type="text" name="cari" class="form-control" placeholder="Masukan kata kunci"
                                id="search" required>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                                    Cari
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ***** Lomba Area Start ***** -->
<section id="blog" class="section blog-area ptb_100">
    <div class="container">
        <div class="row">
            <?php foreach ($lomba as $data) { ?>
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Single Blog -->
                <div class="single-blog res-margin">
                    <!-- Blog Thumb -->
                    <div class="blog-thumb t-cards">
                        <img src="<?= base_url() ?>assets/upload/Folder_integer/icon_lomba/<?= $data['icon_lomba_integer'] ?>"
                            alt="">
                    </div>
                    <!-- Blog Content -->
                    <div class="blog-content p-4">
                        <!-- Meta Info -->
                        <p>Kategori <?= $data['nama_kategori_lomba_integer'] ?></p>
                        <!-- Blog Title -->
                        <h3 class="blog-title my-3"><?= $data['nama_lomba_integer'] ?></h3>
                        <p><?= $data['deskripsi_lomba_integer'] ?></p>
                        <?php
                            $start = new Datetime(date('Y-m-d H:i:s'));
                            $mulai = new Datetime($data['waktu_mulai_pendaftaran']);
                            $akhir = new Datetime($data['waktu_akhir_pendaftaran']);
                            $kumpul_mulai = new Datetime($data['waktu_awal_pengumpulan']);
                            $kumpul_akhir = new Datetime($data['waktu_akhir_pengumpulan']);
                            $waktu_mulai = $start->diff($mulai);
                            $waktu_akhir = $start->diff($akhir);
                            $waktu_mulai_kumpul = $start->diff($kumpul_mulai);
                            $waktu_akhir_kumpul = $start->diff($kumpul_akhir);
                            ?>

                        <!-- CEK APAKAH DATA KOSONG -->
                        <?php if (!empty($data['waktu_awal_pengumpulan'] && !empty($data['waktu_akhir_pengumpulan'])) && $data['pengumpulan_proposal'] == 1) { ?>

                        <!-- CEK WAKTU PENDAFTARAN -->
                        <?php if (date('Y-m-d H:i:s') < $data['waktu_mulai_pendaftaran']) { ?>
                        <!-- CEK JIKA KURANG DARI WAKTU PENDAFTARAN -->
                        <a href="<?= base_url() ?>integer/kabar_integer" class="btn btn-primary mt-3">Tahap
                            Pendaftaran</a>
                    </div>
                    <div class="reviewer media bg-gray p-4">
                        <!-- Reviewer Thumb -->
                        <div class="reviewer-meta media-body text-center ml-4">
                            <h6 class="text-secondary fw-6">Dimulai dalam <?= $waktu_mulai->d ?> hari
                                <?= $waktu_mulai->h ?> jam <?= $waktu_mulai->i ?>
                                menit</h6>
                        </div>
                    </div>
                    <?php } else if (date('Y-m-d H:i:s') > $data['waktu_akhir_pendaftaran'] && date('Y-m-d H:i:s') < $data['waktu_awal_pengumpulan']) { ?>
                    <a href="#" class="btn btn-primary mt-3">Pengumpulan Proposal</a>
                </div>
                <div class="reviewer media bg-gray p-4">
                    <!-- Reviewer Thumb -->
                    <div class="reviewer-meta media-body text-center ml-4">
                        <h6 class="text-secondary fw-6">Dimulai dalam <?= $waktu_mulai_kumpul->d ?> hari
                            <?= $waktu_mulai_kumpul->h ?> jam <?= $waktu_mulai_kumpul->i ?>
                            menit</h6>
                    </div>
                </div>
                <?php } else if (date('Y-m-d H:i:s') >= $data['waktu_mulai_pendaftaran'] && date('Y-m-d H:i:s') <= $data['waktu_akhir_pendaftaran']) { ?>

                <a href="<?= $data['pendaftaran_lomba_integer'] ?>" class="btn btn-primary mt-3">Daftar
                    Sekarang</a>
            </div>
            <div class="reviewer media bg-gray p-4">
                <!-- Reviewer Thumb -->
                <div class="reviewer-meta media-body text-center ml-4">
                    <h6 class="text-secondary fw-6">Berakhir dalam <?= $waktu_akhir->d ?> hari
                        <?= $waktu_akhir->h ?> jam <?= $waktu_akhir->i ?>
                        menit</h6>
                </div>
            </div>

            <?php } else if (date('Y-m-d H:i:s') >= $data['waktu_awal_pengumpulan'] && date('Y-m-d H:i:s') <= $data['waktu_akhir_pengumpulan']) { ?>

            <a href="<?= $data['pengumpulan_lomba_integer'] ?>" class="btn btn-primary mt-3">Kumpul
                Proposal</a>
        </div>
        <div class="reviewer media bg-gray p-4">
            <!-- Reviewer Thumb -->
            <div class="reviewer-meta media-body text-center ml-4">
                <h6 class="text-secondary fw-6">Berakhir dalam <?= $waktu_akhir_kumpul->d ?> hari
                    <?= $waktu_akhir_kumpul->h ?> jam <?= $waktu_akhir_kumpul->i ?>
                    menit</h6>
            </div>
        </div>

        <?php } else { ?>
        <a href="<?= base_url() ?>integer/kabar_integer" class="btn btn-primary mt-3">Tahap Pengumuman</a>
    </div>
    <div class="reviewer media bg-gray p-4">
        <!-- Reviewer Thumb -->
        <div class="reviewer-meta media-body text-center ml-4">
            <h6 class="text-secondary fw-6">Pengumpulan Telah Berakhir</h6>
        </div>
    </div>

    <?php }
                            } else { ?>
    <?php if (date('Y-m-d H:i:s') < $data['waktu_mulai_pendaftaran']) { ?>

    <a href="<?= base_url() ?>integer/kabar_integer" class="btn btn-primary mt-3">Tahap Pendaftaran</a>
    </div>
    <div class="reviewer media bg-gray p-4">
        <!-- Reviewer Thumb -->
        <div class="reviewer-meta media-body text-center ml-4">
            <h6 class="text-secondary fw-6">Dimulai dalam <?= $waktu_mulai->d ?> hari
                <?= $waktu_mulai->h ?> jam <?= $waktu_mulai->i ?>
                menit</h6>
        </div>
    </div>
    <?php } else if (date('Y-m-d H:i:s') >= $data['waktu_mulai_pendaftaran'] && date('Y-m-d H:i:s') <= $data['waktu_akhir_pendaftaran']) { ?>

    <a href="<?= $data['pendaftaran_lomba_integer'] ?>" class="btn btn-primary mt-3">Daftar
        Sekarang</a>
    </div>
    <div class="reviewer media bg-gray p-4">
        <!-- Reviewer Thumb -->
        <div class="reviewer-meta media-body text-center ml-4">
            <h6 class="text-secondary fw-6">Berakhir dalam <?= $waktu_akhir->d ?> hari
                <?= $waktu_akhir->h ?> jam <?= $waktu_akhir->i ?>
                menit</h6>
        </div>
    </div>
    <?php } else { ?>
    <a href="<?= base_url() ?>integer/kabar_integer" class="btn btn-primary mt-3">Tahap Penyisihan</a>
    </div>
    <div class="reviewer media bg-gray p-4">
        <!-- Reviewer Thumb -->
        <div class="reviewer-meta media-body text-center ml-4">
            <h6 class="text-secondary fw-6">Pendaftaran Lomba Telah Berakhir
            </h6>
        </div>
    </div>
    <?php }
                            } ?>


    </div>
    </div>
    <?php } ?>
    </div>
    </div>
</section>
<!-- ***** Lomba Area End ***** -->

<!--====== Height Emulator Area Start ======-->
<div class="height-emulator d-none d-lg-block"></div>
<!--====== Height Emulator Area End ======-->