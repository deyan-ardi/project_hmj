<?php if (!empty($selectedBerkas)) { ?>

	<!-- Begin Page Content -->
	<div class="container-fluid">
		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800">Edit Detail Berkas HMJ TI</h1>
		<p class="mb-4">Untuk mengedit informasi detail berkas HMJ TI, silahkan mengubah pada form berikut</p>
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
							<li>Semua form wajib diisi</li>
							<li>Berkas wajib dalam format *.pdf dan memiliki ukuran maksimal 10 Mb</li>
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
				<h6 class="m-0 font-weight-bold text-primary">Form Edit Detail Berkas</h6>
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
													<select name="id_kategori_berkas" id="id_kategori_berkas" class="form-control form-control-select" aria-describedby="emailHelp" aria-placeholder="Masukkan Bidang HMJ">
														<option value="">Masukkan Kategori</option>
														<?php foreach ($kategoriBerkass as $kategoriBerkas) : ?>
															<?php if ($selectedBerkas[0]['id_kegiatan_hmj'] == $kategoriBerkas['id_kegiatan_hmj']) { ?>
																<option value="<?= $kategoriBerkas['id_kegiatan_hmj'] ?>" selected><?= $kategoriBerkas['nama_kegiatan'] ?></option>
															<?php } else { ?>
																<option value="<?= $kategoriBerkas['id_kegiatan_hmj'] ?>"><?= $kategoriBerkas['nama_kegiatan'] ?></option>
															<?php } ?>
														<?php endforeach; ?>
													</select>
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
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Berkas (*.pdf maks 10 Mb)</div>
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
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nama Berkas</div>
													<input type="text" class="form-control form-control-user" id="nama_berkas" aria-describedby="Berkas" placeholder="Masukkan Nama Berkas HMJ" name="nama_berkas" value="<?= $selectedBerkas[0]['nama_repositori'] ?>">
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
													<textarea type="text" id="bidang" rows="5" name="deskripsi_detail"><?= $selectedBerkas[0]['deskripsi_repositori'] ?></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<input type="hidden" class="form-control form-control-user" id="create_by" name="create_by" value="<?= ucfirst($namaUser[0]['first_name']); ?>  ?>">
							<input type="hidden" class="form-control form-control-user" id="old_berkas" name="old_berkas" value="<?= $selectedBerkas[0]['kode_repositori'] ?>">
							<button type="submit" class="btn btn-primary btn-user btn-block">Ubah Data</button>
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
