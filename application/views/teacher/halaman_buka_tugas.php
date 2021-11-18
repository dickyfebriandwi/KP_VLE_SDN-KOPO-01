<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tugas <?php foreach ($penugasan as $pngs) {
                                                if ($pngs['id'] == $tugas['penugasan_id']) {
                                                    echo $pngs['judul_penugasan'];
                                                }
                                            } ?></h1>
    <h5 class="h5 mb-4 text-gray-800">
        <?php foreach ($akun as $ak) : ?>
            <?php
            if ($ak['id'] == $tugas['user_id']) {
                echo "Nama Siswa : " . $ak['name'];
            } ?>
        <?php endforeach; ?></h5>
    <div class="row mb-2">
        <div class="col-auto">
            <a class="btn btn-primary" href="<?= base_url(); ?>teacher/buka_daftar_tugas/<?php
                                                                                            foreach ($penugasan as $pngs) :
                                                                                                if ($tugas['penugasan_id'] == $pngs['id']) {
                                                                                                    echo $pngs['id'];
                                                                                                }
                                                                                            endforeach; ?>" role="button">Kembali</a>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <iframe src="<?= $tugas['url']; ?>" style="width: 100%;height: 500px;"></iframe>
        </div>
    </div>
    <br>



    <?php echo form_open_multipart(site_url('teacher/proses_nilai_tugas/') . $tugas['id']); ?>
    <form class="form-inline" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <div class="input-group mb-2 mr-sm-2 col-5">
                <div class="input-group-prepend">
                    <div class="input-group-text ">Nilai
                    </div>
                </div>
                <input type="number" class="form-control col-2" id="inlineFormInputGroupUsername2" name="nilai" value="<?= $tugas['nilai'] ?>" max="100" min="0">


            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-success mb-2">Simpan Nilai</button>
            </div>



        </div>


        <?php echo form_close() ?>
    </form>

</div>
</div>