<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Tambah User Website</h1>
	<p class="mb-4">Untuk menambahkan user baru, silahkan isi form tambah user berikut</p>
	<!-- Kepengurusan -->

	<div id="infoMessage"><?php echo $message; ?></div>

	<div class="card shadow mb-4">
		<!-- Card Header - Accordion -->
		<a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="kepengurusan">
			<h6 class="m-0 font-weight-bold text-primary">Form Tambah User</h6>
		</a>
		<!-- Card Content - Collapse -->
		<div class="collapse show" id="kepengurusan">
			<div class="card-body">
				<div class="col-lg-6 col-md-8">
					<form class="user" action="<?= base_url() ?>auth/create_user" method="post">
						<div class="form-group">
							<input type="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Masukkan Alamat Email" name="email">
						</div>
						<div class="form-group">
							<input type="number" min="1800000000" class="form-control form-control-user" id="last_name" aria-describedby="emailHelp" placeholder="Masukkan Nim" name="last_name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control form-control-user" id="first_name" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap" name="first_name">
						</div>
						<div class="form-group">
							<select name="company" id="company" class="form-control form-control-select" aria-describedby="emailHelp" aria-placeholder="Masukkan Bidang HMJ">
								<option value="">Masukkan Bidang HMJ</option>
								<option value="Administratir">Administrator</option>
								<option value="Ketua">Ketua HMJ TI</option>
								<option value="Wakil Ketua">Wakil Ketua HMJ TI</option>
								<option value="Sekretaris I">Sekretaris I HMJ TI</option>
								<option value="Bendahara I">Bendahara I HMJ TI</option>
								<option value="Sekretaris II">Sekretaris II HMJ TI</option>
								<option value="Bendahara II">Bendahara II HMJ TI</option>
								<option value="Koor Prodi PTI">Koor Prodi PTI HMJ TI</option>
								<option value="Koor Prodi MI">Koor Prodi MI HMJ TI</option>
								<option value="Koor Prodi SI">Koor Prodi SI HMJ TI</option>
								<option value="Koor Prodi ILKOM">Koor Prodi ILKOM HMJ TI</option>
								<option value="Koor Bidang 1">Koor Bidang 1 - HMJ TI</option>
								<option value="Koor Bidang 2">Koor Bidang 2 - HMJ TI</option>
								<option value="Koor Bidang 3">Koor Bidang 3 - HMJ TI</option>
								<option value="Koor Bidang 4">Koor Bidang 4 - HMJ TI</option>
								<option value="Koor Bidang 5">Koor Bidang 5 - HMJ TI</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Nomor Telepon/WA" name="phone">
						</div>
						<div class="form-group">
							<input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
						</div>
						<div class="form-group">
							<input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Konfirmasi Password" name="password_confirm">
						</div>
						<button type="submit" class="btn btn-primary btn-user btn-block">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
