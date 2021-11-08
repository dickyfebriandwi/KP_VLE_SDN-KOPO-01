<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <?php foreach ($akun as $ak) : ?>
            <?php
            if ($ak['id'] == $tugas['user_id']) {
                echo "Nama Siswa : " . $ak['name'];
            } ?>
        <?php endforeach; ?></h1>

    <a class="btn btn-primary" href="<?= base_url(); ?>teacher/buka_daftar_tugas/<?= $tugas['id'] ?>" role="button">Kembali</a>
    <br><br>
    <iframe src="<?= $tugas['url']; ?>" style="width: 100%;height: 500px;"></iframe>
    <br>



</div>