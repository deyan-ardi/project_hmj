<!-- ***** Breadcrumb Area Start ***** -->
<section class="section breadcrumb-area bg-overlay d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Breamcrumb Content -->
				<div class="breadcrumb-content d-flex flex-column align-items-center
					text-center">
					<?php if ($detail[0]['kategori_informasi'] == "Karya Tulis") { ?>
						<h3 class="text-white">Redaksi <?= $detail[0]['kategori_informasi'] ?></h3>
					<?php } else { ?>
						<h3 class="text-white"><?= $detail[0]['kategori_informasi'] ?></h3>
					<?php } ?>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>web/home">Beranda</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url() ?>web/berita">Berita</a></li>
						<li class="breadcrumb-item active">Detail Berita</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ***** Breadcrumb Area End ***** -->
<!-- ***** Blog Area Start ***** -->
<section id="blog" class="section blog-area ptb_100">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-9">
				<!-- Single Blog Details -->
				<article class="single-blog-details">
					<!-- Blog Thumb -->
					<div class="blog-thumb">
						<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<?php if (!empty($detail[0]['video_informasi'])) { ?>
									<div class="carousel-item active" data-interval="10000" data-touch="true">
										<div class="embed-responsive embed-responsive-16by9 d-block w-10">
											<?= $detail[0]['video_informasi']; ?>
										</div>
									</div>
								<?php } ?>
								<div class="carousel-item active" data-interval="2000" data-touch="true">
									<img src="<?= base_url() ?>assets/upload/Folder_informasi/foto/<?= $detail[0]['foto1_informasi']; ?>" class="d-block w-100" alt="">
								</div>
								<?php if (!empty($detail[0]['foto2_informasi'])) { ?>
									<div class="carousel-item" data-touch="true">
										<img src="<?= base_url() ?>assets/upload/Folder_informasi/foto/<?= $detail[0]['foto2_informasi']; ?>" class="d-block w-100" alt="">
									</div>
								<?php } ?>
								<?php if (!empty($detail[0]['foto3_informasi'])) { ?>
									<div class="carousel-item" data-touch="true">
										<img src="<?= base_url() ?>assets/upload/Folder_informasi/foto/<?= $detail[0]['foto3_informasi']; ?>" class="d-block w-100" alt="">
									</div>
								<?php } ?>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<!-- Blog Content -->
					<div class="blog-content sApp-blog">
						<!-- Meta Info -->
						<div class="meta-info d-flex flex-wrap align-items-center py-2">
							<ul>
								<li class="d-inline-block p-2"><?= $detail[0]['nama_kepengurusan'] ?></li>
								<li class="d-inline-block p-2">Diupload oleh <?= $detail[0]['create_by'] ?></li>
								<li class="d-inline-block p-2"><?= $detail[0]['create_at'] ?></li>
								<?php if (!empty($detail[0]['file_informasi'])) { ?>
									<li class="d-inline-block p-2"><a href="<?= base_url() ?>web/download_file/<?= $detail[0]['file_informasi'] ?>/informasi">Download</a></li>
								<?php } ?>
							</ul>
						</div>
						<!-- Blog Details -->
						<div class="blog-details">
							<h3 class="blog-title py-2 py-sm-3"><?= $detail[0]['judul_informasi'] ?></h3>
							<?= $detail[0]['konten_informasi'] ?>
						</div>
					</div>
				</article>
			</div>

			<!-- Sidebar -->
			<div class="col-12 col-lg-3">
				<aside class="sidebar">
					<!-- Single Widget -->
					<div class="single-widget">
						<!-- Category Widget -->
						<div class="accordions widget catagory-widget" id="cat-accordion">
							<div class="single-accordion blog-accordion">
								<h5>
									<a role="button" class="collapse show text-uppercase d-block p-3" data-toggle="collapse" href="#accordion1">Kategori
									</a>
								</h5>
								<!-- Category Widget Content -->
								<div id="accordion1" class="accordion-content widget-content collapse
									show" data-parent="#cat-accordion">
									<!-- Category Widget Items -->
									<ul class="widget-items">
										<li><a href="<?= base_url() ?>web/berita" class="d-flex p-3"><span>Berita</span><span class="ml-auto">(<?= $berita ?>)</span></a></li>
										<li><a href="<?= base_url() ?>web/berita" class="d-flex p-3"><span>Karya Tulis</span><span class="ml-auto">(<?= $redaksi ?>)</span></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Widget -->
					<div class="single-widget">
						<!-- Post Widget -->
						<div class="accordions widget post-widget" id="post-accordion">
							<div class="single-accordion">
								<h5>
									<a role="button" class="collapse show text-uppercase d-block p-3" data-toggle="collapse" href="#accordion2">Postingan terbaru
									</a>
								</h5>
								<!-- Post Widget Content -->
								<div id="accordion2" class="accordion-content widget-content collapse
									show" data-parent="#post-accordion">
									<!-- Post Widget Items -->
									<ul class="widget-items">
										<?php foreach ($all_berita as $data) : ?>
											<li>
												<a href="<?= base_url() ?>web/detail_berita/<?= $data['id_informasi'] ?>" class="single-post align-items-center
												align-items-lg-start media p-3">
													<!-- Post Thumb -->
													<div class="post-thumb avatar-md">
														<img class="align-self-center" src="<?= base_url() ?>assets/upload/Folder_informasi/foto/<?= $data['foto1_informasi']; ?>" alt="">
													</div>
													<div class="post-content media-body pl-3">
														<p class="post-date mb-2"><?= $data['create_at']; ?></p>
														<h6><?= $data['judul_informasi']; ?></h6>
													</div>
												</a>
											</li>
										<?php endforeach; ?>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</div>
</section>
<!-- ***** Blog Area End ***** -->
