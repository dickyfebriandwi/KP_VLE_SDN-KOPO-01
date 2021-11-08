<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $penugasan->judul_penugasan ?></h1>
    <div class="col-2">
        <a href="<?= base_url(); ?>teacher/penugasan" class="btn btn-primary mb-3">Kembali</a>
    </div>
    <div class="row">
        <div class="col-2">
            <h3 class="h7 mb-4 text-gray-800">Tenggat Waktu : <?= $penugasan->due_date ?></h3>
        </div>
        <div class="col-7">
            <h1 class="h3 mb-4 text-gray-800">Deskripsi : <?= $penugasan->deskripsi_tugas ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Waktu Pengumpulan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($tugas as $tgs) : ?>
                        <tr>
                            <?php if ($penugasan->id == $tgs['penugasan_id']) : ?>
                                <th scope="row"><?= $i; ?></th>
                                <td>
                                    <?php foreach ($akun as $ak) : ?>

                                        <?php
                                        if ($ak['id'] == $tgs['user_id']) {
                                            echo $ak['name'];
                                        }
                                        ?>

                                    <?php endforeach; ?>
                                </td>
                                <td><?= $tgs['date_created']; ?></td>
                                <td><?php if ($tgs['date_created'] < $penugasan->due_date) {
                                        echo '<button type="button" class="btn btn-primary btn-sm">Tepat Waktu</button>';
                                    } else {
                                        echo '<button type="button" class="btn btn-secondary btn-sm">Terlambat</button>';
                                    }; ?></td>
                                <td><?= $tgs['nilai']; ?></td>
                                <td>
                                    <h5>
                                        <a href="<?= base_url(); ?>teacher/buka_detail_tugas/<?= $tgs['id']; ?>" class="badge badge-success"> Buka </a>
                                    </h5>
                                </td>
                        </tr>
                    <?php endif; ?>
                    <?php $i++; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>