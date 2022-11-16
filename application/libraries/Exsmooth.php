<?php

class Exsmooth
{

    protected $constant = [];

    public function __construct()
    {
        $this->set_constant();
    }

    public function hitung($data)
    {

        $Fb     = 0;
        $Yb     = 0;
        $res    = [];
        $totalData = count($data);
        $a      = 0.1;

        foreach ($data as $k => $v) {
            $periode = $this->ThBulanIndo($v['year'] . '-' . $v['month']);
            #Rumus Single Exsponential Smoothing
            #????????+1 = ????X???? + (1 − ????)????b
            if ($k == 0) {
                $F = $v['value'];
            } else {
                $F = ($a * $Yb) + ((1 - $a) * $Fb);
            }

            $res[$k] = [
                'n'         => $k + 1,
                'periode'   => $periode,
                'xt'        => $v['value'],
                'ft'        => round($F, 2)

            ];

            #menambahkan 1 data ke depan
            if ($k == ($totalData - 1)) {
                #Hitung 1 data ke depan
                $last = $k + 1;
                $periode = $this->ThBulanIndo(date('Y-m', strtotime("+1 MONTHS", strtotime($v['year'] . '-' . $v['month']))));
                $Yb  = $v['value'];
                $Fb  = $F;
                $F   = ($a * $Yb) + ((1 - $a) * $Fb);

                $res[$last] = ['n' => $k + 2, 'periode' => $periode, 'xt' => 0, 'ft' => round($F, 2)];
            }

            $Yb = $v['value'];
            if ($k == 0) {
                $Fb = $v['value'];
            } else {
                $Fb = $F;
            }
        }

        $results = $res;

        return $results;
    }

    public function set_constant()
    {
        $this->constant = ["0.1", "0.2", "0.3", "0.4", "0.5", "0.6", "0.7", "0.8", "0.9"];
    }

    public function get_constant()
    {
        return $this->constant;
    }

    public function ThBulanIndo($date, $format = 'Y-m-d')
    {
        $f  = date('Y-m-d', strtotime($date));
        $ex = explode("-", $f);
        $Y  = $ex[0];
        $m  = $ex[1];
        $d  = $ex[2];

        switch ($m) {
            case '01':
                $bulan = 'Januari';
                break;
            case '02':
                $bulan = 'Februari';
                break;
            case '03':
                $bulan = 'Maret';
                break;
            case '04':
                $bulan = 'April';
                break;
            case '05':
                $bulan = 'Mei';
                break;
            case '06':
                $bulan = 'Juni';
                break;
            case '07':
                $bulan = 'Juli';
                break;
            case '08':
                $bulan = 'Agustus';
                break;
            case '09':
                $bulan = 'September';
                break;
            case '10':
                $bulan = 'Oktober';
                break;
            case '11':
                $bulan = 'November';
                break;
            case '12':
                $bulan = 'Desember';
                break;
        }

        return $Y . ' ' . $bulan;
    }
}
