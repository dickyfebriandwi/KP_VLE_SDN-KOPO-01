<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-2">
            <a href="<?= base_url(); ?>teacher/tambah_penugasan" class="btn btn-primary mb-3">Tambah Penugasan</a>
        </div>
        <div class="col-7">
            <a href="<?= base_url(); ?>teacher/buka_tabel_nilai_tugas" class="btn btn-success mb-3">Tabel Nilai Tugas</a>
        </div>
        <div class="col">
        <div class="dropdown float-right">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tema</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button">Tema 1</button>
                    <button class="dropdown-item" type="button">Tema 2</button>
                    <button class="dropdown-item" type="button">Tema 3</button>
                </div>
            </div>
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
                        <th scope="col">Judul Penugasan</th>
                        <th scope="col">Tenggat Pengumpulan</th>
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
                                    <a href="<?= base_url(); ?>teacher/ubah_penugasan/<?= $pngs['id']; ?>" class="badge badge-info"> Ubah </a>
                                    <a href="<?= base_url(); ?>teacher/hapus_penugasan/<?= $pngs['id']; ?>" data-toggle="modal" data-target="#hapus_penugasan" class="badge badge-danger"> Hapus </a>
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

<!-- Hapus Penugasan Modal-->
<div class="modal fade" id="hapus_penugasan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus penugasan *judul penugasan*</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah Anda yakin mau menghapus penugasan ini?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                <a class="btn btn-danger" href="<?= base_url('auth/logout'); ?>">Hapus</a>
            </div>
        </div>
    </div>
</div>

</div>
<!-- End of Main Content -->