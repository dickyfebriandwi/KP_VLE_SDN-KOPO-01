<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Inisialisasi -->
    <?php $tenggat = $kuis->due_date ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $kuis->judul_kuis ?></h1>
    <h1 class="h3 mb-4 text-gray-800">Tipe Soal : <?= $kuis->tipe_soal ?></h1>
    <h1 class="h3 mb-4 text-gray-800">Batas Penyelesaian : <?= $tenggat ?></h1>


    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Status</th>
                        <th scope="col">Waktu Penyelesaian</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($siswa as $sw) : ?>
                        <?php if ($sw['kelas_id'] == $user['kelas_id']) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $sw['nuptk_nisn']; ?></td>
                                <td><?= $sw['name']; ?></td>
                                <td><?php foreach ($status as $st) : ?>
                                        <?php if ($st['user_id_siswa'] == $sw['id']) : ?>
                                            <?php if ($st['date_updated'] == null) : ?>
                                                <button>Belum Mengerjakan</button>
                                            <?php elseif ($st['date_updated'] != null and $st['date_updated'] <= $tenggat) : ?>
                                                <button>Tepat Waktu</button>
                                            <?php elseif ($st['date_updated'] != null and $st['date_updated'] > $tenggat) : ?>
                                                <button>Terlambat</button>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </td>
                                <td><?php foreach ($status as $st) : ?>
                                        <?php if ($st['user_id_siswa'] == $sw['id']) : ?>
                                            <?= $st['date_updated'] ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </td>
                                <td><?php foreach ($nilai as $st) : ?>
                                        <?php if ($st['user_id_siswa'] == $sw['id']) : ?>
                                            <?= $st['nilai'] ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </td>
                                <td>
                                    <h5><?php foreach ($status as $st) : ?>
                                            <?php if ($st['user_id_siswa'] == $sw['id']) : ?>
                                                <?php if ($st['date_updated'] != null) : ?>
                                                    <button>Belum Mengerjakan</button>
                                                    <a href="<?= base_url(); ?>teacher/daftar_kuis_siswa_detail/<?= $ks['id']; ?>" class="badge badge-success"> Buka </a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>


                                    </h5>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->