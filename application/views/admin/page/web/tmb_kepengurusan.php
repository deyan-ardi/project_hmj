<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Tambah Data Kepengurusan HMJ TI</h1>
	<p class="mb-4">Untuk menambah informasi kepengurusan HMJ TI, silahkan tambahkan pada form berikut</p>
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
						<li>Pada bagian form Nama Kepengurusan, tidak diperbolehkan menggunakan karakter "/"</li>
						<li>File yang diperkenankan adalah bertipe *.jpg ataupun *.png dengan besar maksimal 1Mb</li>
						<li>Tidak diperkenankan menggunakan nama kepengurusan yang sama dengan nama kepengurusan yang sudah ada</li>
						<li>Anda tidak dapat mengubah data kepengurusan jika sudah di submit, pastikan data yang anda masukkan benar</li>
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
			<h6 class="m-0 font-weight-bold text-primary">Form Tambah Informasi Kepengurusan</h6>
		</a>
		<!-- Card Content - Collapse -->
		<div class="collapse show" id="kepengurusan">
			<div class="card-body row justify-content-center">
				<div class="col-lg-6 col-md-8">
					<form class="user" action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<div class="col-lg-12 mb-3">
								<div class="card border-left-primary shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nama Kepengurusan</div>
												<input type="text" class="form-control form-control-user" id="ketua" aria-describedby="kepengurusan" placeholder="Example : HMJ TI Undiksha 2020-2021" name="kepengurusan">
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
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Deskripsi Repositori HMJ</div>
												<textarea type="text" id="deskripsi_singkat" rows="5" name="deskripsi_singkat"></textarea>
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
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Foto Ketua HMJ (*.jpg, *.png maks 1Mb)</div>
												<input type="file" class="form-control form-control-user" id="foto_ketua" name="foto_ketua">
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
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nama Ketua HMJ</div>
												<input type="text" class="form-control form-control-user" id="ketua" aria-describedby="emailHelp" placeholder="Masukkan Nama Ketua HMJ" name="ketua">
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
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Foto Wakil Ketua HMJ(*.jpg *.png maks 1Mb)</div>
												<input type="file" class="form-control form-control-user" id="foto_wakil" name="foto_wakil">
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
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nama Wakil Ketua HMJ</div>
												<input type="text" class="form-control form-control-user" id="wakil" aria-describedby="emailHelp" placeholder="Masukkan Nama Wakil HMJ" name="wakil">
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
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Visi HMJ TI</div>
												<textarea type="text" id="visi" rows="5" name="visi"></textarea>
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
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Misi HMJ TI</div>
												<textarea type="text" id="misi" rows="5" name="misi"></textarea>
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
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Struktur Organisasi Landscape (Desktop)(*.jpg, *.png maks 1Mb)</div>
												<input type="file" class="form-control form-control-user" id="foto_landscape" name="foto_landscape">
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
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Struktur Organisasi Vertikal (Mobile)(*.jpg, *.png maks 1Mb)</div>
												<input type="file" class="form-control form-control-user" id="foto_vertikal" name="foto_vertikal">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<input type="hidden" class="form-control form-control-user" id="create_by" name="create_by" value="<?= ucfirst($group[0]['first_name']); ?>">
						<button type="submit" class="btn btn-primary btn-user btn-block">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
