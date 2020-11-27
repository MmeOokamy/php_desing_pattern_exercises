<?php
  class PagesController
  {
    public function home()
    {
        $pseudo = 'comcombre De Mer';
      require_once('views/pages/home.php');
    }

    public function error()
    {
      require_once('views/pages/error.php');
    }
  }