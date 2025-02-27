<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

    .table-responsive td {
        word-wrap: break-word;
        white-space: normal;
    } 
</style>
  <script>
    angular.module('myApp',['angularjs-datetime-picker']);
    angular.module('myApp').run(function($rootScope) {
      $rootScope.gmtDate = new Date('2015-01-01 00:00:00 -00:00');
    });
  </script>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
      <?= $this->session->flashdata("message");
                            ?>
 <div class="container-fluid py-4">

    <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Tambah Pertemuan</h6>
              </div>
            </div>
            <div class="card-body">
                <br>
                <?php echo form_open_multipart('KelolaPertemuan/tambahPertemuan'); ?>
                <div class="row">
                    <div class="col">
                    <label for = "pertemuan">Pertemuan</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <div class="input-group input-group-outline">
                        <input type="text" class="form-control" id="pertemuan" name="pertemuan">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <label for = "pertemuan">Tujuan Pembelajaran</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                    <div class="input-group input-group-outline">
                        <textarea class="form-control" required name = "tp" id = "tp"></textarea>
                    </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col">
                    <label for = "pertemuan">Penjelasan</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <div class="input-group input-group-outline">
                        <textarea class="form-control" required name = "penjelasan" id = "penjelasan"></textarea>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <label for = "pertemuan">Apersepsi</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <div class="input-group input-group-outline">
                        <textarea class="form-control" required name = "apersepsi" id = "apersepsi"></textarea>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <label for = "pertemuan">Gambar</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <div class="input-group input-group-outline">
                        <input type="file"  id="exampleFormControlFile1" name="gambar" />
                    </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                    <label for = "pertemuan">Dateline Tugas</label>
                    </div>
                </div>
                <div class="row" ng-app="myApp" ng-init="
                date1='01-01-2015 00:00:00';
                date2='Thu Jan 01 2015 00:00:00 GMT-0500 (EST)';
                date3='<?php echo date("Y-m-d H:i:s"); ?>';
                date4='2015-01-01';">
                        <input ng-model="date3" name="dateline-tgs" datetime-picker date-format="yyyy-MM-dd HH:mm:ss"  size="10"  /> <br/> <br/>
                 </div>


                <br>
                 <div class="row">
                    <div class="col">
                   <input type = "submit" class="btn btn-success"/>
                   </div>
                </div>
                </form>
            </div>
        </div>
        </div>




<div class="container-fluid py-4">

<div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Pertemuan</h6>
              </div>
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Pertemuan</th>
                                    <th scope="col">Penjelasan</th>
                                    <th scope="col">Tujuan Pembelajaran</th>
                                    <th scope="col">Apersepsi</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Dateline Tugas</th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Pertemuan</th>
                                    <th scope="col">Penjelasan</th>
                                    <th scope="col">Tujuan Pembelajaran</th>
                                    <th scope="col">Apersepsi</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Dateline Tugas</th>
                                    <th scope="col">Aksi</th>
                                    
                                </tr>
                            </tfoot>
                            <tbody>

                                <?php $i = 1; ?>
                                <?php foreach ($pertemuan as $j) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $j['pertemuan']; ?></td>
                                        <td><?= $j['penjelasan']; ?></td>
                                        <td>
                                        <?php  echo '<ul>' ;
                                        $tpItems = explode(',', $j['tp']);
                                        foreach ($tpItems as $item) {
                                            echo '<li>' . htmlspecialchars($item) . '</li>';
                                        }

                                         echo '</ul>'; ?>
                                        </td>
                                        <td>
                                        <?= $j['apersepsi'];?>
                                        </td>
                                        <td><img src="<?= base_url('assets/pertemuan/' . $j['gambar']) ?>" width = "150px" height = "100px" alt="Gambar"></img>
                                        <td><?= $j['dateline_tgs'];?></td>

                                        <td>
                                            <?php 
                                            if($j['aktif'] == '1'){
                                                echo '<a href="'.base_url('KelolaPertemuan/matikanPertemuan/'.$j['id_pertemuan']).'" class="btn btn-danger btn-sm">Nonaktifkan</a>';
                                            }else{
                                                echo '<a href="'.base_url('KelolaPertemuan/aktifkanPertemuan/'.$j['id_pertemuan']).'" class="btn btn-success btn-sm">Aktifkan</a>';
                                            }
                                            ?>
                                            <?php
                                                echo '<a href="'.base_url('KelolaPertemuan/editPertemuan/'.$j['id_pertemuan']).'" class="btn btn-warning btn-sm">Edit Pertemuan</a>';

                                            ?>
                                            <?php
                                                echo '<a href="'.base_url('KelolaPertemuan/deletePertemuan/'.$j['id_pertemuan']).'" class="btn btn-danger btn-sm hapus-btn">Hapus Pertemuan</a>';

                                            ?>
                                        </td>

                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>











</div>
<!-- End of Main Content -->
<!-- Page level plugins -->

 <script>
  document.getElementById('pretes').addEventListener('change', function() {
    document.getElementById('myForm').submit();
  });
</script>
