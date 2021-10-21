<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    
    <form>
    <div class="form-group">
        <div class="form-row">
            <div class="col-12">
                    <label for="deskripsiPenugasan">Deskripsi Penugasan</label>
                    <textarea class="form-control col-9" id="deskripsiPenugasan" rows="3"></textarea>
            </div>
        </div>
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