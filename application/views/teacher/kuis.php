<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle ?></h1>

    <div class="row">
        <div class="col-10">
            <a href="<?= base_url(); ?>teacher/tambah_kuis" class="btn btn-primary mb-3">Tambah Kuis</a>
        </div>
        <div class="col-auto">
            <a href="<?= base_url(); ?>teacher/buka_tabel_nilai_kuis" class="btn btn-success mb-3">Tabel Nilai Kuis</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Tema</th>
                        <th scope="col">Judul Kuis</th>
                        <th scope="col">Tenggat Pengumpulan</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kuis as $ks) : ?>
                        <?php if ($ks['kelas_id'] == $user['kelas_id']) : ?>
                            <tr>
                                <?php foreach ($kelas as $kls) : ?>
                                    <?php if ($kls['id'] == $user['kelas_id']) : ?>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?php foreach ($tema as $tm) : ?>
                                                <?php
                                                if ($tm['id'] == $ks['tema_id']) {
                                                    echo $tm['nama_tema'];
                                                }
                                                ?>
                                            <?php endforeach; ?>
                                        </td>
                                        <td><?= $ks['judul_kuis']; ?></td>
                                        <td><?= $ks['due_date']; ?></td>
                                        <td>
                                            <h5>
                                                <a href="<?= base_url(); ?>teacher/buka_daftar_kuis/<?= $ks['id']; ?>" class="badge badge-success"> Buka </a>
                                                <a href="<?= base_url(); ?>teacher/ubah_kuis/<?= $ks['id']; ?>" class="badge badge-info"> Ubah </a>
                                                <a href="<?= base_url(); ?>teacher/hapus_kuis/<?= $ks['id']; ?>" class="badge badge-danger"> Hapus </a>
                                            </h5>
                                        </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <?php $i++; ?>
                <?php endif; ?>
            <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->