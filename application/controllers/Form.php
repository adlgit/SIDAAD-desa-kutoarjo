<?php
class Form extends CI_Controller
{
  public function index()
  {
    // $this->load->view();
    echo "form/index";
  }

  public function ketStatus()
  {
    $this->load->view('surat/ketStatus');
    $this->load->helper('form');
  }

  public function izinUsaha(){
    $this->load->view('surat/izinUsaha');
  }

  public function skck(){
    $this->load->view('surat/skck');
  }

  public function izinKeramaian(){
    $this->load->view('surat/izinKeramaian');
  }

  public function ketTidakMampu(){
    $this->load->view('surat/ketTidakMampu');
  }

  public function ketDomisili(){
    $this->load->view('surat/ketDomisili');
  }
  
  public function ketPenghasilan(){
    $this->load->view('surat/ketPenghasilan');
  }
  

}
