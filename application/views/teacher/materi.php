<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle ?></h1>

    <div class="row">
        <div class="col-9">
            <a href="<?= base_url(); ?>teacher/tambah_materi" class="btn btn-primary mb-3">Tambah Materi</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Judul Materi</th>
                        <th scope="col">Waktu Unggah</th>
                        <th scope="col">Status</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($materi as $mtr) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $mtr['nama_file']; ?></td>
                            <td><?= $mtr['date_created']; ?></td>
                            <td><?php $aktif = $mtr['is_active'];
                                if ($aktif) {
                                    echo '<button type="button" class="btn btn-primary btn-sm">Aktif</button>';
                                } else {
                                    echo '<button type="button" class="btn btn-secondary btn-sm">Tidak Aktif</button>';
                                }
                                ?></td>
                            <td>
                                <h5>
                                    <a href="<?= base_url(); ?>teacher/buka_materi/<?= $mtr['id']; ?>" class="badge badge-success"> Buka </a>
                                    <a href="<?= base_url(); ?>teacher/ubah_materi/<?= $mtr['id']; ?>" class="badge badge-info"> Ubah </a>
                                    <a href="<?= base_url(); ?>teacher/hapus_materi/<?= $mtr['id']; ?>" data-toggle="modal" data-target="#hapus_materi" class="badge badge-danger"> Hapus </a>
                                </h5>
                            </td>
                        </tr>
                        <div class="modal fade" id="hapus_materi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus materi <?= $mtr['nama_file']; ?></h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Apakah Anda yakin mau menghapus materi ini?</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                                        <a class="btn btn-danger" href="<?= base_url(); ?>teacher/hapus_materi/<?= $mtr['id'];  ?>">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- /.container-fluid -->


</div>
<!-- End of Main Content -->