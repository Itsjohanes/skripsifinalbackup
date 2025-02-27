    <style>
        .custom-file-input::-webkit-file-upload-button {
            visibility: hidden;
        }
        .custom-file-input {
            width: 70%; /* Sesuaikan dengan persentase lebar yang diinginkan */
            max-width: 300px; /* Atur lebar maksimal jika perlu */
        }
        .custom-file-input::before {
            content: 'Pilih File';
            display: inline-block;
            background: #007bff;
            color: white;
            border: 1px solid #007bff;
            border-radius: 5px;
            padding: 8px 12px;
            outline: none;
            white-space: nowrap;
            cursor: pointer;
            font-weight: 700;
        }

        .custom-file-input:hover::before {
            border-color: #0056b3;
        }

        .custom-file-input:active::before {
            background: #0056b3;
        }
    </style>
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">File Manager Kelompok</h6>
                </div>
            </div>
            <div class="card-body">
                <div class="container mt-4">
                    <?php
                    $base_url_upload = 'FileManager/upload/'.$kelompok['kelompok'];
                    $base_url_delete = 'FileManager/delete/'.$kelompok['kelompok'].'/';
                    ?>
                    <form action="<?= base_url($base_url_upload) ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="file">Pilih File [Zip dan Json]:</label>
                            <div class="input-group input-group-outline">
                                 <input type="file" class="form-control custom-file-input" name="file" accept=".json,.zip" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-upload"></i> Upload</button>
                    </form>

                    <hr>

                    <h3>Daftar File:</h3>
                    <ul>
                        <?php foreach($files as $file): ?>
                            <li><?= $file ?>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="<?= base_url($base_url_delete) . $file?>" class="btn btn-danger hapus-btn">
                                        <i class="fas fa-trash-alt"></i> 
                                    </a>
                                    <a href="<?= base_url('FileManager/download/'.$kelompok['kelompok'].'/'.$file) ?>" class="btn btn-success">
                                        <i class="fas fa-download"></i> 
                                    </a>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
