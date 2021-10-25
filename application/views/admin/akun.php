<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
<<<<<<< Updated upstream
    <div class="row">
        <div class="col-2">
            <a href="<?= base_url(); ?>admin/akun_guru" class="btn btn-primary mb-3">Lihat Tabel Guru</a>
        </div>
        <div class="col-2">
            <a href="<?= base_url(); ?>admin/akun_siswa" class="btn btn-primary mb-3">Lihat Tabel Siswa</a>
        </div>
    </div>
=======
    
    <div class="row">
        <div class="col-lg-6">
            <a href="<?= base_url('admin/buka_halaman_akun_guru'); ?>" class="btn btn-primary btn-lg btn-block btn-huge">Kelola Akun Guru</a>
        </div>
        <div class="col-lg-6">
            <a href="<?= base_url('admin/buka_halaman_akun_siswa'); ?>" class="btn btn-primary btn-lg btn-block btn-huge">Kelola Akun Siswa</a>
        </div>
    </div>
    
>>>>>>> Stashed changes

</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->