 <!-- Begin Page Content -->
 <div class="container-fluid">
 	<!-- Page Heading -->
 	<h1 class="h3 mb-2 text-gray-800">Manajemen Lomba Integer</h1>
 	<p class="mb-4">Untuk mengupload masing-masing link lomba, silahkan membuat form lomba dengan bantuan Google Docs.</p>
	 <!-- Kepengurusan -->
	 <div class="accordion" id="ManajemenLomba">
 	<div class="card shadow mb-4">
 		<!-- Card Header - Accordion -->
 		<a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="kepengurusan">
 			<h6 class="m-0 font-weight-bold text-primary">Data Lomba Integer</h6>
 		</a>
 		<!-- Card Content - Collapse -->
 		<div class="collapse" id="kepengurusan"  data-parent="#ManajemenLomba">
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
 								<th>Nama Lomba</th>
 								<th>Deskripsi</th>
 								<th>Tanggal Lomba</th>
 								<th>Link Pendaftaran</th>
 								<th>Poster</th>
 								<th>Dibuat Oleh</th>
 								<th>Dibuat Tanggal</th>
 								<th>Fitur</th>
 							</tr>
 						</thead>
 						<tbody>
 							<tr>
 								<td>Lomba Musik Kolaborasi</td>
 								<td>Lomba ini bertempat di Undiksha</td>
 								<td>2011/04/25</td>
 								<td><a href="if.undiksha.ac.id">if.undiksha.ac.id</a></td>
 								<td><img src="gambar.jpg" alt="gambar"></td>
 								<td>Deyan</td>
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