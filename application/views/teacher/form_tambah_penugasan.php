<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    
    <form>
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
            <label for="judulPenugasan">Judul Penugasan</label>
            <input type="text" class="form-control col-9" id="judulPenugasan" placeholder="...">
            <small id="contohJudul" class="form-text text-muted">CONTOH: Tugas Subtema 1 :  Pembelajaran 1.1</small>
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col-12">
                    <label for="exampleFormControlTextarea1">Deskripsi Penugasan</label>
                    <textarea class="form-control col-9" id="deskripsiPenugasan" rows="3"></textarea>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col-1">
                <a class="btn btn-primary" href="<?= base_url(); ?>teacher/penugasan" role="button">Kembali</a>
            </div>
            <div class="col">
                <a class="btn btn-success" href="#" role="button">Simpan</a>
            </div>   
        </div>
    </div>
    
    </form>

</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->