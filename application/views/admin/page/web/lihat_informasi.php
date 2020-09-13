<?php if (!empty($informasi)) { ?>
	<!-- Begin Page Content -->
	<div class="container-fluid">
		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800">Tampilan Informasi</h1>
		<p class="mb-4">Tampilan dibawah ini merepresentasikan tampilan di web HMJ TI</p>
		<div class="card shadow">
			<!-- Card Header - Accordion -->
			<a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="kepengurusan">
				<h6 class="m-0 font-weight-bold text-primary">Kategori <?= $informasi[0]['kategori_informasi'] ?></h6>
			</a>
			<!-- Card Content - Collapse -->
			<div class="collapse show" id="kepengurusan">
				<div class="card-body row justify-content-center">
					<div class="col-lg-11 col-md-8">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active" data-interval="2000" data-touch="true">
									<img class="d-block w-100" src="<?= base_url() ?>assets/upload/Folder_informasi/foto/<?= $informasi[0]['foto1_informasi'] ?>" alt="First slide">
								</div>
								<?php if ($informasi[0]['foto2_informasi'] != null) { ?>
									<div class="carousel-item" data-interval="2000" data-touch="true">
										<img class="d-block w-100" src="<?= base_url() ?>assets/upload/Folder_informasi/foto/<?= $informasi[0]['foto2_informasi'] ?>" alt="Second slide">
									</div>
								<?php } ?>
								<?php if ($informasi[0]['foto3_informasi'] != null) { ?>
									<div class="carousel-item" data-interval="2000" data-touch="true">
										<img class="d-block w-100" src="<?= base_url() ?>assets/upload/Folder_informasi/foto/<?= $informasi[0]['foto3_informasi'] ?>" alt="Third slide">
									</div>
								<?php } ?>
								<?php if ($informasi[0]['video_informasi'] != null) { ?>
									<div class="carousel-item" data-interval="10000" data-touch="true">
										<div class="embed-responsive embed-responsive-16by9 d-block w-10">
											<?= $informasi[0]['video_informasi'] ?>
										</div>
									</div>
								<?php } ?>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>

					</div>
					<div class="col-lg-11 col-md-8 mt-3">
						<p><?= $informasi[0]['nama_kepengurusan'] ?> | Diupload Oleh <?= $informasi[0]['create_by'] ?> | <?= $informasi[0]['create_at'] ?>
							<?php if ($informasi[0]['file_informasi'] != null) { ?>
								| <a href="<?= base_url() ?>web/download_file/<?= $informasi[0]['file_informasi'] ?>/informasi">Download</a>
							<?php } ?>
						</p>
						<hr>
						<h1 class="h3 mb-2 text-gray-800 mb-4"><?= $informasi[0]['judul_informasi'] ?></h1>
						<p><?= $informasi[0]['konten_informasi'] ?></p>
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
