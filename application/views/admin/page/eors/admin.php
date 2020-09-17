 <!-- Begin Page Content -->
 <div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800">Administrator Open Recruitment Panitia OKJ</h1>
     <p class="mb-4">Berikut merupakan beberapa fitur yang dapat digunakan</p>
     <!-- Kepengurusan -->
     <div class="accordion" id="ManajemenEors">
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
                     <a href="<?= base_url() ?>integer/tambah_kegiatan"
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
                                 <tr>
                                     <td>1</td>
                                     <td>1815091037</td>
                                     <td>Deyan</td>
                                     <td>Sistem Informasi</td>
                                     <td>Belum Wawancara</td>
                                     <td>Sie Pubdok</td>
                                     <td>2011/04/25</td>
                                     <?php if ($group[0]['group_id'] == "1") { ?>
                                     <td>
                                         <a href="<?= base_url() ?>eors/detail_pendaftar/nama_kegiatan/pendaftar"
                                             class="btn btn-primary btn-sm btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-eye"></i>
                                             </span>
                                             <span class="text">Detail</span>
                                         </a>
                                         <a href="#" class="btn btn-danger btn-sm mt-2 btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-trash"></i>
                                             </span>
                                             <span class="text">Delete</span>
                                         </a>

                                     </td>
                                     <?php } else { ?>
                                     <td>
                                         <a href="<?= base_url() ?>eors/detail_pendaftar/nama_kegiatan/pendaftar"
                                             class="btn btn-primary btn-sm btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-eye"></i>
                                             </span>
                                             <span class="text">Detail</span>
                                         </a>
                                     </td>
                                     <?php } ?>
                                 </tr>
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