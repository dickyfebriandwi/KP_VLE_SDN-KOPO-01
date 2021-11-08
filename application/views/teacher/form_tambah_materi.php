<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle ?></h1>
    <?php echo form_open_multipart(site_url('teacher/proses_tambah_materi')) ?>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" class="" name='user_id' value="<?= $user['id']; ?>">
        <div class="form-group">
            <div class="form-row">
                <div class="input-group mb-2 col-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Kelas</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="kelas_id">
                        <?php foreach ($kelas as $kls) : ?>
                            <option value="<?= $kls['id']; ?>">Kelas <?= $kls['tingkat']; ?> Rombel <?= $kls['rombel']; ?></option>
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
                            <option value="<?= $tm['id']; ?>"><?= $tm['nama_tema']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Judul Materi</label>
            <input type="text" class="form-control col-9" id="judulMateri" placeholder="..." name="nama_file">
            <small id="contohJudul" class="form-text text-muted">CONTOH: Subtema 1 : Pembelajaran 1.1</small>
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col-auto">
                    <div class="custom-file col-auto">
                        <input type="file" class="custom-file-input" id="customFile" name="file_materi">
                        <label class="custom-file-label" for="customFile">Pilih file materi</label>
                        <small id="contohJudul" class="form-text text-muted">Format file pdf, docx, doc, png, jpg, jpeg, ppt, pptx</small>
                    </div>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-success">
                        Simpan
                    </button>
                </div>
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

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->