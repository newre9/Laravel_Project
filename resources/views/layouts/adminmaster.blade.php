<!DOCTYPE html>
<html>
    <head>
<title>@yield('title')</title>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin-page/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/admin-page/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/admin-page/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/admin-page/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin-page/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/admin-page/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/admin-page/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/admin-page/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

        </div>
        @guest
        @if (Route::has('register'))
        @endif
        @else
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          <a  href="{{ route('logout') }}"
onclick="event.preventDefault();
 document.getElementById('logout-form').submit();">
 {{ __('Logout') }}

 </a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
 @csrf
</form>
        </div>


    @endguest
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <!--  <a href="{{ url('admin') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>-->
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="/adminpage" class="nav-link">
                <i class="fas fa-home"></i>
              <p>
                Anasayfa

              </p>
            </a>

          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
			  <i class="nav-icon fas fa-copy"></i>
              <p>
                Projeler
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('orders/all') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bütün Projeler</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('orders/new') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Yeni Gelen Projeler</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('orders/prepare') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hazırlama aşaması Projeler</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('orders/completed') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tamamlanan Projeler</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('orders/cancelled') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>İptal Edilen Projeler</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
			  <i class="nav-icon far fa-envelope"></i>
              <p>
                Mesajlar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/contact-us') }}" class="nav-link" id="inbox">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gelen Mesajlar</p>
                </a>
              </li>

            </ul>
          </li>

		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
			  <i style="margin-left: 4px;" class="fas fa-users"></i>
              <p style="margin-left: 7px;">
                 Kullanıcılar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ url('admin/all') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Bütün Kullanıcılar</p>
                    </a>
                  </li>
              <li class="nav-item">
                <a href="{{ url('admin/admins') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Yöneticiler</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ url('admin/users') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kayıt olunan Kullanıcılar</p>
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

   <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->



@yield('content')


<footer class="main-footer">
    <strong>EnTrediting </strong>

    <div class="float-right d-none d-sm-inline-block">

    </div>
  </footer>


<!-- jQuery -->
<script src="/admin-page/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admin-page/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin-page/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin-page/js/demo.js"></script>



<!-- jQuery -->
<script src="/admin-page/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admin-page/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin-page/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin-page/js/demo.js"></script>
<!-- jQuery -->
<script src="/admin-page/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admin-page/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="/admin-page/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin-page/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/admin-page/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/admin-page/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
