<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Edit User Website</h1>
	<p class="mb-4">Untuk mengubah informasi user, silahkan isi form edit user berikut</p>
	<!-- Kepengurusan -->

	<div id="infoMessage"><?php echo $message; ?></div>

	<div class="card shadow mb-4">
		<!-- Card Header - Accordion -->
		<a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="kepengurusan">
			<h6 class="m-0 font-weight-bold text-primary">Form Edit User</h6>
		</a>
		<!-- Card Content - Collapse -->
		<div class="collapse show" id="kepengurusan">
			<div class="card-body">
				<div class="col-lg-6 col-md-8">
					<form class="user" action="<?= base_url() ?><?= uri_string() ?>" method="post">
						<div class="form-group">
							<input type="number" min="1800000000" class="form-control form-control-user" id="last_name" aria-describedby="emailHelp" placeholder="Masukkan Nim" name="last_name" value="<?= $last_name['value'] ?>">
						</div>
						<div class="form-group">
							<input type="text" class="form-control form-control-user" id="first_name" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap" name="first_name" value="<?= $first_name['value'] ?>">
						</div>
						<div class=" form-group">
							<?php
							$admin = '';
							$ketua = '';
							$wakil = '';
							$sekr_1 = '';
							$sekr_2 = '';
							$bend_1 = '';
							$bend_2 = '';
							$pti = '';
							$mi = '';
							$si = '';
							$ilkom = '';
							$bid_1 = '';
							$bid_2 = '';
							$bid_3 = '';
							$bid_4 = '';
							$bid_5 = '';
							if ($company['value'] == "Ketua") {
								$ketua = "selected";
							} else if ($company['value'] == "Administrator") {
								$admin = "selected";
							} else if ($company['value'] == "Wakil Ketua") {
								$wakil = "selected";
							} else if ($company['value'] == "Sekretaris I") {
								$sekr_1 = "selected";
							} else if ($company['value'] == "Bendahara I") {
								$bend_1 = "selected";
							} else if ($company['value'] == "Sekretaris II") {
								$sekr_2 = "selected";
							} else if ($company['value'] == "Bendahara II") {
								$bend_2 = "selected";
							} else if ($company['value'] == "Koor Prodi PTI") {
								$pti = "selected";
							} else if ($company['value'] == "Koor Prodi MI") {
								$mi = "selected";
							} else if ($company['value'] == "Koor Prodi SI") {
								$si = "selected";
							} else if ($company['value'] == "Koor Prodi ILKOM") {
								$ilkom = "selected";
							} else if ($company['value'] == "Koor Bidang 1") {
								$bid_1 = "selected";
							} else if ($company['value'] == "Koor Bidang 2") {
								$bid_2 = "selected";
							} else if ($company['value'] == "Koor Bidang 3") {
								$bid_3 = "selected";
							} else if ($company['value'] == "Koor Bidang 4") {
								$bid_4 = "selected";
							} else if ($company['value'] === "Koor Bidang 5") {
								$bid_5 = "selected";
							}
							?>
							<select name="company" id="company" class="form-control form-control-select" aria-describedby="emailHelp" aria-placeholder="Masukkan Bidang HMJ">
								<option value="Administrator" <?= $admin ?>>Administrator</option>
								<option value="Ketua" <?= $ketua ?>>Ketua HMJ TI</option>
								<option value="Wakil Ketua" <?= $wakil ?>>Wakil Ketua HMJ TI</option>
								<option value="Sekretaris I" <?= $sekr_1 ?>>Sekretaris I HMJ TI</option>
								<option value="Bendahara I" <?= $bend_1 ?>>Bendahara I HMJ TI</option>
								<option value="Sekretaris II" <?= $sekr_2 ?>>Sekretaris II HMJ TI</option>
								<option value="Bendahara II" <?= $bend_2 ?>>Bendahara II HMJ TI</option>
								<option value="Koor Prodi PTI" <?= $pti ?>>Koor Prodi PTI HMJ TI</option>
								<option value="Koor Prodi MI" <?= $mi ?>>Koor Prodi MI HMJ TI</option>
								<option value="Koor Prodi SI" <?= $si ?>>Koor Prodi SI HMJ TI</option>
								<option value="Koor Prodi ILKOM" <?= $ilkom ?>>Koor Prodi ILKOM HMJ TI</option>
								<option value="Koor Bidang 1" <?= $bid_1 ?>>Koor Bidang 1 - HMJ TI</option>
								<option value="Koor Bidang 2" <?= $bid_2 ?>>Koor Bidang 2 - HMJ TI</option>
								<option value="Koor Bidang 3" <?= $bid_3 ?>>Koor Bidang 3 - HMJ TI</option>
								<option value="Koor Bidang 4" <?= $bid_4 ?>>Koor Bidang 4 - HMJ TI</option>
								<option value="Koor Bidang 5 " <?= $bid_5 ?>>Koor Bidang 5 - HMJ TI</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Nomor Telepon/WA" name="phone" value="<?= $phone['value'] ?>">
						</div>
						<div class="form-group">
							<input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password (Jika ingin mengganti)" name="password">
						</div>
						<div class="form-group">
							<input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Konfirmasi Password (Jika ingin mengganti)" name="password_confirm">
						</div>
						<div class="form-group">
							<?php if ($this->ion_auth->is_admin()) : ?>

								<h6 class="mb-3 font-weight-bold text-primary">Level User</h6>
								<?php foreach ($groups as $group) : ?>
									<label class="checkbox">
										<?php
										$gID = $group['id'];
										$checked = null;
										$item = null;
										foreach ($currentGroups as $grp) {
											if ($gID == $grp->id) {
												$checked = ' checked="checked"';
												break;
											}
										}
										?>
										<input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>" <?php echo $checked; ?>>
										<?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
									</label>
								<?php endforeach ?>

							<?php endif ?>
						</div>
						<?php echo form_hidden('id', $user->id); ?>
						<?php echo form_hidden($csrf); ?>
						<button type="submit" class="btn btn-primary btn-user btn-block">Edit Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
