<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Waktu Mengumpulkan</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($penugasan as $pngs) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $pngs['judul_penugasan']; ?></td>
                            <td><?= date('d F Y', $pngs['date_created']); ?></td>
                            <td>
                                <h5>
                                    <a href="<?= base_url(); ?>teacher/buka_daftar_tugas/<?= $pngs['id']; ?>" class="badge badge-success"> Buka </a>
                                </h5>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <br><br><br><br><br><br><br><br>
    <div class="form-group">
        <a class="btn btn-primary" href="<?= base_url(); ?>teacher/penugasan" role="button">Kembali</a>
    </div>
</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->