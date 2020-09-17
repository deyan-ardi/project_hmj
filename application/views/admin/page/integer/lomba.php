 <!-- Begin Page Content -->
 <div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800">Manajemen Lomba Integer</h1>
     <p class="mb-4">Untuk mengupload masing-masing link lomba, silahkan membuat form lomba dengan bantuan Google Docs.
     </p>
     <!-- Kepengurusan -->
     <div class="accordion" id="ManajemenLomba">
         <!-- Jadwal Kegiatan -->
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#jadwal" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="jadwal">
                 <h6 class="m-0 font-weight-bold text-primary">Lomba Integer</h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse" id="jadwal" data-parent="#ManajemenLomba">
                 <div class="card-body">
                     <!-- Kategori Lomba -->
                     <h6 class="m-0 font-weight-bold text-primary mb-4">Data Kategori Lomba</h6>
                     <a href="<?= base_url() ?>integer/tambah_kategori_lomba"
                         class="btn btn-primary btn-sm btn-icon-split mb-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-flag"></i>
                         </span>
                         <span class="text">Tambah Data</span>
                     </a>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableKategori" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>Icon Kategori</th>
                                     <th>Nama Kategori Lomba</th>
                                     <th>Deskripsi Kategori</th>
                                     <th>Dibuat Oleh</th>
                                     <th>Dibuat Tanggal</th>
                                     <?php if ($group[0]['group_id'] == "1") { ?>
                                     <th>Fitur</th>
                                     <?php } ?>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>Icon Maskot</td>
                                     <td>Lomba Game</td>
                                     <td>Apa itu lomba game, persyaratannya apa, pembagian lombanya apa aja</td>
                                     <td>Deyan</td>
                                     <td>2011/04/25</td>
                                     <?php if ($group[0]['group_id'] == "1") { ?>
                                     <td>
                                         <a href="#" class="btn btn-danger btn-sm btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-trash"></i>
                                             </span>
                                             <span class="text">Delete</span>
                                         </a>

                                     </td>
                                     <?php } ?>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                     <!-- Lomba -->
                     <hr>
                     <h6 class="m-0 font-weight-bold text-primary">Data Lomba</h6>
                     <a href="<?= base_url() ?>integer/tambah_lomba"
                         class="btn btn-primary btn-sm btn-icon-split mb-4 mt-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-flag"></i>
                         </span>
                         <span class="text">Tambah Data</span>
                     </a>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableLomba" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>Nama Kategori Lomba</th>
                                     <th>Icon Lomba</th>
                                     <th>Nama Lomba</th>
                                     <th>Deskripsi Lomba</th>
                                     <th>Link Pendaftaran</th>
                                     <th>Dibuat Oleh</th>
                                     <th>Dibuat Tanggal</th>
                                     <th>Fitur</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>Lomba Game</td>
                                     <td>Icon Maskot</td>
                                     <td>Game Mobile Legends</td>
                                     <td>Informasi Umum,Persyaratan,Biaya Pendaftaran</td>
                                     <td>ini link</td>
                                     <td>Deyan</td>
                                     <td>12 April 2020</td>
                                     <td> <?php if ($group[0]['group_id'] == "1" || $group[0]['group_id'] == "2") { ?>
                                         <a href="#" class="btn btn-danger btn-sm btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-trash"></i>
                                             </span>
                                             <span class="text">Delete</span>
                                         </a>
                                         <?php } ?>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Jadwal Kegiatan -->
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#peserta" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="peserta">
                 <h6 class="m-0 font-weight-bold text-primary">Data Berita Integer</h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse" id="peserta" data-parent="#ManajemenLomba">
                 <div class="card-body">
                     <!-- Hari -->
                     <a href="<?= base_url() ?>integer/tambah_informasi"
                         class="btn btn-primary btn-sm btn-icon-split mb-4 mt-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-flag"></i>
                         </span>
                         <span class="text">Tambah Data</span>
                     </a>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableInformasi" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>Upload Pada</th>
                                     <th>Kategori Informasi</th>
                                     <th>Tampilan Informasi</th>
                                     <th>File Informasi</th>
                                     <th>Dibuat Oleh</th>
                                     <th>Fitur</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>Jam Wita</td>
                                     <td>Kategori Informasinya Apa</td>
                                     <td>
                                         <a href="<?= base_url() ?>integer/detail_informasi/"
                                             class="btn btn-primary btn-sm btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-eye"></i>
                                             </span>
                                             <span class="text">Lihat</span>
                                         </a>
                                     </td>
                                     <td>
                                         Ada File

                                     </td>
                                     <td>Deyan</td>
                                     <td>
                                         <a href="<?= base_url() ?>web/hapus_data_informasi/"
                                             class="btn btn-danger btn-sm btn-icon-split tombol-hapus">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-trash"></i>
                                             </span>
                                             <span class="text">Delete</span>
                                         </a>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>