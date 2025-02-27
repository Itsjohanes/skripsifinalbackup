<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

</div>
<!-- /.container-fluid -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
        <?php echo form_open_multipart('KelolaYoutube/runEditYoutube'); ?>
        <div class="form-group">
            <input type="hidden" class="form-control" id="id_youtube" name="id_youtube" value="<?php echo $materi['id_youtube'];  ?>">
            <label for="link">Pertemuan</label>
            <div class="input-group input-group-outline">
            <input type="text" class="form-control" required id="pertemuan" name="pertemuan" value="<?php echo $materi['id_pertemuan'];  ?>">
            </div>
            <label for="nilai">Link Youtube</label>
            <div class="input-group input-group-outline">
            <input type="text" required class="form-control" id="youtube" name="youtube" value="<?php echo $materi['youtube'];  ?>">
            </div>
            <label for="nilai">Video</label>
            <br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $materi['youtube']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
             <div class="row">
                <div class="col">
                    <label for="pertemuan">Kategori</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="input-group input-group-outline">
                        &nbsp
                        <select class="form-control" required id="exampleFormControlSelect1" id="kategori" name="kategori">
                            <option value="Tugas" <?php echo ($materi['kategori'] == 'Tugas') ? 'selected' : ''; ?>>
                                Tugas
                            </option>
                            <option value="Materi" <?php echo ($materi['kategori'] == 'Materi') ? 'selected' : ''; ?>>
                                Materi
                            </option>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>

</div>
<!-- End of Main Content -->