<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <a href="<?= base_url(); ?>teacher/tambah_penugasan" class="btn btn-primary mb-3">Tambah Penugasan</a> *Tambahkan pilihan kelas*
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Judul Penugasan</th>
                        <th scope="col">Tenggat Pengumpulan</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($penugasan as $png) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $mtr['judul_penugasan']; ?></td>
                            <td><?= date('d F Y', $mtr['date_created']); ?></td>
                            <td>
                                <h5>
                                    <a href="<?= base_url(); ?>teacher/buka_penugasan/<?= $mtr['id']; ?>" class="badge badge-success"> Buka </a>
                                    <a href="<?= base_url(); ?>teacher/ubah_penugasan/<?= $mtr['id']; ?>" class="badge badge-info"> Ubah </a>
                                    <a href="<?= base_url(); ?>teacher/hapus_penugasan/<?= $mtr['id']; ?>" class="badge badge-danger"> Hapus </a>
                                </h5>
                            </td>
                        </tr>
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