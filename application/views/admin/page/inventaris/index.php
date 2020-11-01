 <!-- Begin Page Content -->
 <div class="container-fluid">
 	<!-- Page Heading -->
 	<h1 class="h3 mb-2 text-gray-800">Manajemen Organisasi Inventaris HMJ TI</h1>
 	<p class="mb-4">Berikut merupakan informasi organisasi yang telah terdaftar meminjam inventaris HMJ TI Undiksha</p>
	 <!-- Kepengurusan -->
	<div class="accordion" id="ManajemenOrganisasi">
 	<div class="card shadow mb-4">
 		<!-- Card Header - Accordion -->
 		<a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="kepengurusan">
 			<h6 class="m-0 font-weight-bold text-primary">Data Organisasi</h6>
 		</a>
 		<!-- Card Content - Collapse -->
 		<div class="collapse" id="kepengurusan" data-parent="#ManajemenOrganisasi">
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
	 </div>
