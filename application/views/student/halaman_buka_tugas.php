<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle ?></h1>
    <h1 class="h3 mb-4 text-gray-800"><?= $penugasan->deskripsi_tugas ?></h1>

    <a class="btn btn-primary" href="<?= base_url(); ?>student/tugas/" role="button">Kembali</a>
    <br><br>
    <iframe src="<?php foreach ($tugas as $tgs) {
                        if ($penugasan->id == $tgs['penugasan_id'] && $tgs['user_id'] == $user['id']) {
                            echo $tgs['url'];
                        }
                    }; ?>" style="width: 100%;height: 500px;"></iframe>
    <br>

</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->