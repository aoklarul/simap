<?php


class Exs extends CI_Controller
{

  public function index()
  {
    $this->load->library("Exsmooth");

    $data = [
      [
        'year' => '2018',
        'month' => '01',
        'value' => 9518
      ],
      [
        'year' => '2019',
        'month' => '01',
        'value' => 9358
      ],
      [
        'year' => '2019',
        'month' => '02',
        'value' => 9342
      ],
      [
        'year' => '2019',
        'month' => '03',
        'value' => 9331
      ],
      [
        'year' => '2019',
        'month' => '04',
        'value' => 9458
      ],
      [
        'year' => '2020',
        'month' => '02',
        'value' => 8912
      ],
      [
        'year' => '2020',
        'month' => '03',
        'value' => 8979
      ],
      [
        'year' => '2020',
        'month' => '04',
        'value' => 9934
      ],
      [
        'year' => '2020',
        'month' => '05',
        'value' => 9977
      ],
      [
        'year' => '2020',
        'month' => '06',
        'value' => 9956
      ],
      [
        'year' => '2020',
        'month' => '07',
        'value' => 9823
      ],
      [
        'year' => '2020',
        'month' => '07',
        'value' => 9706
      ],
      [
        'year' => '2020',
        'month' => '07',
        'value' => 9960
      ]
    ];
    $ex = new Exsmooth();
    $hasil = $ex->hitung($data);

    $this->load->view('result', ['hasil' => $hasil]);
  }
}
