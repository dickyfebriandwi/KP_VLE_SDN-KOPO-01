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
    <iframe src="<?= $tugas['url']; ?>" style="width: 100%;height: 500px;"></iframe>
    <br>
    <?php echo form_open_multipart(site_url('teacher/proses_nilai_tugas/') . $tugas['id']); ?>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Nilai</label>
            <input type="text" class="form-control col-9" id="judulMateri" placeholder="..." name="nilai" value="<?= $tugas['nilai'] ?>">
        </div>
        <div class="form-row">
            <div class="col-auto">
                <button type="submit" class="btn btn-success">
                    Ubah Nilai
                </button>
                <a class="btn btn-primary" href="<?= base_url(); ?>teacher/buka_daftar_tugas/<?php
                                                                                                foreach ($penugasan as $pngs) :
                                                                                                    if ($tugas['penugasan_id'] == $pngs['id']) {
                                                                                                        echo $pngs['id'];
                                                                                                    }
                                                                                                endforeach; ?>" role="button">Kembali</a>
            </div>
        </div>
        <?php echo form_close() ?>
    </form>



</div>