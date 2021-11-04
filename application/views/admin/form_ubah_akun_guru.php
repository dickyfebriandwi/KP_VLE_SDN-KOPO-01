<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle ?></h1>
    <div class="col-lg-8">
        <form method="post" action="<?= base_url('admin/proses_ubah_akun_guru/') . $akun->id; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">NUPTK</label>
                <input type="text" class="form-control col-9" id="judulMateri" placeholder="..." name="nuptk" value="<?php echo $akun->nuptk_nisn; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control col-9" id="judulMateri" placeholder="..." name="name" value="<?php echo $akun->name; ?>">
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="input-group mb-2 col-4">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Kelas</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="kelas_id">
                            <?php foreach ($kelas as $kls) : ?>
                                <?php
                                if ($kls['id'] == $akun->kelas_id) {
                                    echo "<option selected value=" . $kls['id'] . ">Kelas " . $kls['tingkat'] . " Rombel " . $kls['rombel'] . "</option>";
                                } else {
                                    echo "<option value=" . $kls['id'] . ">Kelas " . $kls['tingkat'] . " Rombel " . $kls['rombel'] . "</option>";
                                };
                                ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jabatan</label>
                <input type="text" class="form-control col-9" id="judulMateri" placeholder="..." name="jabatan" value="<?php echo $akun->jabatan; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat e-mail</label>
                <input type="text" class="form-control col-9" id="judulMateri" placeholder="..." name="email" value="<?php echo $akun->email; ?>">
            </div>
            <div class="form-group">
                <div class="col-sm-2">Gambar</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/') . $akun->image; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Pilih file</label>
                            </div>
                        </div>
                    </div>
                </div>

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