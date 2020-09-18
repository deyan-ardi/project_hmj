 <!-- Begin Page Content -->
 <div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800">Manajemen Kegiatan EORS</h1>
     <p class="mb-4">Silahkan atur informasi terkait open recruitment pada halaman ini</p>
     <!-- Kepengurusan -->
     <div class="accordion" id="ManajemenEors">
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#kegiatan" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="kegiatan">
                 <h6 class="m-0 font-weight-bold text-primary">Data Kegiatan Open Recruitment</h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse" id="kegiatan" data-parent="#ManajemenEors">
                 <div class="card-body">
                     <a href="<?= base_url() ?>integer/tambah_kegiatan"
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
                                     <th>Nama Kegiatan</th>
                                     <th>Deskripsi</th>
                                     <th>Persyaratan</th>
                                     <th>Tgl Mulai</th>
                                     <th>Tgl Akhir</th>
                                     <th>Target Pendaftar</th>
                                     <th>Jumlah Pendaftar</th>
                                     <th>Manajemen Kegiatan</th>
                                     <th>Dibuat Oleh</th>
                                     <th>Dibuat Tanggal</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>1</td>
                                     <td>Panitia OKJ</td>
                                     <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus commodi,
                                         voluptate quaerat iure quidem expedita eos a blanditiis sint modi est error
                                         veniam facere eum at doloribus amet, nobis ut.</td>
                                     <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus commodi,
                                         voluptate quaerat iure quidem expedita eos a blanditiis sint modi est error
                                         veniam facere eum at doloribus amet, nobis ut.</td>
                                     <td>12 September 2020</td>
                                     <td>14 September 2020</td>
                                     <td>100 Orang</td>
                                     <td>90 Orang</td>
                                     <td> <a href="<?= base_url() ?>eors/administrator/nama_kegiatan"
                                             class="btn btn-primary btn-sm btn-icon-split mb-4">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-globe"></i>
                                             </span>
                                             <span class="text">Administrator</span>
                                         </a>
                                     </td>
                                     <td>Deyan</td>
                                     <td>2011/04/25</td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
         <?php if ($group[0]['group_id'] == "1") { ?>
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#setting" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="setting">
                 <h6 class="m-0 font-weight-bold text-primary">Data Pengaturan Kegiatan</h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse" id="setting" data-parent="#ManajemenEors">
                 <div class="card-body">
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableKepengurusan" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Status Aktif</th>
                                     <th>Nama Kegiatan</th>
                                     <th>Data Pribadi</th>
                                     <th>Data Pendidikan</th>
                                     <th>Wawancara</th>
                                     <th>File</th>
                                     <th>Penilaian</th>
                                     <th>Hasil Akhir</th>
                                     <th>Fitur</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>1</td>
                                     <td>
                                         <a href="#" class="btn btn-success btn-sm btn-icon-split mb-4">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-check"></i>
                                             </span>
                                             <span class="text">Aktif</span>
                                         </a>
                                     </td>
                                     <td>Panitia OKJ</td>
                                     <td>
                                         <a href="#" class="btn btn-success btn-sm btn-icon-split mb-4">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-cog"></i>
                                             </span>
                                             <span class="text">Sertakan</span>
                                         </a>
                                     </td>
                                     <td>
                                         <a href="#" class="btn btn-success btn-sm btn-icon-split mb-4">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-cog"></i>
                                             </span>
                                             <span class="text">Sertakan</span>
                                         </a>
                                     </td>
                                     <td>
                                         <a href="#" class="btn btn-success btn-sm btn-icon-split mb-4">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-cog"></i>
                                             </span>
                                             <span class="text">Sertakan</span>
                                         </a>
                                     </td>
                                     <td>
                                         <a href="#" class="btn btn-success btn-sm btn-icon-split mb-4">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-cog"></i>
                                             </span>
                                             <span class="text">Sertakan</span>
                                         </a>
                                     </td>
                                     <td>
                                         <a href="#" class="btn btn-success btn-sm btn-icon-split mb-4">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-check"></i>
                                             </span>
                                             <span class="text">Aktif</span>
                                         </a>
                                     </td>
                                     <td>
                                         <a href="#" class="btn btn-success btn-sm btn-icon-split mb-4">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-check"></i>
                                             </span>
                                             <span class="text">Aktif</span>
                                         </a>
                                     </td>
                                     <td>
                                         <a href="#" class="btn btn-danger btn-sm btn-icon-split">
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
         <?php } ?>
     </div>
 </div>