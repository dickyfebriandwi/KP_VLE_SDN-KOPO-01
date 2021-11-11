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
                        <th scope="col">Judul Kuis</th>
                        <th scope="col">Tenggat Pengumpulan</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>


                    <?php foreach ($kuis as $ks) : ?>
                        <tr>
                            <?php if ($ks['kelas_id'] == $user['kelas_id']) : ?>
                                <th scope="row"> <?= $i; ?></th>
                                <td><?php foreach ($tema as $tm) :
                                        if ($tm['id'] == $ks['tema_id']) {
                                            echo $tm['nama_tema'];
                                        };
                                    endforeach; ?></td>
                                <td><?= $ks['judul_kuis']; ?></td>
                                <td><?= $ks['due_date']; ?></td>
                                <td><?= $ks['due_date']; ?></td>
                                <td>
                                    <h5>
                                        <a href="<?= base_url(); ?>student/detail_kuis/<?= $ks['id']; ?>" class="badge badge-success"> Buka </a>
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