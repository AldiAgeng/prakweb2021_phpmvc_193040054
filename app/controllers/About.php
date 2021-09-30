<?php 
class About{
  public function index($nama = 'Aldi Ageng', $pekerjaan = 'Pelajar'){
    echo "Hallo nama saya $nama, Saya adalah seorang $pekerjaan";
  }
  public function page(){
    echo 'About/page';
  }
}