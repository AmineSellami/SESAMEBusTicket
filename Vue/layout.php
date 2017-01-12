<DOCTYPE html>
<html>
  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>

  <div class="navbar navbar-inverse navbar-static-top" id="nav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <div class="navbar-brand">SESAME BUS</div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="?controller=pages&action=home">Home</a></li>
          <li><a href="">Contact</a></li>
          <?php
          if(isset($_SESSION['role'])){
            echo '<li><a href="?controller=reservation&action=getReservation&id='.$_SESSION['id'].'">reservation</a></li>';
            echo '<li><a href="?controller=passengers&action=toProfile">'.$_SESSION['id'].'</a></li>';
          }else{
            echo '<li><a href="?controller=passengers&action=toLogin">Connexion</a></li>';
          }

          ?>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
  </div><!--/.navbar -->

  <div class="container">
    <?php require_once('routes.php'); ?>
  </div>
  </body>

<html>