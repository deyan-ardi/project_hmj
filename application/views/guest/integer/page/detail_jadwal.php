        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="section breadcrumb-area bg-overlay d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                            <h3 class="text-white">Agenda <?php
                                                            $daftar_hari = array(
                                                                'Sunday' => 'Minggu',
                                                                'Monday' => 'Senin',
                                                                'Tuesday' => 'Selasa',
                                                                'Wednesday' => 'Rabu',
                                                                'Thursday' => 'Kamis',
                                                                'Friday' => 'Jumat',
                                                                'Saturday' => 'Sabtu'
                                                            );
                                                            $data_tanggal =  $detail_hari[0]['nama_hari_integer'];
                                                            $hari = date('l', strtotime($data_tanggal));
                                                            $tanggal = date('d F Y', strtotime($data_tanggal));
                                                            echo $daftar_hari[$hari] . ", " . $tanggal;
                                                            ?>

                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->

        <!--====== Jadwal Area Start ======-->
        <section class="review-area bg-gray ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-12">

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-3" id="dataTable" width="100%"
                                        cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Kegiatan</th>
                                                <th>Tempat Pelaksanaan</th>
                                                <th>Waktu Pelaksanaan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?= $detail_hari[0]['nama_detail_hari_integer'] ?></td>
                                                <td><?= $detail_hari[0]['tempat_detail_hari_integer'] ?></td>
                                                <td><?= $detail_hari[0]['waktu_mulai'] ?> -
                                                    <?= $detail_hari[0]['waktu_mulai'] ?> WITA</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!--====== Jadwal Area End ======-->

        <!--====== Height Emulator Area Start ======-->
        <div class="height-emulator d-none d-lg-block"></div>
        <!--====== Height Emulator Area End ======-->