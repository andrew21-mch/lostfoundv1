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
                    <li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-dark-2 u-text-grey-90 u-text-hover-palette-4-dark-2" href="/" style="padding: 10px;">home</a></li>       
                    <li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-dark-2 u-text-grey-90 u-text-hover-palette-4-dark-2" href="/found" style="padding: 10px;">Found</a></li>
                    @if(Session::has('role'))
                    <li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-dark-2 u-text-grey-90 u-text-hover-palette-4-dark-2" href="/dashboard" style="padding: 10px;">Dashboard</a></li>       
                    <li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-dark-2 u-text-grey-90 u-text-hover-palette-4-dark-2" href="logout" style="padding: 10px;">Logout</a></li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>

    <div class="cont" style="height: 100vh;">
        @yield('content')
    </div>

    <!--Section: Contact v.2-->
<section class="row mb-4 cont" style="margin: auto; background-color:antiquewhite; padding-bottom: 3%;">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row col-md-10 m-auto" style="background-color: white; padding: 3%; border-radius: 3%;">

        <!--Grid column-->
        <div class="col-md-7 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                             <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                           
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                           
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary col-md-7" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>San Francisco, CA 94126, USA</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->

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
                  Some Information about the project
                  </p>
              </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                Features
                </h6>
                <p>
                <a href="#!" class="text-reset">Find Lost Items</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Contact Us</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Request Item</a>
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