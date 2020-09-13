<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Tentang HMJ TI</h1>
	<p class="mb-4">Berikut informasi terkait HMJ TI, segala informasi di bawah akan digunakan pada Website HMJ TI. Anda dapat mengubahnya dengan menekan tombol Ubah</p>
	<!-- Kepengurusan -->
	<?php if ($this->session->flashdata('berhasil')) : ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data <strong>Berhasil</strong> <?= $this->session->flashdata('berhasil'); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif; ?>
	<?php if ($this->session->flashdata('gagal')) : ?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data <strong>Gagal</strong> <?= $this->session->flashdata('gagal'); ?>
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
						<li>Untuk mensinkronasikan data kepengurusan yang aktif sesuai yang diinginkan, silahkan pilih menu <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> lalu Sinkronasi Data</li>
						<li>Untuk menambah Bidang pada kepengurusan yang aktif, silahkan pilih menu <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> lalu Tambah Bidang</li>
						<li>Untuk mengubah ataupun menghapus Bidang yang telah dibuat pada kepengurusan yang aktif, silahkan pilih menu <i class="fas pl-2 fa-edit text-gray-400"></i> lalu Ubah Data / Hapus Data</li>

					</ul>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Informasi Umum Kepengurusan</h6>
			<div class="dropdown no-arrow">
				<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
					<div class="dropdown-header">Layanan Tersedia:</div>
					<a class="dropdown-item" href="<?= base_url() ?>web/edit_info" id="tombol-info">Sinkronasi Data</a>
					<a href="#kepengurusan" class="dropdown-item" id="card-header-option" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="kepengurusan">
						Atur Tampilan
					</a>
				</div>
			</div>
		</div>
		<!-- Card Header - Accordion -->

		<!-- Card Content - Collapse -->
		<div class="collapse show" id="kepengurusan">
			<div class="card-body row justify-content-center text-center">
				<div class="col-lg-6 col-md-8">
					<div class="col-lg-12 mb-3">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nama Kepengurusan</div>
										<?php if (!empty($select_kepengurusan)) { ?>
											<div class="p mb-0 font-weight-bold text-gray-800"><?= $select_kepengurusan[0]['nama_hmj'] ?></div>
										<?php } else { ?>
											<div class="p mb-0  text-gray-500">
												<i>Data Masih Kosong</i>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 mb-3">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Deskripsi Singkat HMJ</div>
										<?php if (!empty($select_kepengurusan)) { ?>
											<div class="p mb-0 font-weight-bold text-gray-800"><?= $select_kepengurusan[0]['deskripsi_hmj'] ?> </div>
										<?php } else { ?>
											<div class="p mb-0  text-gray-500">
												<i>Data Masih Kosong</i>
											</div>
										<?php } ?>

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 mb-3">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Foto Ketua HMJ</div>
										<div class="img-responsive">
											<?php if (!empty($select_kepengurusan)) { ?>
												<img src="<?= base_url() ?>assets/upload/Folder_<?= $select_kepengurusan[0]['nama_hmj'] ?>/<?= $select_kepengurusan[0]['ketua_foto'] ?>" alt="" width="400px">
											<?php } else { ?>
												<div class="p mb-0  text-gray-500">
													<i>Data Masih Kosong</i>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 mb-3">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nama Ketua HMJ</div>
										<?php if (!empty($select_kepengurusan)) { ?>
											<div class="p mb-0 font-weight-bold text-gray-800"><?= $select_kepengurusan[0]['ketua_hmj'] ?></div>
										<?php } else { ?>
											<div class="p mb-0  text-gray-500">
												<i>Data Masih Kosong</i>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 mb-3">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Foto Wakil Ketua HMJ</div>
										<div class="img-responsive">
											<?php if (!empty($select_kepengurusan)) { ?>
												<img src="<?= base_url() ?>assets/upload/Folder_<?= $select_kepengurusan[0]['nama_hmj'] ?>/<?= $select_kepengurusan[0]['wakil_foto'] ?>" alt="" width="400px">

											<?php } else { ?>
												<div class="p mb-0  text-gray-500">
													<i>Data Masih Kosong</i>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 mb-3">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nama Wakil Ketua HMJ</div>
										<?php if (!empty($select_kepengurusan)) { ?>
											<div class="p mb-0 font-weight-bold text-gray-800"><?= $select_kepengurusan[0]['wakil_hmj'] ?></div>

										<?php } else { ?>
											<div class="p mb-0  text-gray-500">
												<i>Data Masih Kosong</i>
											</div>
										<?php } ?>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 mb-3">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Visi HMJ TI</div>
										<?php if (!empty($select_kepengurusan)) { ?>
											<div class="p mb-0 font-weight-bold text-gray-800"><?= $select_kepengurusan[0]['visi_hmj'] ?></div>

										<?php } else { ?>
											<div class="p mb-0  text-gray-500">
												<i>Data Masih Kosong</i>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 mb-3">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Misi</div>
										<?php if (!empty($select_kepengurusan)) { ?>
											<div class="p mb-0 font-weight-bold text-gray-800">
												<?= $select_kepengurusan[0]['misi_hmj'] ?>
											</div>

										<?php } else { ?>
											<div class="p mb-0  text-gray-500">
												<i>Data Masih Kosong</i>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 mb-3">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Struktur Organisasi Landscape (Desktop Version)</div>
										<div class="img-responsive">
											<?php if (!empty($select_kepengurusan)) { ?>

												<img src="<?= base_url() ?>assets/upload/Folder_<?= $select_kepengurusan[0]['nama_hmj'] ?>/<?= $select_kepengurusan[0]['landscape_struktur_hmj'] ?>" alt="" width="400px">
											<?php } else { ?>
												<div class="p mb-0  text-gray-500">
													<i>Data Masih Kosong</i>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 mb-3">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Struktur Organisasi Vertikal (Mobile Version)</div>
										<div class="img-responsive">
											<?php if (!empty($select_kepengurusan)) { ?>
												<img src="<?= base_url() ?>assets/upload/Folder_<?= $select_kepengurusan[0]['nama_hmj'] ?>/<?= $select_kepengurusan[0]['vertikal_struktur_hmj'] ?>" alt="" width="400px">
											<?php } else { ?>
												<div class="p mb-0  text-gray-500">
													<i>Data Masih Kosong</i>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Bagian kedua -->
	<div class="card shadow mb-4">
		<!-- Card Header - Accordion -->
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Informasi Bidang HMJ TI</h6>
			<div class="dropdown no-arrow">
				<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
					<div class="dropdown-header">Layanan Tersedia:</div>
					<a id="tombol-bidang" class="dropdown-item" href="<?= base_url() ?>web/tambah_bidang">Tambah Bidang</a>
					<a href="#bidang" class="dropdown-item" id="card-header-option" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="bidang">
						Atur Tampilan
					</a>
				</div>
			</div>
		</div>
		<!-- Card Content - Collapse -->
		<div class="collapse show" id="bidang">
			<div class="card-body row justify-content-center text-center">
				<div class="col-lg-6 col-md-8">
					<!-- Akan berulang -->
					<?php foreach ($bidang as $data) : ?>
						<div class="col-lg-12 mb-3">
							<div class="card border-left-primary shadow h-100 py-2">
								<!-- Bagian icon -->
								<div class="dropdown no-arrow" style="text-align: left;">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas pl-2 fa-edit text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-left shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
										<div class="dropdown-header">Layanan Tersedia:</div>
										<?php if ($group[0]['group_id'] == "1") { ?>
											<a class="dropdown-item" href="<?= base_url() ?>web/edit_bidang/<?= $data['id_detail_hmj'] ?>" id="tombol-info">Edit Data</a>
											<a class="dropdown-item tombol-hapus" href="<?= base_url() ?>web/hapus_bidang/<?= $data['id_detail_hmj'] ?>" id="tombol-info">Hapus Data</a>
										<?php } else { ?>
											<a class="dropdown-item" href="<?= base_url() ?>web/edit_bidang/<?= $data['id_detail_hmj'] ?>" id="tombol-info">Edit Data</a>
										<?php } ?>
									</div>
								</div>
								<!-- Isinya -->

								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="img-responsive pb-3">
												<img src="<?= base_url() ?>assets/upload/Folder_<?= $select_kepengurusan[0]['nama_hmj'] ?>/<?= $data['ketua_foto'] ?>" alt="" width="400px">
											</div>
											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?= $data['nama_bidang'] ?></div>
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"><?= $data['ketua_nama'] ?></div>
											<div class="p mb-0 font-weight-bold text-gray-800"><?= $data['deskripsi_bidang'] ?></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
</div>
