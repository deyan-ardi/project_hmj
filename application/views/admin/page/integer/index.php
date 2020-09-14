 <!-- Begin Page Content -->
 <div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800">Manajemen Kegiatan Integer</h1>
     <p class="mb-4">Silahkan atur informasi terkait kegiatan Integer, informasi yang diinputkan pada laman ini akan
         ditampilkan pada halaman Guest</p>
     <!-- Kepengurusan -->
     <div class="accordion" id="ManajemenInteger">
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#kegiatan" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="kegiatan">
                 <h6 class="m-0 font-weight-bold text-primary">Data Kegiatan Integer</h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse" id="kegiatan" data-parent="#ManajemenInteger">
                 <div class="card-body">
                     <a href="#" class="btn btn-primary btn-sm btn-icon-split mb-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-flag"></i>
                         </span>
                         <span class="text">Tambah Data</span>
                     </a>
                     <a href="#" class="btn btn-warning btn-sm btn-icon-split mb-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-check"></i>
                         </span>
                         <span class="text">Sinkronasi Data</span>
                     </a>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableKegiatan" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>Status Aktif</th>
                                     <th>Nama Kegiatan</th>
                                     <th>Logo Kegiatan</th>
                                     <th>Video Header</th>
                                     <th>Tema Kegiatan</th>
                                     <th>Deskripsi Singkat</th>
                                     <th>Dibuat Oleh</th>
                                     <th>Dibuat Tanggal</th>
                                     <?php if ($group[0]['group_id'] == "1") { ?>
                                     <th>Fitur</th>
                                     <?php } ?>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>
                                         <a href="#" class="btn btn-success btn-sm btn-icon-split mb-4">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-check"></i>
                                             </span>
                                             <span class="text">Aktif</span>
                                         </a>
                                     </td>
                                     <td>INTEGER #2</td>
                                     <td>Logo Kegiatan</td>
                                     <td>Video</td>
                                     <td>Be Bright with Techonology </td>
                                     <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus commodi,
                                         voluptate quaerat iure quidem expedita eos a blanditiis sint modi est error
                                         veniam facere eum at doloribus amet, nobis ut.</td>
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
                 </div>
             </div>
         </div>
         <!-- Sponsor -->
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#sponsor" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="sponsor">
                 <h6 class="m-0 font-weight-bold text-primary">Data Sponsor Integer</h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse" id="sponsor" data-parent="#ManajemenInteger">
                 <div class="card-body">
                     <a href="#" class="btn btn-primary btn-sm btn-icon-split mb-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-flag"></i>
                         </span>
                         <span class="text">Tambah Data</span>
                     </a>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableSponsor" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>Nama Sponsor</th>
                                     <th>Deskripsi Sponsor</th>
                                     <th>Logo Sponsor</th>
                                     <th>Dibuat Oleh</th>
                                     <th>Dibuat Tanggal</th>
                                     <th>Fitur</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>Coca Cola</td>
                                     <td>Coca-cola membantu menyumbangkan 10 tenda dan 1 stand makanan</td>
                                     <td style="text-align: center;"> <img
                                             src="https://www.coca-cola.co.id/content/dam/brands/id/coca-cola/id/images/cq5dam.thumbnail.319.319.png"
                                             alt="" width="50px"></td>
                                     <td>Deyan</td>
                                     <td>2011/04/25</td>
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
             <a href="#jadwal" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="jadwal">
                 <h6 class="m-0 font-weight-bold text-primary">Data Jadwal Acara</h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse" id="jadwal" data-parent="#ManajemenInteger">
                 <div class="card-body">
                     <!-- Hari -->
                     <a href="#" class="btn btn-primary btn-sm btn-icon-split mb-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-flag"></i>
                         </span>
                         <span class="text">Tambah Data</span>
                     </a>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableHari" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>Nama Hari</th>
                                     <th>Dibuat Oleh</th>
                                     <th>Dibuat Tanggal</th>
                                     <?php if ($group[0]['group_id'] == "1") { ?>
                                     <th>Fitur</th>
                                     <?php } ?>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>Senin, 12 Maret 2020</td>
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
                     <!-- Kegiatan Perhari -->
                     <a href="#" class="btn btn-primary btn-sm btn-icon-split mb-4 mt-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-flag"></i>
                         </span>
                         <span class="text">Tambah Data</span>
                     </a>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableJadwalHari" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>Nama Hari</th>
                                     <th>Nama Kegiatan</th>
                                     <th>Waktu</th>
                                     <th>Tempat Pelaksanaan</th>
                                     <th>Dibuat Oleh</th>
                                     <th>Dibuat Tanggal</th>
                                     <th>Fitur</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>Senin, 12 Maret 2020</td>
                                     <td>Megibung</td>
                                     <td>12.00 - 13.00 WITA</td>
                                     <td>Monumen Bajra Sandhi Denpasar</td>
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
     </div>
 </div>