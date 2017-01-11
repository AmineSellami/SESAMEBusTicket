<DOCTYPE html>
<html>
  <head>
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.6 -->
      <link rel="stylesheet" href="/BusTicket/Vue/assets/bootstrap/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="/BusTicket/Vue/assets/dist/css/AdminLTE.min.css">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="/BusTicket/Vue/assets/dist/css/skins/_all-skins.min.css">
      <!-- iCheck -->
      <link rel="stylesheet" href="/BusTicket/Vue/assets/plugins/iCheck/flat/blue.css">
      <!-- Morris chart -->
      <link rel="stylesheet" href="/BusTicket/Vue/assets/plugins/morris/morris.css">
      <!-- jvectormap -->
      <link rel="stylesheet" href="/BusTicket/Vue/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
      <!-- Date Picker -->
      <link rel="stylesheet" href="/BusTicket/Vue/assets/plugins/datepicker/datepicker3.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="/BusTicket/Vue/assets/plugins/daterangepicker/daterangepicker.css">
      <!-- bootstrap wysihtml5 - text editor -->
      <link rel="stylesheet" href="/BusTicket/Vue/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
      
      <div class="main-sidebar">
        <!-- Inner sidebar -->
        <div class="sidebar">
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <li><a href='?controller=passengers&action=index'><span>Passengers</span></a></li>
            <li><a href='?controller=bus&action=index'><span>Buses</span></a></li>
            <li><a href='?controller=route&action=index'><span>Routes</span></a></li>
            <li><a href='?controller=reservation&action=index'><span>Reservations</span></a></li>
          </ul><!-- /.sidebar-menu -->
        </div><!-- /.sidebar -->
      </div><!-- /.main-sidebar -->

      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <?php require_once('routes.php'); ?>
        </section>
      </div>

      <footer>
          Copyright
      </footer>

  </div>
  </body>

<html>