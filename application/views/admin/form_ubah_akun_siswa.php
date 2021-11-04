<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle ?></h1>

    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">NISN</label>
            <input type="text" class="form-control col-9" id="judulMateri" placeholder="...">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control col-9" id="judulMateri" placeholder="...">
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col-1">
                    <label>Pilih Kelas</label>
                </div>
                <div class="col-1">
                    <div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kelas</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Kelas 1</a>
                            <a class="dropdown-item" href="#">Kelas 2</a>
                            <a class="dropdown-item" href="#">Kelas 3</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat e-mail</label>
            <input type="text" class="form-control col-9" id="judulMateri" placeholder="...">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="password" class="form-control col-9" id="judulMateri" placeholder="">
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col-auto">
                    <a class="btn btn-success" href="#" role="button">Simpan</a>
                </div>
            </div>
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