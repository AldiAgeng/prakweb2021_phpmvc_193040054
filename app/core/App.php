<?php 

class App{
  public function __construct()
  {
    $url = $this->parseURL();
    var_dump($url);
  }

  public function parseURL(){
    if(isset($_GET['url'])){
      // Menghapus karakter /
      $url = rtrim($_GET['url'], '/');
      // Membersihkan dari karakter aneh
      $url = filter_var($url, FILTER_SANITIZE_URL);
      // pecah url dengan delimiter /
      $url = explode('/', $url);
      return $url;
    }
  }
}