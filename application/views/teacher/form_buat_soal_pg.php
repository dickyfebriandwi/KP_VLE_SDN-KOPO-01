<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle ?></h1>
    <?php echo form_open_multipart(site_url('teacher/proses_tambah_soal')) ?>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" class="" name='user_id' value="<?= $user['id']; ?>">
        <input type="hidden" class="" name='kelas_id' value="<?= $user['kelas_id']; ?>">
        <input type="hidden" class="" name='kuis_id' value="<?= $user['kuis_id']; ?>">
        
        <!-- looping sebanyak jumlah soal -->
        <div class="card">
            <div class="card-header"> <!-- looping nomor soal -->
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
                    <div class="row">
                        <input type="text" class="form-control col-8" id="soal1" placeholder="..." name="soal">
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <div class="form-group row">
                            <label for="opsiA" class="col-sm-1 col-form-label">Opsi A :</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control-plaintext" id="opsiA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="opsiB" class="col-sm-1 col-form-label">Opsi B :</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control-plaintext" id="opsiB">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="opsiC" class="col-sm-1 col-form-label">Opsi C :</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control-plaintext" id="opsiC">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="opsiD" class="col-sm-1 col-form-label">Opsi D :</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control-plaintext" id="opsiD">
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Kunci</label>
                            </div>
                            <!-- dropdown kunci jawaban, ada 4 value -->
                            <select class="custom-select" id="inputGroupSelect01" name="soal_id">
                                <?php foreach ($kelas as $kls) : ?>
                                <?php
                                    if ($kls['id'] == $user['kelas_id']) {
                                        echo "<option selected value='" . $kls['id'] . "'>" . "Kelas " . $kls['tingkat'] . " Rombel " . $kls['rombel'] . "</option>";
                                        break;
                                    }
                                ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
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