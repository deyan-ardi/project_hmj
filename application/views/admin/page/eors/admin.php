 <!-- Begin Page Content -->
 <div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800">Administrator Open Recruitment <?= $id_halaman ?></h1>
     <p class="mb-4">Berikut merupakan beberapa fitur yang dapat digunakan</p>
     <!-- Kepengurusan -->
     <div class="accordion" id="ManajemenEors">
         <?php if ($group[0]['group_id'] == "1") { ?>
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#kepanitiaan" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="kepanitiaan">
                 <h6 class="m-0 font-weight-bold text-primary">Sie Yang Tersedia</h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse" id="kepanitiaan" data-parent="#ManajemenEors">
                 <div class="card-body">
                     <a href="<?= base_url() ?>eors/tambah_sie/<?= $id_halaman ?>"
                         class="btn btn-primary btn-sm btn-icon-split mb-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-flag"></i>
                         </span>
                         <span class="text">Tambah Data</span>
                     </a>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableKegiatan" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Nama Sie</th>
                                     <th>Fitur</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                        $i = 1;
                                        foreach ($sie as $data) { ?>
                                 <tr>
                                     <td><?= $i++ ?></td>
                                     <td><?= $data['nama_pilihan'] ?></td>
                                     <td>
                                         <a href="<?= base_url() ?>eors/hapus_sie/<?= $id_halaman ?>/<?= $data['id_pilihan'] ?>/<?= $data['id_jabatan'] ?>"
                                             class="btn btn-danger btn-sm mt-2 btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-trash"></i>
                                             </span>
                                             <span class="text">Delete</span>
                                         </a>
                                     </td>
                                 </tr>
                                 <?php } ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
         <?php } ?>
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#administrator" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="administrator">
                 <h6 class="m-0 font-weight-bold text-primary">Data Peserta</h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse" id="administrator" data-parent="#ManajemenEors">
                 <div class="card-body">
                     <?php if ($group[0]['group_id'] == "1") { ?>
                     <a href="<?= base_url() ?>eors/tambah_peserta/<?= $id_halaman ?>"
                         class="btn btn-primary btn-sm btn-icon-split mb-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-flag"></i>
                         </span>
                         <span class="text">Tambah Data</span>
                     </a>
                     <?php } ?>
                     <a href="<?= base_url() ?>integer/tambah_kegiatan"
                         class="btn btn-warning btn-sm btn-icon-split mb-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-print"></i>
                         </span>
                         <span class="text">Cetak Data</span>
                     </a>
                     <a href="<?= base_url() ?>integer/tambah_kegiatan"
                         class="btn btn-success btn-sm btn-icon-split mb-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-download"></i>
                         </span>
                         <span class="text">Unduh Data</span>
                     </a>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableKegiatan" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Nim</th>
                                     <th>Nama Pendaftar</th>
                                     <th>Program Studi</th>
                                     <th>Status Wawancara</th>
                                     <th>Diterima di</th>
                                     <th>Tanggal Mendaftar</th>
                                     <th>Fitur</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $i = 1;
                                    foreach ($pendaftar as $data) {
                                    ?>
                                 <tr>
                                     <td><?= $i++ ?></td>
                                     <td><?= $data['nim'] ?></td>
                                     <td><?= $data['nama_lengkap'] ?></td>
                                     <td><?= $data['prodi'] ?></td>
                                     <?php if ($data['ket_wawancara'] == 0) { ?>
                                     <td>Belum Wawancara</td>
                                     <?php } else { ?>
                                     <td>Sudah Wawancara</td>
                                     <?php } ?>
                                     <?php if ($data['diterima_di'] == "Belum Ada") { ?>
                                     <td>Belum Ada</td>
                                     <?php } else { ?>
                                     <td><?= $data['diterima_di'] ?></td>
                                     <?php } ?>
                                     <td>2011/04/25</td>
                                     <?php if ($group[0]['group_id'] == "1") { ?>
                                     <td>
                                         <a href="<?= base_url() ?>eors/detail_pendaftar/<?= $id_halaman ?>/<?= $data['id_informasi'] ?>"
                                             class="btn btn-primary btn-sm btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-eye"></i>
                                             </span>
                                             <span class="text">Detail</span>
                                         </a>
                                         <a href="<?= base_url() ?>eors/hapus_pendaftar/<?= $id_halaman ?>/<?= $data['id_informasi'] ?>"
                                             class="btn btn-danger btn-sm mt-2 btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-trash"></i>
                                             </span>
                                             <span class="text">Delete</span>
                                         </a>

                                     </td>
                                     <?php } else { ?>
                                     <td>
                                         <a href="<?= base_url() ?>eors/detail_pendaftar/<?= $id_halaman ?>/<?= $data['id_informasi'] ?>"
                                             class="btn btn-primary btn-sm btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-eye"></i>
                                             </span>
                                             <span class="text">Detail</span>
                                         </a>
                                     </td>
                                     <?php } ?>
                                 </tr>
                                 <?php } ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#live" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true"
                 aria-controls="live">
                 <h6 class="m-0 font-weight-bold text-primary">Live Count Open Recruitment</h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse" id="live" data-parent="#ManajemenEors">
                 <div class="card-body">

                 </div>
             </div>
         </div>

     </div>
 </div>