<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    
    <form> *semua dropdown otomatis milih data yg sebelumnya udah dipilih/disimpan*
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
            <div class="col-1">
                <label>Pilih Tema</label>
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tema</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Tema 1</a>
                        <a class="dropdown-item" href="#">Tema 2</a>
                        <a class="dropdown-item" href="#">Tema 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
            <label for="exampleInputEmail1">Judul Materi</label> *nampilin data judul yg mau diubah*
            <input type="text" class="form-control col-9" id="judulMateri" placeholder="...">
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col-auto">
                <div class="custom-file col-auto">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Pilih file materi</label>
                </div>
            </div>
            <div class="col-auto">
                <a class="btn btn-success" href="#" role="button">Simpan</a>
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