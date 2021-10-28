<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle ?></h1>

    <form class="user" method="post" action="<?= base_url('admin/proses_tambah_kelas') ?>">
        <div class="form-group">
            <div class="form-row">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Kelas</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="tingkat">
                        <option selected value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Rombongan Belajar</label>
            <input type="text" class="form-control col-9" id="judulMateri" name="rombel" placeholder="...">
            <small id="contohJudul" class="form-text text-muted">Contoh Rombel : A</small>
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Tambah Kelas
                    </button>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
        <div class="form-group">
            <a class="btn btn-primary" href="<?= base_url(); ?>teacher/materi" role="button">Kembali</a>
        </div>

    </form>

</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->