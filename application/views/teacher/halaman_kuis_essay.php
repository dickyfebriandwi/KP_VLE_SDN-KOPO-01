<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle ?></h1>
    <?php echo form_open_multipart(site_url('teacher/proses_nilai_kuis_oleh_guru/' . $nilai->id)) ?>
    <form method="post" enctype="multipart/form-data">
        <!-- looping soal -->
        <?php
        $i = 1;
        foreach ($soal as $sl) :
            if ($nilai->kuis_id == $sl['kuis_id']) : ?>
                <div class="card">
                    <div class="card-header">
                        Soal Nomor : <?= $i; ?>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <h2 class="form-control col-auto"><?= $sl['soal'] ?></h2>
                        </div>
                        <?php foreach ($jawaban as $jwb) : ?>
                            <?php if ($jwb['soal_id'] == $sl['id']) : ?>
                                <div class="form-group">
                                    <h3 type="text" class="form-control col-auto" id="soal1" placeholder="Masukan jawaban" name="jawaban<?= $i ?>"><?= $jwb['jawaban'] ?></h3>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
        <?php
                $i++;
            endif;
        endforeach; ?>
        <!-- batas looping soal -->
        <div class="form-group">
            <input type="text" name="nilai" id="" value="<?= $nilai->nilai ?>">
            <button type="submit" class="btn btn-success">Ubah Nilai</button>
        </div>
        <div class="form-group">

            <a href="<?= base_url(); ?>teacher/kuis/" class="btn btn-info">Kembali</a>
        </div>
        <?php echo form_close() ?>
    </form>

</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->