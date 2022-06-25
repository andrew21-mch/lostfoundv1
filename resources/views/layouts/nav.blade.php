<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Found</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Found.css" media="screen">
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard |!-->
    <link rel="stylesheet" href="{{URL::asset('css/admin.css')}}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <link rel="stylesheet" href="{{URL::asset('css/report.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/index.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body class="u-body u-xl-mode">
    <header class="u-clearfix u-header u-sticky u-sticky-e780 u-white u-header" id="sec-fee1">
        <nav class="navbar navbar-expand-lg">
            <p class="u-custom-font u-font-ubuntu u-text u-text-default u-text-palette-4-dark-2 u-text-1">Lost and Found</p>
            <div class="u-custom-menu u-nav-container">
                <ul class="u-custom-font u-font-source-sans-pro u-nav u-spacing-20 u-unstyled u-nav-1">
                    <li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-dark-2 u-text-grey-90 u-text-hover-palette-4-dark-2" href="home.html" style="padding: 10px;">home</a></li>       
                    <li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-dark-2 u-text-grey-90 u-text-hover-palette-4-dark-2" href="Found.html" style="padding: 10px;">Found</a></li>
                    @if(Session::has('role'))
                    <li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-dark-2 u-text-grey-90 u-text-hover-palette-4-dark-2" href="/dashboard" style="padding: 10px;">Dashboard</a></li>       
                    <li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-dark-2 u-text-grey-90 u-text-hover-palette-4-dark-2" href="logout" style="padding: 10px;">Logout</a></li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>

    <div class="cont" style="height: 75vh;">
        @yield('content')
    </div>

    <footer class="text-center text-lg-start bg-light text-muted" style="margin-top: 7%">
        <!-- Section: Social media -->
        <section
        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Right -->
        </section>
        <!-- Section: Social media -->
        <div class="text-center text-md-start mt-2">
            <div class="row mt-3">
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                  <h6 class="text-uppercase fw-bold mb-4">
                  <i class="fas fa-gem me-3"></i>Company name
                  </h6>
                  <p>
                  Here you can use rows and columns to organize your footer content. Lorem ipsum
                  dolor sit amet, consectetur adipisicing elit.
                  </p>
              </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                Products
                </h6>
                <p>
                <a href="#!" class="text-reset">Angular</a>
                </p>
                <p>
                <a href="#!" class="text-reset">React</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Vue</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Laravel</a>
                </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                Contact
                </h6>
                <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                <p>
                <i class="fas fa-envelope me-3"></i>
                info@example.com
                </p>
                <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
            </div>
            </div>

        </div>
        </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2022 Copyright:
    </div>
    <!-- Copyright -->
  </footer>


     <script>
      let sidebar = document.querySelector(".sidebar");
   let sidebarBtn = document.querySelector(".sidebarBtn");
   sidebarBtn.onclick = function() {
     sidebar.classList.toggle("active");
     if(sidebar.classList.contains("active")){
     sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
   }else
     sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
   }


    </script>
</html>