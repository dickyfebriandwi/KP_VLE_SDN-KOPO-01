<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle ?></h1>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Tema</th>
                        <th scope="col">Judul Penugasan</th>
                        <th scope="col">Tenggat Pengumpulan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>


                    <?php foreach ($penugasan as $pngs) : ?>
                        <tr>
                            <?php if ($pngs['kelas_id'] == $user['kelas_id']) : ?>
                                <th scope="row"> <?= $i; ?></th>
                                <td><?php foreach ($tema as $tm) :
                                        if ($tm['id'] == $pngs['tema_id']) {
                                            echo $tm['nama_tema'];
                                        };
                                    endforeach; ?></td>
                                <td><?= $pngs['judul_penugasan']; ?></td>
                                <td><?= $pngs['due_date']; ?></td>
                                <td><?= $pngs['due_date']; ?></td>
                                <td><?= $pngs['due_date']; ?></td>
                                <td>
                                    <h5>
                                        <a href="<?= base_url(); ?>student/detail_tugas/<?= $pngs['id']; ?>" class="badge badge-success"> Buka </a>
                                    </h5>
                                </td>

                        </tr>
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