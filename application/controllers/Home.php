<?php
class Home extends CI_Controller
{
  public function index()
  {
    $this->load->view('home');
  }
  public function test(){
    $this->load->view('test');
  }
}
