<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Order_controller extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
      $this->load->view("template/header");
      $this->load->view("order_pos");
      $this->load->view("template/footer");
  }
}
