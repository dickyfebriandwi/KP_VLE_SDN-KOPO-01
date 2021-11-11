<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle ?></h1>
    <?php echo form_open_multipart(site_url('teacher/proses_tambah_soal')) ?>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" class="" name='user_id' value="<?= $user['id']; ?>">
        <input type="hidden" class="" name='kelas_id' value="<?= $user['kelas_id']; ?>">
        <input type="hidden" class="" name='kuis_id' value="<?= $user['kuis_id']; ?>">
        
        <!-- looping soal -->
        <div class="card">
            <div class="card-header">
                Soal Nomor : 
                <?php
                        $j = 1;
                        foreach ($ as $) :
                        ?>
                            <?php
                            if () {
                                echo "";
                                $j = $j + 1;
                            } ?>
                        <?php endforeach; ?>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input type="text" class="form-control col-8" id="soal1" placeholder="..." name="soal">
                </div>
            </div>
        </div>
        <!-- batas looping soal -->

        <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
        <?php echo form_close() ?>
    </form>

</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->