<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle ?></h1>
    <div class="row">
        <div class="col-9">
            <a href="<?= base_url(); ?>admin/ubah_akun_guru/<?= $akun->id; ?>" class="btn btn-primary mb-3">Ubah Akun Guru</a>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <a href="<?= base_url(); ?>admin/ubah_password_akun/<?= $akun->id; ?>" class="btn btn-primary mb-3">Ubah Password Guru</a>
        </div>
    </div>


    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">NUPTK</label>
            <input type="text" class="form-control col-9" id="judulMateri" placeholder="..." name="nuptk" value="<?php echo $akun->nuptk_nisn; ?> " readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control col-9" id="judulMateri" placeholder="..." name="name" value="<?php echo $akun->name; ?>" readonly>
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="input-group mb-2 col-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Kelas</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="kelas_id">
                        <?php foreach ($kelas as $kls) : ?>
                            <option>
                                <?php
                                if ($kls['id'] == $akun->kelas_id) {
                                    echo "Kelas " . $kls['tingkat'] . "Rombel" . $kls['rombel'];
                                } else {
                                    echo "Tidak ada kelas";
                                }
                                ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Jabatan</label>
            <input type="text" class="form-control col-9" id="judulMateri" placeholder="..." name="jabatan" value="<?php echo $akun->jabatan; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat e-mail</label>
            <input type="text" class="form-control col-9" id="judulMateri" placeholder="..." name="email" value="<?php echo $akun->email; ?>" readonly>
        </div>
        <br><br><br><br><br><br><br><br>
        <div class="form-group">
            <a class="btn btn-primary" href="<?= base_url(); ?>admin/buka_halaman_akun_guru" role="button">Kembali</a>
        </div>

    </form>

</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->