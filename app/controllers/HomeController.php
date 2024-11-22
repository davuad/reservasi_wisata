<?php
// app/controllers/HomeController.php

class HomeController {
  private $home;

    public function __construct()
    {
        // Menampilkan halaman index.php
        require_once '../app/views/home/index.php';
    }
}
