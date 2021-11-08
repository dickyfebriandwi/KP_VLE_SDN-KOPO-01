<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle ?></h1>
    <?php echo form_open_multipart(site_url('teacher/proses_ubah_penugasan/') . $penugasan->id); ?>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <div class="form-row">
                <div class="input-group mb-2 col-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Kelas</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="kelas_id" readonly>
                        <?php foreach ($kelas as $kls) : ?>
                            <?php
                            if ($kls['id'] == $user['kelas_id']) {
                                echo "<option selected readonly>" . "Kelas " . $kls['tingkat'] . " Rombel " . $kls['rombel'] . "</option>";
                                break;
                            }
                            ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="input-group mb-2 col-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Tema</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="tema_id">
                        <?php foreach ($tema as $tm) : ?>
                            <?php
                            if ($tm['id'] == $penugasan->tema_id) {
                                echo "<option selected value=" . $tm['id'] . ">" . $tm['nama_tema'] . "</option>";
                            } else {
                                echo "<option value=" . $tm['id'] . ">" . $tm['nama_tema'] . "</option>";
                            };
                            ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Judul Penugasan</label>
            <input type="text" class="form-control col-9" id="judulMateri" placeholder="..." name="judul_penugasan" value="<?= $penugasan->judul_penugasan ?>">
            <small id="contohJudul" class="form-text text-muted">CONTOH: Tugas Subtema 1 : Pembelajaran 1.1</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Deskripsi Penugasan</label>
            <textarea class="form-control col-9" id="deskripsiPenugasan" rows="3" name="deskripsi" value="<?= $penugasan->deskripsi_tugas ?>" required></textarea>
        </div>
        <div class="form-row">

            <div class="col-auto">
                <label for="meeting-time">Tenggat Waktu :</label>
                <input type="datetime-local" id="meeting-time" name="due_date" value="<?= $penugasan->due_date ?>" required>
                <button type="submit" class="btn btn-success">
                    Ubah
                </button>
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-primary" href="<?= base_url(); ?>teacher/materi" role="button">Kembali</a>
            </div>
        </div>
        <?php echo form_close() ?>
    </form>
</div>