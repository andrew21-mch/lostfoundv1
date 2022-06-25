<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
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
<body>
  {{-- @if(Session::get('role')=='school') --}}

  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">LAF</span>
    </div>
      <ul class="nav-links">
        @if(Session::has('role'))
        <li>
          <a href="#">
            <i class='bx bx-grid-alt' ></i>
            <span class="admin_name">Hello {{Session::get('role')}}</span>
          </a>
        </li>
        @endif
        <li>
          <a href="/register">
            <i ><span class="iconify" data-icon="fa-solid:chalkboard-teacher" style="color: white;"></span></i>
            <span class="links_name">Add Admins</span>
          </a>
        </li>
        <li>
          <a href="/register">
            <i ><span class="iconify" data-icon="fa-solid:chalkboard-teacher" style="color: white;"></span></i>
            <span class="links_name">Add Items</span>
          </a>
        </li>
        <li>
          <a href="/create/category">
            <i ><span class="iconify" data-icon="fa-solid:chalkboard-teacher" style="color: white;"></span></i>
            <span class="links_name">Add Category</span>
          </a>
        </li>
        <li>
          <a href="/create/school">
            <i ><span class="iconify" data-icon="fa-solid:chalkboard-teacher" style="color: white;"></span></i>
            <span class="links_name">Add Schools</span>
          </a>
        </li>
        <li>
          <a href="/viewitems">
            <i><span class="iconify" data-icon="noto:man-student-medium-dark-skin-tone" data-rotate="180deg" data-flip="vertical"></span></i>
            </i>
            <span class="links_name">View Items</span>
          </a>

        </li>
        <li>
          <a href="/viewlogs">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">View Logs</span>
          </a>
        </li>
        <li class="log_out">
          <a href="/logout">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <form class="" action="/search" method="get">
          <input type="text" name="search" placeholder="Search" style="height:40px">
          <button type="submit" class='bx bx-search' style="border-style:none;"></button>
        </form>

      </div>
      @if(Session::has('user'))
        <div class="dropdown">
         <button class="dropbtn">Hello {{Session::get('role')}}</button>
         <div class="dropdown-content">
           <a href="/logout">Logout</a>
           <a href="/profile_view/{{Session::get('userid')}}">Update</a>
         </div>
       </div>
    @endif
    </nav>
        <div class="container" >
           @yield('content')
         </div>
    <footer class="text-center text-lg-start bg-light text-muted">
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
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                Useful links
                </h6>
                <p>
                <a href="#!" class="text-reset">Pricing</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Settings</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Orders</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Help</a>
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