<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle ?></h1>
    <?php echo form_open_multipart(site_url('teacher/proses_ubah_info_kuis') . $kuis->id); ?>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <div class="col-3">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Kelas</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="kelas_id" readonly>
                        <?php foreach ($kelas as $kls) : ?>
                            <?php
                            if ($kls['id'] == $user['kelas_id']) {
                                echo "<option selected readonly value='" . $kls['id'] . "'>" . "Kelas " . $kls['tingkat'] . " Rombel " . $kls['rombel'] . "</option>";
                                break;
                            }
                            ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Tema</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="tema_id">
                        <?php foreach ($tema as $tm) : ?>
                            <option value="<?= $tm['id']; ?>"><?= $tm['nama_tema']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
                <label for="judulKuis">Judul Kuis</label>
                <input type="text" class="form-control col-6" id="judulKuis" placeholder="..." name="nama_file" value="<?= $kuis->judul_kuis ?>">
                <small id="contohJudulKuis" class="form-text text-muted">Contoh: Kuis Subtema 1 : Pembelajaran 1.1</small>
        </div>
        <div class="form-group row">
            <div class="col-4">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Tipe Soal</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="kelas_id">
                        <?php foreach ($kelas as $kls) : ?>
                            <?php
                            if ($kls['id'] == $user['kelas_id']) {
                                echo "<option selected readonly value='" . $kls['id'] . "'>" . "Kelas " . $kls['tingkat'] . " Rombel " . $kls['rombel'] . "</option>";
                                break;
                            }
                            ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-2">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Jumlah Soal
                        </div>
                        <input type="number" class="form-control" id="inlineFormInputGroup" placeholder="">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="meeting-time">Tenggat Pengumpulan Kuis</label>
            <input type="datetime-local" class="form-control col-3" id="meeting-time" name="due_date">
        </div>
        <div class="form-group row">
            <div class="col-5">
                <a class="btn btn-primary" href="<?= base_url(); ?>teacher/kuis" role="button">Kembali</a>
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </div>
        <?php echo form_close() ?>
    </form>

</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->