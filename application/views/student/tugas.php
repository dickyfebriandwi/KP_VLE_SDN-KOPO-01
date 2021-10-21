<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <h5 style="color:red"> Daftar Tugas yang Belum Dikumpulkan </h5>

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Judul Penugasan</th>
                        <th scope="col">Tenggat Pengumpulan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($tugas as $tgs) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $tgs['judul_penugasan']; ?></td>
                            <td><?= date('d F Y', $tgs['date_created']); ?></td>
                            <td><button type="button" class="btn btn-danger btn-sm">Belum Mengumpulkan</button></td>
                            <td>
                                <h5>
                                    <a href="<?= base_url(); ?>student/halaman_buka_tugas/<?= $tgs['id']; ?>" class="badge badge-success"> Buka </a>
                                </h5>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <h5 style="color:blue"> Daftar Tugas yang Sudah Dikumpulkan </h5>

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Judul Penugasan</th>
                        <th scope="col">Tenggat Pengumpulan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($tugas as $tgs) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $tgs['judul_penugasan']; ?></td>
                            <td><?= date('d F Y', $tgs['date_created']); ?></td>
                            <td><button type="button" class="btn btn-primary btn-sm">Sudah Mengumpulkan</button></td>
                            <td>
                                <h5>
                                    <a href="<?= base_url(); ?>student/buka_tugas/<?= $tgs['id']; ?>" class="badge badge-success"> Buka </a>
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