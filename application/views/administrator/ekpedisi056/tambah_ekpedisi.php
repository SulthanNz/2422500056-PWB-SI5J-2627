<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Ekspedisi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                                <form method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                <div class="mb-3">
                                    <label for="nama_ekspedisi_056" class="form-label">Nama Ekspedisi</label>
                                    <input type="text" class="form-control" name="nama_ekspedisi_056" id="nama_ekspedisi_056" value="<?= set_value('nama_ekspedisi_056') ?>" aria-describedby="Nama Ekspedisi">
                                    <small class="text-danger"><em><?= form_error('nama_ekspedisi_056') ?></em></small>
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_layanan_056" class="form-label">Jenis Layanan</label>
                                    <select class="form-select" name="jenis_layanan_056" id="jenis_layanan_056">
                                        <option value="" selected>-- pilih jenis layanan --</option>
                                        <option value="Reguler" <?= set_select('jenis_layanan_056', 'Reguler') ?>>Reguler</option>
                                        <option value="Express" <?= set_select('jenis_layanan_056', 'Express') ?>>Express</option>
                                        <option value="Same Day" <?= set_select('jenis_layanan_056', 'Same Day') ?>>Same Day</option>
                                    </select>
                                    <small class="text-danger"><em><?= form_error('jenis_layanan_056') ?></em></small>
                                </div>
                                <div class="mb-3">
                                    <label for="tarif_per_kg_056" class="form-label">Tarif per kg</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                        <input type="number" name="tarif_per_kg_056" id="tarif_per_kg_056" class="form-control" value="<?= set_value('tarif_per_kg_056') ?>">
                                    </div>
                                    <small class="text-danger"><em><?= form_error('tarif_per_kg_056') ?></em></small>
                                </div>
                                <div class="mb-3">
                                    <label for="status_056" class="form-label">Status</label>
                                    <select class="form-select" name="status_056" id="status_056">
                                        <option value="" selected>-- pilih status --</option>
                                        <option value="Aktif" <?= set_select('status_056', 'Aktif') ?>>Aktif</option>
                                        <option value="Non-Aktif" <?= set_select('status_056', 'Non-Aktif') ?>>Non-Aktif</option>
                                    </select>
                                    <small class="text-danger"><em><?= form_error('status_056') ?></em></small>
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="<?= base_url('admin/ekspedisi') ?>" class="btn btn-danger">Kembali</a>
                                </form>
                            </p>
                        </div>
                    </div>

                </div>
                <!-- /.col-md-6 -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
