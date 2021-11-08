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
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Tema</th>
                        <th scope="col">Judul Penugasan</th>
                        <th scope="col">Tenggat Pengumpulan</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($penugasan as $pngs) : ?>
                        <tr>
                            <?php foreach ($kelas as $kls) : ?>
                                <?php if ($kls['id'] == $user['kelas_id']) : ?>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?php foreach ($tema as $tm) : ?>
                                            <?php
                                            if ($tm['id'] == $pngs['tema_id']) {
                                                echo $tm['nama_tema'];
                                            }
                                            ?>
                                        <?php endforeach; ?>
                                    </td>
                                    <td><?= $pngs['judul_penugasan']; ?></td>
                                    <td><?= $pngs['due_date']; ?></td>
                                    <td>
                                        <h5>
                                            <a href="<?= base_url(); ?>teacher/buka_daftar_tugas/<?= $pngs['id']; ?>" class="badge badge-success"> Buka </a>
                                            <a href="<?= base_url(); ?>teacher/ubah_penugasan/<?= $pngs['id']; ?>" class="badge badge-info"> Ubah </a>
                                            <a href="<?= base_url(); ?>teacher/hapus_penugasan/<?= $pngs['id']; ?>" class="badge badge-danger"> Hapus </a>
                                        </h5>
                                    </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php $i++; ?>
            <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- /.container-fluid -->


<!-- End of Main Content -->