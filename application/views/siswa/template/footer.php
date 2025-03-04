<footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.johanesalexanderputra.my.id" class="font-weight-bold" target="_blank">Johannes Alexander Putra</a>
               
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.johanesalexanderputra.my.id" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="http://jap.my.id" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Algoritma dan Pemrograman</h5>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
       
        </div>
      </div>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="<?php echo base_url('assets/js/core/popper.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/core/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/perfect-scrollbar.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/smooth-scrollbar.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/chartjs.min.js');?>"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="<?php echo base_url('assets/js/material-dashboard.min.js?v=3.1.0');?>"></script>

  <!--Data tables -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <script src="<?= base_url('assets/backend/vendor/datatables/'); ?>jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/backend/vendor/datatables/'); ?>dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets/backend/js/demo/'); ?>datatables-demo.js"></script>
  <!--Button hapus -->
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const hapusBtns = document.querySelectorAll('.hapus-btn');

    hapusBtns.forEach((btn) => {
      btn.addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah link diikuti sebelum konfirmasi

        // Gunakan SweetAlert2 untuk menampilkan kotak konfirmasi
        Swal.fire({
          title: 'Konfirmasi Hapus',
          text: 'Apakah Anda yakin ingin menghapus data ini?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Hapus',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = btn.getAttribute('href'); // Mengikuti link jika "Hapus" diklik
          }
        });
      });
    });
  });
  </script>
  <!--Loader-->
  <script>
      $(function () {
        if (renderPage) {
          $("body").addClass("loaded");
        }
      });
 </script>

</body>

</html>