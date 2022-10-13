<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="Admin" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->



      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">

      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">



    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">Sachith Milanga</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item menu-open">
            <a href="/admin" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a>

          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="bi bi-file-earmark-plus-fill"></i>

              <p>
                Post
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/createpost" class="nav-link">
                  <i class="bi bi-plus-circle"></i>
                  <p>Create Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/viewallposts" class="nav-link">
                  <i class="bi bi-file-earmark-text"></i>
                  <p>View All Post</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="bi bi-list-ol"></i>

              <p>
                Series
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/createseries" class="nav-link active">
                  <i class="bi bi-plus-circle"></i>
                  <p>Create A Series</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/viewallseries" class="nav-link">
                  <i class="bi bi-file-earmark-text"></i>
                  <p>View All Series</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/contactadmin" class="nav-link">
              <i class="bi bi-chat-dots"></i>
              <p>
                Contact us

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/showadminaboutus" class="nav-link">
              <i class="bi bi-person-lines-fill"></i>
              <p>
                About us

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/customize" class="nav-link">
              <i class="bi bi-pencil-square"></i>
              <p>
                Customize Website

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="bi bi-sliders"></i>
              <p>
                Settings

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="bi bi-box-arrow-right"></i>
              <p>
                Log out

              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <h2>Create New Series</h2>
    <hr>
    <div class="col-8">

      @if(count($errors) > 0 )
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              Please Fill All Required Fields.!
          </div>
      @endif
      @if(session()->has('message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          {{ session()->get('message') }}
      </div>
      @endif
      <form action="/seriescreated" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="series cover image">Attach cover image</label>
          <input type="file" name="cover_image" class="form-control" placeholder="attach cover image">
        </div>

        <div class="form-group">
          <label for="seriestitle">Enter Series Title</label>
          <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="form-group">
          <label for="seriesdescription">Enter Series Description</label>
          <div class="form-group">

          <textarea class="form-control" name="description"  rows="3" placeholder="Enter Series Details"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="postdescription">Attach images</label>
          <input type="file" name="image_1" class="form-control" id="exampleFormControlInput1" placeholder="image_1">
          <input type="file" name="image_2" class="form-control" id="exampleFormControlInput1" placeholder="image_2">
          <input type="file" name="image_3" class="form-control" id="exampleFormControlInput1" placeholder="image_3">
          <input type="file" name="image_4" class="form-control" id="exampleFormControlInput1" placeholder="image_4">
          <input type="file" name="image_5" class="form-control" id="exampleFormControlInput1" placeholder="image_5">
          <input type="file" name="image_6" class="form-control" id="exampleFormControlInput1" placeholder="image_6">

        </div>
        <div class="">
          <button type="submit" class="btn btn-primary">create series</button>
          <button type="reset" class="btn btn-warning">Clear Details</button>

        </div>

      </form>
      </div>
  </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
