 <!-- Begin Page Content -->
 <div class="container-fluid">
 	<!-- Page Heading -->
 	<h1 class="h3 mb-2 text-gray-800">Manajemen Website</h1>
 	<p class="mb-4">Berikut merupakan beberapa pengaturan yang dapat dilakukan di Website E-Informatics</p>
 	<!-- Kepengurusan -->
 	<!-- This is the insert flash message -->
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
 						<li>Untuk menambah User Baru, silahkan pilih tombol Tambah User. Untuk menambah Level User, silahkan pilih tombol Tambah Level</li>
 						<li>Untuk mengubah Deskripsi Level, silahkan pilih pada bagian Level User. Untuk mengaktifkan dan menonaktifkan user, silahkan pilih pada bagian Aktivasi</li>
 						<li>Untuk mengubah dan menghapus user, silahkan pilih pada bagian Fitur</li>
 						<li>Username yang harus identik adalah Email, pastikan Email user adalah Email yang aktif</li>
 						<li>Untuk mengatur Link yang tampil di halaman Awal Landing Page, silahkan perhatikan pada bagian Data Pengaturan Landing</li>
 						<li>Anda hanya dapat mengatur 4 Links Utama,selain 4 Link itu akan diarahkan pada bagian menu di Landing Page</li>


 					</ul>
 				</div>
 				<div class="modal-footer">
 					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
 				</div>
 			</div>
 		</div>
 	</div>
 	<div class="accordion" id="ManajemenWebsite">
 		<div class="card shadow mb-4">
 			<!-- Card Header - Accordion -->
 			<a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="kepengurusan">
 				<h6 class="m-0 font-weight-bold text-primary">Data User Website</h6>
 			</a>
 			<!-- Card Content - Collapse -->
 			<div class="collapse show" id="kepengurusan" data-parent="#ManajemenWebsite">
 				<div class="card-body col-12 row">
 					<p class="pr-3">
 						<?php echo anchor('admin/tambah_user', '<button class="btn btn-primary btn-sm btn-icon-split"><span class="icon text-white-50"><i class="fas fa-flag"></i>
				</span><span class="text">Tambah User</span></button> ') ?> </p>
 					<p>
 						<?php echo anchor('admin/tambah_group', '<button class="btn btn-success btn-sm btn-icon-split"><span class="icon text-white-50"><i class="fas fa-plus"></i>
                </span><span class="text">Tambah Level</span></button>') ?></p>
 					<div class="table-responsive">
 						<table class="table table-bordered" id="tableKepengurusan" width="100%" cellspacing="0">
 							<thead>
 								<tr>
 									<th>No</th>
 									<th>IP Login</th>
 									<th>ID Email</th>
 									<th>NIM</th>
 									<th>Nama Lengkap</th>
 									<th>Bidang HMJ</th>
 									<th>No Telp</th>
 									<th>Level User</th>
 									<th>Login Terakhir</th>
 									<th>Aktivasi</th>
 									<th>Fitur</th>
 								</tr>
 							</thead>
 							<tbody>
 								<?php
									$i = 1;
									foreach ($users as $user) : ?>
 									<tr>
 										<td><?= $i++; ?></td>
 										<td><?php echo htmlspecialchars($user->ip_address, ENT_QUOTES, 'UTF-8'); ?></td>
 										<td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
 										<td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
 										<td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
 										<td><?php echo htmlspecialchars($user->company, ENT_QUOTES, 'UTF-8'); ?></td>
 										<td><?php echo htmlspecialchars($user->phone, ENT_QUOTES, 'UTF-8'); ?></td>
 										<td>
 											<?php foreach ($user->groups as $group) : ?>
 												<?php echo anchor("admin/edit_group/" . $group->id, '<button class="btn btn-warning btn-sm btn-icon-split">
                    						<span class="icon text-white-50">
                      						<i class="fas fa-edit"></i>
                    						</span>
                    						<span class="text">' . $group->name . '</span>
                  					</button>', ENT_QUOTES, 'UTF-8'); ?><br />
 											<?php endforeach ?>
 										</td>
 										<td><?php echo htmlspecialchars(date("H:i:s d-m-Y", $user->last_login), ENT_QUOTES, 'UTF-8'); ?></td>
 										<td><?php echo ($user->active) ? anchor("auth/deactivate/" . $user->id, '<button class="btn btn-success btn-sm btn-icon-split">
                    				<span class="icon text-white-50">
                      				<i class="fas fa-check"></i>
                    				</span>
                    				<span class="text">Aktif</span>
                  					</button>') : anchor("auth/activate/" . $user->id, '<button class="btn btn-secondary btn-sm btn-icon-split">
                    				<span class="icon text-white-50">
                      				<i class="fas fa-times"></i>
                    				</span>
                    				<span class="text">Non-Aktif</span>
                  					</button>'); ?></td>
 										<td>
 											<?php echo anchor("admin/edit_user/" . $user->id, ' <button class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></button>'); ?>
 											<?php echo anchor("admin/hapus_user/" . $user->id, ' <button class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></button>', array('class' => 'tombol-hapus')); ?>
 										</td>
 									</tr>
 								<?php endforeach; ?>
 							</tbody>
 						</table>
 					</div>
 				</div>
 			</div>
 		</div>
 		<div class="card shadow mb-4">
 			<!-- Card Header - Accordion -->
 			<a href="#landing" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="landing">
 				<h6 class="m-0 font-weight-bold text-primary">Data Pengaturan Landing Page</h6>
 			</a>
 			<!-- Card Content - Collapse -->
 			<div class="collapse" id="landing" data-parent="#ManajemenWebsite">
 				<div class="ml-4 mr-4 mt-4">
 					<div class="alert alert-warning alert-dismissible fade show" role="alert">
 						<i class="fas fa-info-circle "></i> Info
 						<p> Anda Hanya Dapat Menyetel Tipe Main Pada Icon/Links Sebanyak <strong>4 Icon/Links</strong>, Pastikan Yang Anda Memilih Icon/Links Yang Tepat</p>
 						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
 							<span aria-hidden="true">&times;</span>
 						</button>

 					</div>
 				</div>
 				<div class="card-body">
 					<p>
 						<?php echo anchor('admin/tambah_landing', '<button class="btn btn-primary btn-sm btn-icon-split"><span class="icon text-white-50"><i class="fas fa-flag"></i>
				</span><span class="text">Tambah Landing</span></button> ') ?>
 					</p>
 					<div class="table-responsive">
 						<table class="table table-bordered" id="tableLanding" width="100%" cellspacing="0">
 							<thead>
 								<tr>
 									<th>No</th>
 									<th>Title</th>
 									<th>Icon</th>
 									<th>Href</th>
 									<th>Tipe</th>
 									<th>Fitur</th>
 								</tr>
 							</thead>
 							<tbody>
 								<?php
									$i = 1;
									foreach ($landing as $data) : ?>
 									<tr>
 										<td><?= $i++ ?></td>
 										<td><?= $data['title'] ?></td>
 										<td>
 											<ul>
 												<li>Nama Icon : <?= $data['icon'] ?></li>
 												<li> Logo Icon : <i class="<?= $data['icon'] ?>"></i></li>
 											</ul>
 										</td>
 										<td><a href="<?= base_url() ?><?= $data['href'] ?>"><?= base_url() ?><?= $data['href'] ?></a></td>
 										<td>
 											<?php if ($data['type'] == "main") { ?>
 												<?php echo anchor('admin/set_off/' . $data['id_links'], '<button class="btn btn-success btn-sm btn-icon-split"><span class="icon text-white-50"><i class="fas fa-check"></i>
				</span><span class="text">' . $data['type'] . '</span></button> ') ?>
 											<?php } else { ?>
 												<?php echo anchor('admin/set_main/' . $data['id_links'], '<button class="btn btn-danger btn-sm btn-icon-split"><span class="icon text-white-50"><i class="fas fa-edit"></i>
				</span><span class="text">' . $data['type'] . '</span></button> ') ?>
 											<?php } ?>
 										</td>
 										<td>
 											<?php echo anchor("admin/edit_landing/" . $data['id_links'], ' <button class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></button>'); ?>
 											<?php echo anchor("admin/hapus_landing/" . $data['id_links'], ' <button class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></button>', array('class' => 'tombol-hapus')); ?>
 										</td>
 									</tr>
 								<?php endforeach; ?>
 							</tbody>
 						</table>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
