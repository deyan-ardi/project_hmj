<?php if (!empty($kategoriBerkas)) { ?>

	<!-- Begin Page Content -->
	<div class="container-fluid">
		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800">Edit Data Kategori Berkas HMJ TI</h1>
		<p class="mb-4">Untuk mengubah informasi kategori berkas HMJ TI, silahkan mengedit pada form berikut</p>
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
							<li>Silahkan ubah sesuai keperluan</li>
							<li>Tidak diperkenankan menggunakan nama kegiatan yang sama dengan nama kegiatan yang sudah ada di kepengurusan aktif</li>
							<li>Form deskripsi maksimal 800 kata</li>
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
				<h6 class="m-0 font-weight-bold text-primary">Form Edit Kategori Berkas</h6>
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
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nama Kategori</div>
													<input type="text" class="form-control form-control-user" id="kategori" aria-describedby="kategori" placeholder="Masukkan Nama Kategori HMJ" name="kategori" value="<?= $kategoriBerkas[0]['nama_kegiatan']; ?>">
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
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Deskripsi</div>
													<textarea type="text" id="bidang" rows="5" name="deskripsi_kategori"><?= $kategoriBerkas[0]['deskripsi_kegiatan']; ?></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<input type="hidden" class="form-control form-control-user" id="create_by" name="create_by" value="<?= ucfirst($namaUser[0]['first_name']); ?>">
							<input type="hidden" class="form-control form-control-user" id="id_kegiatan_hmj" name="id_kegiatan_hmj" value="<?= $kategoriBerkas[0]['id_kegiatan_hmj']; ?>">
							<button type="submit" class="btn btn-primary btn-user btn-block">Edit Data</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } else { ?>
	<div class="p mb-0 text-gray-500 text-center">
		<i>Oopss ... Data Parameter Tidak Ditemukan !!</i>
	</div>
<?php } ?>
