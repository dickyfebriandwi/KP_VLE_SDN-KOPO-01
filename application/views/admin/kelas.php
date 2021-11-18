<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle ?></h1>
    <div class="row">
        <div class="col-9">
            <a href="<?= base_url(); ?>admin/tambah_kelas" class="btn btn-primary mb-3">Tambah Kelas</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Tingkat</th>
                        <th scope="col">Rombel</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kelas as $kls) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $kls['tingkat']; ?></td>
                            <td><?= $kls['rombel']; ?></td>
                            <td>
                                <h5>
                                    <a href="<?= base_url(); ?>admin/ubah_kelas/<?= $kls['id']; ?>" class="badge badge-success"> Ubah </a>
                                    <a href="<?= base_url(); ?>admin/hapus_kelas/<?= $kls['id']; ?>" data-toggle="modal" data-target="#hapus_kelas<?= $kls['id']?>" class="badge badge-danger"> Hapus </a>
                                    
                                    <!-- Hapus Materi Modal-->
                                    <div class="modal fade" id="hapus_kelas<?= $kls['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Hapus kelas <?= $kls['tingkat']; ?></h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">Apakah Anda yakin mau menghapus kelas ini?</div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                                                        <a class="btn btn-danger" href="<?= base_url(); ?>admin/hapus_kelas/<?= $kls['id']; ?>">Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </h5>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

