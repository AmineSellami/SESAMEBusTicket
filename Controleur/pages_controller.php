<?php
  class PagesController {
    public function home() {
    }

    public function error() {
      require_once('/Vue/pages/error.php');
    }
  }
?>