<?php
  class PagesController {
    public function home() {
      require_once('/Vue/public/home.php');
    }

    public function error() {
      require_once('/Vue/pages/error.php');
    }
  }
?>