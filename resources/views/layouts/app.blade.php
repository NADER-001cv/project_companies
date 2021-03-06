

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ url('/') }}">
                Home
              </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">

              <ul class="navbar-nav mx-auto">

              </ul>

              <ul class="navbar-nav d-lg-block d-none">
                @if (Route::has('login'))

                <ul class="navbar-nav mx-auto">

                      @auth
                      <li class="nav-item">
                          <a class="nav-link me-2" href="#">
                            <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                            Profile
                          </a>
                        </li>
  
                      @else
                      
                  <li class="nav-item">
                    <a class="nav-link me-2" href="{{ route('login') }}">
                      <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                      Sign In
                    </a>
                  </li>
                  @if (Route::has('register'))
                  <li class="nav-item">
                    <a class="nav-link me-2" href="{{ route('register') }}">
                      <i class="fas fa-key opacity-6 text-dark me-1"></i>
                      Sign Up
                    </a>
                  </li>
                  @endif
              </ul>
              @endif
              @endauth
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>

