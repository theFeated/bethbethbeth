<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content" class="min-vh-100">

        <!-- Topbar -->
        @include('layouts.navbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid" style="max-width: 100%; overflow-x: hidden;">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
          </div>

          <div class="bg-light">
            @yield('contents')
          </div>

          <!-- Content Row -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


    <!-- Vendor JS Files -->
    <script src="{{ asset('portfolio_assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('portfolio_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('portfolio_assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('portfolio_assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('portfolio_assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('portfolio_assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('portfolio_assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('portfolio_assets/js/main.js') }}"></script>

</body>
</html>
