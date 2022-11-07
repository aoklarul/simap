<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KelurahanController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->template->load('main/app', 'kelurahan/index', [
      'title' => 'Kelurahan',
      'page_title' => 'Data Kelurahan'
    ]);
  }
}
