<?php
  session_start();

  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    $controller = 'pages';
    $action     = 'home';
  }
  if(isset($_SESSION['role'])) {
    if ($_SESSION['role'] != 'admin') {
      require_once('Vue/layout.php');
    } else {
      require_once('Vue/layout_admin.php');
    }
  } else {
      require_once('Vue/layout.php');
  }