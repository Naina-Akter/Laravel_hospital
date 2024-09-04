<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta extension() />
  <title>Admin</title>

  <!-- theme meta -->
  <meta name="theme-name" content="mono" />

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="{{asset('assets/plugins/material/css/materialdesignicons.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />

  <!-- assets/plugins CSS STYLE -->
  <link href="{{asset('assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css')}}" rel="stylesheet" />

  <link href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css')}}" rel="stylesheet">

  <link href="{{asset('assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
  <link href="{{asset('assets/css/mycsss.css')}}" rel="stylesheet" />
  <!-- FAVICON -->
  <link href="{{asset('assets/images/favicon.png')}}" rel="shortcut icon" />
 
  <script src="{{asset('assets/plugins/nprogress/nprogress.js')}}"></script>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>


<body class="navbar-fixed sidebar-fixed" id="body">
  <script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
  </script>

 
  <div class="wrapper">
 
    @include('layouts.sidebar')


 
    <div class="page-wrapper">

      <!-- Header -->
     
          @include('layouts.header')
      
          @yield('page')

      <!-- Footer -->
          @include('layouts.footer')

    </div>
  </div>
 
  <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/plugins/simplebar/simplebar.min.js')}}"></script>
  <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js')}}"></script>
  <script src="{{asset('assets/plugins/apexcharts/apexcharts.js')}}"></script>
  <script src="{{asset('assets/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
  <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
  <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea.js')}}"></script>
  <script src="{{asset('assets/plugins/daterangepicker/moment.min.js')}}"></script>
  <script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <script>
    jQuery(document).ready(function () {
      jQuery('input[name="dateRange"]').daterangepicker({
        autoUpdateInput: false,
        singleDatePicker: true,
        locale: {
          cancelLabel: 'Clear'
        }
      });
      jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
        jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
      });
      jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
        jQuery(this).val('');
      });
    });
  </script>



  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>



  <script src="{{asset('assets/plugins/toaster/toastr.min.js')}}"></script>



  <script src="{{asset('assets/js/mono.js')}}"></script>
  <script src="{{asset('assets/js/chart.js')}}"></script>
  <script src="{{asset('assets/js/map.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>




  <!--  -->


</body>

</html>