<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle ?></h1>
    <?= $this->session->flashdata('message'); ?>
    <form method="post" action="<?= base_url('student/proses_ubah_password/') . $akun->id ?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Password Baru</label>
            <input type="password" class="form-control col-9" id="judulMateri" placeholder="..." name="password">
            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Ulangi Password Baru</label>
            <input type="password" class="form-control col-9" id="judulMateri" placeholder="..." name="password2">
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col-auto">
                    <button type="submit" class="btn btn-success">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
        <div class="form-group">
            <a class="btn btn-primary" href="<?= base_url(); ?>student" role="button">Kembali</a>
        </div>

    </form>

</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->