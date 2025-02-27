<div class="container">

    <div class="card o-hidden border-0  my-5 col-lg-7 margin mx-auto">
        <div class="card-body p-0">

            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Edit Account!</h1>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <form class="user" method="post" action="<?= base_url('KelolaListSiswa/runEditSiswa') ?>">

                            <div class=" form-group">
                                <label for="email">Email</label>
                                <div class="input-group input-group-outline">
                                <input type="text" required class="form-control form-control-user" id="email" placeholder="Email Address" name="email" value="<?= $siswa['email']; ?>" disabled>
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class=" form-group">
                                <label for="email">Nama</label>
                                <div class="input-group input-group-outline">
                                <input type="text" required class="form-control form-control-user" id="nama" placeholder="Nama" name="nama" value="<?= $siswa['nama']; ?>">
                            </div>
                            </div>
                            <div class=" form-group row">
                                <label for="email">Password</label>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="input-group input-group-outline">
                                    <input type="password" required class="form-control form-control-user" id="password1" placeholder="New Password" name="password1">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group input-group-outline">
                                    <input type="password" required class="form-control form-control-user" id="password2" placeholder="Repeat Password" name="password2">
                                </div>
                                </div>
                                <div>
                                    <input type="hidden" required class="form-control form-control-user" id="id" name="id" value="<?= $siswa['id']; ?>">

                                </div>
                            </div>
                            <div class=" form-group">
                                <label for="email">Role</label>
                                <div class="input-group input-group-outline">
                                    <select required class="form-control form-control-user" name = "role">
                                        <?php
                                            if($siswa['role'] == '0'){
                                                echo '<option selected value = "0"> Siswa </option>';
                                                echo '<option  value = "1"> Admin </option>';
                                            }else{
                                                echo '<option  value = "0"> Siswa </option>';
                                                echo '<option selected value = "1"> Admin </option>';
                                            }
                                        ?>
                                        
                                        
                                    </select>
                                </div>
                            </div>
                            </br>

                            <Button type="submit" class="btn btn-primary btn-user btn-block">
                                Edit Account
                            </Button>


                        </form>
                        <hr>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>