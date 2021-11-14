<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tugas <?php foreach ($penugasan as $pngs){
        if($pngs['id'] == $tugas['penugasan_id']){
            echo $pngs['judul_penugasan'];
        }
    }?></h1>
    <h5 class="h5 mb-4 text-gray-800">
        <?php foreach ($akun as $ak) : ?>
            <?php
            if ($ak['id'] == $tugas['user_id']) {
                echo "Nama Siswa : " . $ak['name'];
            } ?>
        <?php endforeach; ?></h5>
    
    <div class="row">
        <div class="col">
            <iframe src="<?= $tugas['url']; ?>" style="width: 100%;height: 500px;"></iframe>
        </div>
    </div>
    <br>
    
    <?php echo form_open_multipart(site_url('teacher/proses_nilai_tugas/') . $tugas['id']); ?>
    <form class="form-inline" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Nilai
                    </div>
                </div>
                <input type="text" class="form-control col-2" id="inlineFormInputGroupUsername2" value="<?= $tugas['nilai'] ?>">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
            
        </div>
        
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="<?= base_url(); ?>teacher/buka_daftar_tugas/<?php
                                                                                                foreach ($penugasan as $pngs) :
                                                                                                    if ($tugas['penugasan_id'] == $pngs['id']) {
                                                                                                        echo $pngs['id'];
                                                                                                    }
                                                                                                endforeach; ?>" role="button">Kembali</a>
            </div>
        </div>
        <?php echo form_close() ?>
    </form>
    
</div>

