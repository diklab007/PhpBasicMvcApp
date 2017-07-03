<?php
  class PagesController {
    public function home() {
      $first_name = 'Dikla';
      $last_name  = 'B007';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>