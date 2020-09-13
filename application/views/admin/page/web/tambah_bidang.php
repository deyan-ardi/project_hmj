<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Tambah Informasi Bidang "<?= $kepengurusan[0]['nama_hmj'] ?>"</h1>
	<p class="mb-4">Untuk menambah informasi bidang HMJ TI, silahkan isi form berikut</p>
	<!-- Kepengurusan -->
	<?php if ($this->session->flashdata('gagal')) : ?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data <strong>Gagal</strong> <?= $this->session->flashdata('gagal'); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif; ?>
	<?php if (validation_errors()) : ?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<?= validation_errors(); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif; ?>
	<div class="modal fade" id="modalInfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Petunjuk Penggunaan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<ul>
						<li>Semua form bersifat wajib diisi</li>
						<li>Nama Bidang tidak diperkenankan sama dengan Nama Bidang yang ada pada kepengurusan aktif</li>
						<li>Deskripsi bidang maksimal berisi 800 kata</li>
						<li>Ukuran foto koordinator bidang harus berasio 1:1 agar tampilan jadi lebih baik</li>
					</ul>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card shadow mb-4">
		<!-- Card Header - Accordion -->
		<a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="kepengurusan">
			<h6 class="m-0 font-weight-bold text-primary">Form Tambah Informasi Bidang Kepengurusan "<?= $kepengurusan[0]['nama_hmj'] ?>"</h6>
		</a>
		<!-- Card Content - Collapse -->
		<div class="collapse show" id="kepengurusan">
			<div class="card-body row justify-content-center">
				<div class="col-lg-6 col-md-8">
					<form class="user" action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<div class="col-lg-12 mb-3">
								<div class="card border-left-primary shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nama Bidang</div>
												<input type="text" class="form-control form-control-user" id="nama_bidang" aria-describedby="bidang" placeholder="Masukkan Nama Bidang HMJ" name="nama_bidang">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12 mb-3">
								<div class="card border-left-primary shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">

											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Deskripsi Bidang</div>
												<textarea type="text" id="bidang" rows="5" name="deskripsi_bidang"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12 mb-3">
								<div class="card border-left-primary shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Foto Koordinator (*.jpg, *.png maks 1Mb)</div>
												<input type="file" class="form-control form-control-user" id="file" name="file">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12 mb-3">
								<div class="card border-left-primary shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">

											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nama Koordinator Bidang</div>
												<input type="text" class="form-control form-control-user" id="nama_bidang" aria-describedby="bidang" placeholder="Masukkan Nama Koordinator Bidang HMJ" name="nama_koordinator">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<input type="hidden" id="kepengurusan" name="nama_kepengurusan" value="<?= $kepengurusan[0]['id_hmj'] ?>">
						<button type="submit" class="btn btn-primary btn-user btn-block">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
