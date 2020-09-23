<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Lomba</h1>
    <p class="mb-4">Untuk menambah informasi lomba yang akan dilaksanakan, silahkan isi form dibawah
        ini</p>
    <!-- Kepengurusan -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="kepengurusan">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Lomba</h6>
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
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Ikon Maskot Kategori (*.jpg,*.png maks 1Mb)</div>
                                                <input type="file" class="form-control form-control-user" id="icon_lomba"
                                                    name="icon_lomba" required>
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
                                                    Kategori Lomba</div>
                                                <select name="id_kategori_lomba_integer" id="id_kategori_lomba_integer"
                                                    class="form-control form-control-select" required>
                                                    <option value="">Pilih Kategori Lomba</option>
                                                    <?php foreach ($kategori as $data) : ?>
                                                    <option value="<?= $data['id_kategori_lomba_integer'] ?>"><?= $data['nama_kategori_lomba_integer'] ?>
                                                    </option>
                                                    <?php endforeach ?>
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
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Nama Lomba</div>
                                                <input type="text" class="form-control form-control-user"
                                                    id="nama_lomba_integer" aria-describedby="nama_lomba_integer"
                                                    placeholder="Masukkan Nama Lomba" name="nama_lomba_integer"
                                                    value="<?= set_value('nama_lomba_integer') ?>" required>
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
                                                    Deskripsi Lomba</div>
                                                <textarea type="text" id="	deskripsi_lomba_integer" rows="5" name="deskripsi_lomba_integer"
                                                    required><?= set_value('deskripsi_lomba_integer') ?></textarea>
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
                                                    Link Pendaftaran</div>
                                                <input type="text" class="form-control form-control-user" id="pendaftaran_lomba_integer"
                                                    aria-describedby="pendaftaran_lomba_integer"
                                                    placeholder="Masukkan Link Pendaftaran Lomba" name="pendaftaran_lomba_integer"
                                                    value="<?= set_value('pendaftaran_lomba_integer') ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" class="form-control form-control-user" id="create_by" name="create_by"
                            value="<?= ucfirst($group[0]['first_name']); ?>">
                        <button type="submit" class="btn btn-primary btn-user btn-block">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>