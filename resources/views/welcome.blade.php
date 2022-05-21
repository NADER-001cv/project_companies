

            @include('layouts.app')
            <main class="main-content  mt-0">
              <section>
                <div class="page-header min-vh-100">
                  <div class="container">
                    <div class="row">
                      <div class="col-12 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/office-dark.jpg'); background-size: cover;">

                            <h1><p style="color:white;Font-size:48pt;">Your Bright Future Starts Here Now</h1>
                              <h2><p style="color:white;Font-size:28pt;">Finding your next job or career on JobPortal</h2>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </section>
            </main>
            <!--   Core JS Files   -->
            <script src="../assets/js/core/popper.min.js"></script>
            <script src="../assets/js/core/bootstrap.min.js"></script>
            <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
            <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
            <script>
              var win = navigator.platform.indexOf('Win') > -1;
              if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                  damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
              }
            </script>
            <!-- Github buttons -->
            <script async defer src="https://buttons.github.io/buttons.js"></script>
            <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
            <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
          </body>

          </html>

