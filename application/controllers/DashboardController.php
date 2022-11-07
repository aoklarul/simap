<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->template->load('main/app', 'dashboard/index', [
            'title' => 'Dashboard',
            'page_title' => 'Pemetaan'
        ]);
    }
}
