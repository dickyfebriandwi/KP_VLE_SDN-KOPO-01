<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo $materi['nama_file']; ?></h1>

    <a class="btn btn-primary" href="<?= base_url(); ?>teacher/materi" role="button">Kembali</a>
    <br><br>
    <iframe src="<?= $materi['file_materi']; ?>" style="width: 100%;height: 500px;"></iframe>
    <br>



</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->