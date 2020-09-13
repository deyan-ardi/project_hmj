 <!-- Begin Page Content -->
 <div class="container-fluid">
 	<!-- Page Heading -->
 	<h1 class="h3 mb-2 text-gray-800">Manajemen Peminjaman Inventaris HMJ TI </h1>
 	<p class="mb-4">Untuk mengupload masing-masing berkas berdasarkan kategori dan kepengurusan HMJ, Pastikan bagian
 		kepengurusan HMJ dan Kategori Berkas telah terisi</p>
	 <!-- Kepengurusan -->
	<div class="accordion" id="ManajemenPeminjaman">
 	<div class="card shadow mb-4">
 		<!-- Card Header - Accordion -->
 		<a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="kepengurusan">
 			<h6 class="m-0 font-weight-bold text-primary">Data Inventaris HMJ TI</h6>
 		</a>
 		<!-- Card Content - Collapse -->
 		<div class="collapse" id="kepengurusan" data-parent="#ManajemenPeminjaman">
 			<div class="card-body">
 				<a href="#" class="btn btn-primary btn-sm btn-icon-split mb-4">
 					<span class="icon text-white-50">
 						<i class="fas fa-flag"></i>
 					</span>
 					<span class="text">Tambah Data</span>
 				</a>
 				<div class="table-responsive">
 					<table class="table table-bordered" id="tableKepengurusan" width="100%" cellspacing="0">
 						<thead>
 							<tr>
 								<th>Nama Kepengurusan</th>
 								<th>Deskripsi</th>
 								<th>Dibuat Oleh</th>
 								<th>Dibuat Tanggal</th>
 								<th>Fitur</th>
 							</tr>
 						</thead>
 						<tbody>
 							<tr>
 								<td>HMJ TI Undiksha 2021/2022</td>
 								<td>Repository ini digunakan untuk menyimpan dokumen HMJ TI Undiksha 2021/2022</td>
 								<td>Edinburgh</td>
 								<td>2011/04/25</td>
 								<td> <?php if ($group[0]['group_id'] == "1") { ?>
 										<a href="#" class="btn btn-danger btn-sm btn-icon-split">
 											<span class="icon text-white-50">
 												<i class="fas fa-trash"></i>
 											</span>
 											<span class="text">Delete</span>
 										</a>
 									<?php } else { ?>
 										<a href="#" class="btn btn-warning btn-sm btn-icon-split">
 											<span class="icon text-white-50">
 												<i class="fas fa-exclamation-triangle"></i>
 											</span>
 											<span class="text">Update</span>
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
 	<!-- Kategori Berkas -->
 	<div class="card shadow mb-4">
 		<!-- Card Header - Accordion -->
 		<a href="#kategori_berkas" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="kategori_berkas">
 			<h6 class="m-0 font-weight-bold text-primary">Data Kategori Berkas</h6>
 		</a>
 		<!-- Card Content - Collapse -->
 		<div class="collapse" id="kategori_berkas" data-parent="#ManajemenPeminjaman">
 			<div class="card-body">
 				<a href="#" class="btn btn-primary btn-sm btn-icon-split mb-4">
 					<span class="icon text-white-50">
 						<i class="fas fa-flag"></i>
 					</span>
 					<span class="text">Tambah Data</span>
 				</a>
 				<div class="table-responsive">
 					<table class="table table-bordered" id="tableKepengurusan" width="100%" cellspacing="0">
 						<thead>
 							<tr>
 								<th>Kepengurusan</th>
 								<th>Nama Kategori</th>
 								<th>Deskripsi</th>
 								<th>Dibuat Oleh</th>
 								<th>Dibuat Tanggal</th>
 								<th>Fitur</th>
 							</tr>
 						</thead>
 						<tbody>
 							<tr>
 								<td>HMJ TI Undiksha 2020/2021</td>
 								<td>IT Mission</td>
 								<td>IT Mission dilaksanakan pada tanggal 28 Juni 2020</td>
 								<td>Edinburgh</td>
 								<td>2011/04/25</td>
 								<td> <?php if ($group[0]['group_id'] == "1") { ?>
 										<a href="#" class="btn btn-danger btn-sm btn-icon-split">
 											<span class="icon text-white-50">
 												<i class="fas fa-trash"></i>
 											</span>
 											<span class="text">Delete</span>
 										</a>
 									<?php } else { ?>
 										<a href="#" class="btn btn-warning btn-sm btn-icon-split">
 											<span class="icon text-white-50">
 												<i class="fas fa-exclamation-triangle"></i>
 											</span>
 											<span class="text">Update</span>
 										</a>
 									<?php } ?>
 								</td>
 							</tr>
 							<tr>
 								<td>HMJ TI Undiksha 2020/2021</td>
 								<td>TI Peduli Sesama</td>
 								<td>Kegiatan ini dilaksanakan sewaktu-waktu</td>
 								<td>Edinburgh</td>
 								<td>2011/04/25</td>
 								<td>
 									<?php if ($group[0]['group_id'] == "1") { ?>
 										<a href="#" class="btn btn-danger btn-sm btn-icon-split">
 											<span class="icon text-white-50">
 												<i class="fas fa-trash"></i>
 											</span>
 											<span class="text">Delete</span>
 										</a>
 									<?php } else { ?>
 										<a href="#" class="btn btn-warning btn-sm btn-icon-split">
 											<span class="icon text-white-50">
 												<i class="fas fa-exclamation-triangle"></i>
 											</span>
 											<span class="text">Update</span>
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
 	<!-- Detail Kategori Berkas -->
 	<div class="card shadow mb-4">
 		<!-- Card Header - Accordion -->
 		<a href="#detail_berkas" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="detail_berkas">
 			<h6 class="m-0 font-weight-bold text-primary">Datail Berkas</h6>
 		</a>
 		<!-- Card Content - Collapse -->
 		<div class="collapse" id="detail_berkas" data-parent="#ManajemenPeminjaman">
 			<div class="card-body">
 				<a href="#" class="btn btn-primary btn-sm btn-icon-split mb-4">
 					<span class="icon text-white-50">
 						<i class="fas fa-flag"></i>
 					</span>
 					<span class="text">Tambah Data</span>
 				</a>
 				<div class="table-responsive">
 					<table class="table table-bordered" id="tableKepengurusan" width="100%" cellspacing="0">
 						<thead>
 							<tr>
 								<th>Kategori</th>
 								<th>Nama Berkas</th>
 								<th>Deskripsi</th>
 								<th>Link Buku</th>
 								<th>Dibuat Oleh</th>
 								<th>Dibuat Tanggal</th>
 								<th>Update</th>
 								<th>Delete</th>
 							</tr>
 						</thead>
 						<tbody>
 							<tr>
 								<td>IT Mission</td>
 								<td>LPJ</td>
 								<td>LPJ sudah disahkan oleh bu joni</td>
 								<td><a href="testing">ini testing buku</a></td>
 								<td>Edinburgh</td>
 								<td>2011/04/25</td>
 								<td> <a href="#" class="btn btn-warning btn-sm btn-icon-split">
 										<span class="icon text-white-50">
 											<i class="fas fa-exclamation-triangle"></i>
 										</span>
 										<span class="text">Update</span>
 									</a>
 								</td>
 								<td> <a href="#" class="btn btn-danger btn-sm btn-icon-split">
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