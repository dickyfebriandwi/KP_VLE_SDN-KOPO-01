<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle ?></h1>

    <form method="post" action="<?= base_url('admin/proses_ubah_password/') . $akun->id ?>">
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
                    <a class="btn btn-info" href="<?= base_url(); ?>admin" role="button">Kembali</a>
                    <button type="submit" class="btn btn-success">
                        Simpan
                    </button>
                </div>
            </div>
        </div>

    </form>

</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->