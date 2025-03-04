

    <div class="container position-sticky z-index-sticky top-0">
      <div class="row">
        <div class="col-12">
          <!-- Navbar -->
          <nav
            class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4"
          >
            <div class="container-fluid ps-2 pe-0">
            
Algoritma Pemrograman   </a>
              <button
                class="navbar-toggler shadow-none ms-2"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navigation"
                aria-controls="navigation"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon mt-2">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
              </button>
              <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav mx-auto">
                 
                 
                  <li class="nav-item">
                    <a class="nav-link me-2" href="<?php echo base_url('Auth/register'); ?>">
                      <i
                        class="fas fa-user-circle opacity-6 text-dark me-1"
                      ></i>
                      Register
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-2" href="<?php echo base_url('Auth');?>">
                      <i class="fas fa-key opacity-6 text-dark me-1"></i>
                      Login
                    </a>
                  </li>
                </ul>
                <ul class="navbar-nav d-lg-flex d-none">
                  
                </ul>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>
      </div>
    </div>
    <main class="main-content mt-0">
      
      <div
        class="page-header align-items-start min-vh-100"
        style="
          background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');
        "
      >
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
          <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto">
              <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div
                  class="card-header p-0 position-relative mt-n4 mx-3 z-index-2"
                >
                  <div
                    class="bg-gradient-success shadow-info border-radius-lg py-3 pe-1"
                  >
                    <h4
                      class="text-white font-weight-bolder text-center mt-2 mb-0"
                    >
                      Login
                    </h4>
                   
                  </div>
                </div>
                <div class="card-body">
                  <form action="<?php echo base_url('Auth/login'); ?>" method="post">

                   <?= $this->session->flashdata("message");
                  ?>
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label"></label>
                      <input type="email" placeholder = "Email" name = "email" class="form-control" />
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <input placeholder = "Password" type="password" name = "password" class="form-control" />
                    </div>
                   
                    <div class="text-center">
                      <button
                        type="submit"
                        class="btn bg-gradient-success w-100 my-4 mb-2"
                      >
                        Login
                      </button>
                    </div>
                    <p class="mt-4 text-sm text-center">
                      Don't have an account?
                      <a
                        href="<?php echo base_url('Auth/Register'); ?>"
                        class="text-info text-gradient font-weight-bold"
                        >Register</a
                      >
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer position-absolute bottom-2 py-2 w-100">
          <div class="container">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-12 col-md-6 my-auto">
                <div
                  class="copyright text-center text-sm text-white text-lg-start"
                >
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with <i class="fa fa-heart" aria-hidden="true"></i> by
                  <a
                    href="https://www.johanesalexanderputra.my.id"
                    class="font-weight-bold text-white"
                    target="_blank"
                    >Johannes Alexander Putra</a
                  >
                </div>
              </div>
              <div class="col-12 col-md-6">
                <ul
                  class="nav nav-footer justify-content-center justify-content-lg-end"
                >
                  <li class="nav-item">
                  </li>
                  <li class="nav-item">
                    <a
                      href="https://www.johanesalexanderputra.my.id"
                      class="nav-link text-white"
                      target="_blank"
                      >About Us</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      href="http://jap.my.id"
                      class="nav-link text-white"
                      target="_blank"
                      >Blog</a
                    >
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
