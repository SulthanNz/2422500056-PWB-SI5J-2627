<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ekspedisi</h1>
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
                                <i class="fas fa-table me-1"></i>
                                Semua Ekspedisi
                                <a href="<?= base_url('admin/ekspedisi/tambah') ?>" class="btn btn-labeled btn-primary">
                                    <span class="btn-label">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                    Ekspedisi
                                </a>
                                <?php if ($this->session->flashdata('message')) : ?>
                                    <?= $this->session->flashdata('message') ?>
                                <?php endif ?>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Jenis Layanan</th>
                                            <th scope="col">Tarif per kg</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($list_ekspedisi as $ekspedisi) : ?>
                                            <tr>
                                                <th scope="row"><?= $no ?></th>
                                                <td><?= html_escape($ekspedisi['nama_ekspedisi_056']) ?></td>
                                                <td><?= html_escape($ekspedisi['jenis_layanan_056']) ?></td>
                                                <td>Rp. <?= number_format($ekspedisi['tarif_per_kg_056']) ?></td>
                                                <td><?= html_escape($ekspedisi['status_056']) ?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/ekspedisi/ubah/') ?><?= $ekspedisi['id_ekspedisi_056'] ?>"><span class="badge bg-success">Ubah</span></a>
                                                    <a href="<?= base_url('admin/ekspedisi/hapus/') ?><?= $ekspedisi['id_ekspedisi_056'] ?>"><span class="badge bg-danger">Hapus</span></a>
                                                </td>
                                            </tr>
                                        <?php $no++;
                                        endforeach ?>
                                    </tbody>
                                </table>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
