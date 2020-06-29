<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    @include('backend.inc.css')
</head>
<body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      @include('backend.inc.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('backend.inc.sider')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->


            @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
              </span>
          </div>
      </footer>
      <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('backend/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('backend/vendors/js/vendor.bundle.addons.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('backend/js/shared/off-canvas.js')}}"></script>
<script src="{{asset('backend/js/shared/misc.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('backend/js/demo_1/dashboard.js')}}"></script>
<!-- End custom js for this page-->
<script src="{{asset('backend/js/toastr.min.js')}}"></script>
<script>
    @if (Session::has('success'))
    toastr.success("{{Session::get('success')}}")
    {{-- expr --}}
    @endif
    @if (Session::has('info'))
    toastr.info("{{Session::get('info')}}")
    {{-- expr --}}
    @endif

</script>
<script>
    $(document).ready(function() {
      $('#summernote').summernote();
  });
</script>
</body>
</html>
