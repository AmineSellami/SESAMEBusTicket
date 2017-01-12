<?php
  function call($controller, $action) {
    require_once('/Controleur/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
      case 'passengers':
        // we need the model to query the database later in the controller
        require_once('Model/Passenger.inc');
        $controller = new PassengersController();
      break;
      case 'admin':
        // we need the model to query the database later in the controller
        require_once('Model/Admin.inc');
        $controller = new AdminController();
        break;
    case 'route':
        // we need the model to query the database later in the controller
        require_once('Model/Route.inc');
        $controller = new RouteController();
        break;
    case 'bus':
        // we need the model to query the database later in the controller
        require_once('Model/Bus.inc');
        $controller = new BusController();
        break;
    case 'reservation':
        // we need the model to query the database later in the controller
        require_once('Model/Reserves.inc');
        $controller = new ReservationController();
        break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'error'],
                        'passengers' => ['index','delete','toCreate','create','toUpdate','update','toLogin','login','toSignup','signup','toProfile','disconnect'],
                        'admin' => ['index','login','delete','toCreate','create','toUpdate','update','disconnect'],
                        'bus' => ['index','delete','toCreate','create','toUpdate','update'],
                        'route' => ['index','delete','toCreate','create','toUpdate','update','getRoutes'],
                        'reservation' => ['index','delete','toCreate','create','toUpdate','update','getReservation','pay','toPay']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }