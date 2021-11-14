<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle ?></h1>
    <h1 class="h3 mb-4 text-gray-800"><?= $penugasan->judul_penugasan ?></h1>
    <?php echo form_open_multipart(site_url('student/proses_ubah_tugas/') . $penugasan->id); ?>
    <form method="post" enctype="multipart/form-data">

        <input type="hidden" class="" name='penugasan_id_sendiri' value="<?php foreach ($tugas as $tgs) {
                                                                                if ($tgs['penugasan_id'] == $penugasan->id && $tgs['user_id'] == $user['id']) {
                                                                                    echo $tgs['id'];
                                                                                }
                                                                            } ?>">
        <div class="form-group">
            <h7 class="h7 mb-4 text-gray-800"><?= $penugasan->deskripsi_tugas ?></h7>
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col-auto">
                    <div class="custom-file col-auto">
                        <input type="file" class="custom-file-input" id="customFile" name="url" value="<?php foreach ($tugas as $tgs) {
                                                                                                            if ($tgs['penugasan_id'] == $penugasan->id && $tgs['user_id'] == $user['id']) {
                                                                                                                echo $tgs['url'];
                                                                                                            }
                                                                                                        } ?>">
                        <label class="custom-file-label" for="customFile">Pilih file tugas</label>
                    </div>
                    <small id="contohJudul" class="form-text text-muted">Format file pdf, docx, doc, png, jpg, jpeg, ppt, pptx</small>
                </div>
                <div class="col-auto">
                    <button type='submit' class='btn btn-success'>Ubah</button>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-primary" href="<?= base_url(); ?>student/tugas" role="button">Kembali</a>
            </div>
        </div>
        <?php echo form_close() ?>
    </form>

</div>
</div>