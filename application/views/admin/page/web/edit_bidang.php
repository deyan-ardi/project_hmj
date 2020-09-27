<?php if (!empty($bidang)) { ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Informasi Bidang "<?= $kepengurusan[0]['nama_hmj'] ?>"</h1>
    <p class="mb-4">Untuk mengubah informasi bidang HMJ TI, silahkan ubah form berikut</p>
    <!-- Kepengurusan -->

    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="kepengurusan">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Informasi Bidang Kepengurusan
                "<?= $kepengurusan[0]['nama_hmj'] ?>"</h6>
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
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Nama Bidang</div>
                                                <input type="text" class="form-control form-control-user"
                                                    id="nama_bidang" aria-describedby="bidang"
                                                    placeholder="Masukkan Nama Bidang HMJ"
                                                    value="<?= $bidang[0]['nama_bidang'] ?>" name="nama_bidang">
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
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Deskripsi Bidang</div>
                                                <textarea type="text" id="bidang" rows="5"
                                                    name="deskripsi_bidang"><?= $bidang[0]['deskripsi_bidang'] ?></textarea>
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
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Foto Koordinator (*.jpg maks 500kb)</div>
                                                <input type="file" class="form-control form-control-user" id="file"
                                                    name="file">
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
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Nama Koordinator Bidang</div>
                                                <input type="text" class="form-control form-control-user"
                                                    id="nama_bidang" aria-describedby="bidang"
                                                    placeholder="Masukkan Nama Koordinator Bidang HMJ"
                                                    name="nama_koordinator" value="<?= $bidang[0]['ketua_nama'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="kepengurusan" name="nama_kepengurusan"
                            value="<?= $kepengurusan[0]['id_hmj'] ?>">
                        <input type="hidden" name="id" id="id" value="<?= $bidang[0]['id_detail_hmj'] ?>">
                        <input type="hidden" name="old_foto" id="old_foto" value="<?= $bidang[0]['ketua_foto'] ?>">
                        <button type="submit" class="btn btn-primary btn-user btn-block">Tambah Data</button>
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