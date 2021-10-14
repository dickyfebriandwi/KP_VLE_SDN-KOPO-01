<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-10">
            <a href="<?= base_url(); ?>teacher/tambah_materi" class="btn btn-primary mb-3">Tambah Materi</a>
        </div>
        <div class="col">
            <div class="dropdown float-right">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kelas</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button">Kelas 1</button>
                    <button class="dropdown-item" type="button">Kelas 2</button>
                    <button class="dropdown-item" type="button">Kelas 3</button>
                </div>
            </div>
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
                            <td><?= date('d F Y', $mtr['date_created']); ?></td>
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
                                    <a href="<?= base_url(); ?>teacher/hapus_materi/<?= $mtr['id']; ?>" class="badge badge-danger"> Hapus </a>
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