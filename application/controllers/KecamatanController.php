<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KecamatanController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->template->load('main/app', 'kecamatan/index', [
      'title' => 'Kecamatan',
      'page_title' => 'Data Kecamatan'
    ]);
  }
}
