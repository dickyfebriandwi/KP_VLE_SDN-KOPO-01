<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <!-- Page Heading -->

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kelasmu Sekarang
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                foreach ($kelas as $kls) {
                                    if ($kls['id'] == $user['kelas_id']) {
                                        echo "Kelas " . $kls['tingkat'] . " Rombel " . $kls['rombel'];
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tasks Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tugas (Belum selesai)
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <?php
                                        $i = 0;
                                        foreach ($penugasan as $pngs) {
                                            if ($pngs['kelas_id'] == $user['kelas_id']) {
                                                foreach ($statusT as $st) {
                                                    if ($st['user_id_siswa'] == $user['id'] && $st['date_updated'] == null) {
                                                        $i++;
                                                    }
                                                }
                                            }
                                        }
                                        echo $i; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Kuis (Belum selesai)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $i = 0;
                                foreach ($kuis as $ks) {
                                    if ($ks['kelas_id'] == $user['kelas_id']) {
                                        foreach ($statusK as $st) {
                                            if ($st['user_id_siswa'] == $user['id'] && $st['date_updated'] == null) {
                                                $i++;
                                            }
                                        }
                                    }
                                }
                                echo $i; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-paste fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>