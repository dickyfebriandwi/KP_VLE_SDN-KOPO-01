<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle ?></h1>
    <div class="col-lg-8">
        <form method="post" action="<?= base_url('admin/proses_ubah_akun/') . $akun->id; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">NUPTK</label>
                <input type="text" class="form-control col-9" id="judulMateri" placeholder="..." name="nuptk" value="<?php echo $akun->nuptk_nisn; ?>" required max_length="16">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control col-9" id="judulMateri" placeholder="..." name="name" value="<?php echo $akun->name; ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jabatan</label>
                <input type="text" class="form-control col-9" id="judulMateri" placeholder="..." name="jabatan" value="<?php echo $akun->jabatan; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat e-mail</label>
                <input type="text" class="form-control col-9" id="judulMateri" placeholder="..." name="email" value="<?php echo $akun->email; ?>" required>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-success">
                            Ubah
                        </button>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
            <div class="form-group">
                <a class="btn btn-primary" href="<?= base_url(); ?>admin/buka_halaman_akun_guru" role="button">Kembali</a>
            </div>

        </form>
    </div>
</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->