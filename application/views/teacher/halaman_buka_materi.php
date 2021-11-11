<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo $materi['nama_file']; ?></h1>

    <iframe src="<?= $materi['file_materi']; ?>" style="width: 100%;height: 500px;"></iframe>
    <br>
    <a class="btn btn-primary" href="<?= base_url(); ?>teacher/materi/" role="button">Kembali</a>



</div>

<!-- /.container-fluid -->