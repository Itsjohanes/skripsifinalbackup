<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata("message");
    ?>
</div>
<!-- /.container-fluid -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
        <?php echo form_open_multipart('MenilaiPertemuan/runMenilai'); ?>
        <div class="form-group">

            <input type="hidden" class="form-control" id="id_hasiltugas" name="id_hasiltugas" value="<?php echo $pertemuan['id_hasiltugas'];  ?>">
            <input type="hidden" class="form-control" id="pertemuan" name="pertemuan" value="<?php echo $pertemuan['id_pertemuan'];  ?>">
            <label for="text">Hasil Tugas</label>
            </br>
            <textarea id="textArea" class="form-control" disabled name="text" rows="3"><?php echo $pertemuan['text']; ?></textarea>
            </br>
            <label for="text">File</label><br>
            <a href="<?= base_url(); ?>assets/tugassiswa/<?= $pertemuan['upload']; ?>" <i class="fas fa-file-pdf"></i></a>
            <br>
            <label for="text">Tanggal Pengumpulan</label><br>
            <div class="input-group input-group-outline">
                <input type="text" class="form-control" id="tgl_pengumpulan" disabled name="tgl_pengumpulan" value="<?php echo $pertemuan['created_at'];  ?>">
            </div>
            <label for="text">Tanggal Perbaikan</label><br>
            <div class="input-group input-group-outline">
                <input type="text" class="form-control" id="tgl_perbaikan" disabled name="tgl_perbaikan" value="<?php echo $pertemuan['updated_at'];  ?>">
            </div>
            <label for="text">Tanggal Penilaian</label><br>
            <div class="input-group input-group-outline">
                <input type="text" class="form-control" id="tgl_penilaian" disabled name="tgl_penilaian" value="<?php echo $pertemuan['scored_at'];  ?>">
            </div>
            <label for="link">Nilai</label>
            <div class="input-group input-group-outline">
                <input type="text" class="form-control" id="nilai" name="nilai" value="<?php echo $pertemuan['nilai'];  ?>">
            </div>


            <label for="nilai">Komentar</label>
            <div class="input-group input-group-outline">
                <input type="text" class="form-control" id="komentar" name="komentar" value="<?php echo $pertemuan['komentar'];  ?>">
            </div>



        </div>

        <button type="submit" class="btn btn-primary">Menilai</button>
        </form>
    </div>
</div>

</div>
<!-- End of Main Content -->