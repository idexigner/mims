<!DOCTYPE html>
<html lang="en">

    @include('admin.layout.header')


<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    
  </nav>
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
  @include('admin.layout.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('main-section')
    
  </div>
  <!-- /.content-wrapper -->
    @include('admin.layout.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ url('/')}}/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('/')}}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ url('/')}}/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('/')}}/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('/')}}/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ url('/')}}/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ url('/')}}/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ url('/')}}/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ url('/')}}/admin/plugins/jszip/jszip.min.js"></script>
<script src="{{ url('/')}}/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ url('/')}}/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ url('/')}}/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ url('/')}}/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ url('/')}}/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="{{ url('/')}}/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ url('/')}}/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('/')}}/admin/dist/js/demo.js"></script>

@stack('js-link')


</body>
</html>
