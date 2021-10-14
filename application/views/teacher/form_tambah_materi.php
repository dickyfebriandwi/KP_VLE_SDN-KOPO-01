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
            <label for="exampleInputEmail1">Judul Materi</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="...">
            <small id="emailHelp" class="form-text text-muted">Contoh :  Subtema 1 :  Pembelajaran 1.1</small>
    </div>
    <div class="form-group">
        <div class="custom-file col-4">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Pilih file materi</label>
        </div>
    </div>
    <div class="form-group">
        <a class="btn btn-primary" href="#" role="button">Kembali</a>
        <a class="btn btn-success" href="#" role="button">Simpan</a>
    </div>
        
    </form>

</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->