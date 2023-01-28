<?php

class Ses_pemetaan
{

    public function hitung($data, $kons)
    {

        $Fb     = 0;
        $Yb     = 0;
        $res    = [];
        $totalData = count($data);
        $a      = $kons;

        foreach ($data as $k => $v) {
            $periode = $this->ConvertPeriode($v['tahun'] . '-' . $v['bulan']);
            #Rumus Single Exsponential Smoothing
            #????????+1 = ????X???? + (1 − ????)????b
            if ($k == 0) {
                $F = $v['jumlah'];
            } else {
                $F = ($a * $Yb) + ((1 - $a) * $Fb);
            }

            $res[$k] = [
                'n'         => $k + 1,
                'id'       => $v['id'],
                'periode'   => $periode,
                'kel'       => $v['kelurahan'],
                'kec'       => $v['kecamatan'],
                'warna'       => $v['warna'],
                'geojson'       => $v['geojson'],
                'xt'        => $v['jumlah'],
                'ft'        => round($F, 2)

            ];

            #menambahkan 1 data ke depan
            if ($k == ($totalData - 1)) {
                #Hitung 1 data ke depan
                $last = $k + 1;
                $periode = $this->ConvertPeriode(date('Y-m', strtotime("+1 MONTHS", strtotime($v['tahun'] . '-' . $v['bulan']))));
                $Yb  = $v['jumlah'];
                $Fb  = $F;
                $F   = ($a * $Yb) + ((1 - $a) * $Fb);

                $res[$last] = ['n' => $k + 2, 'id' => $v['id'], 'periode' => $periode, 'kel' => $v['kelurahan'], 'kec' => $v['kecamatan'], 'warna' => $v['warna'], 'geojson' => $v['geojson'], 'xt' => 0, 'ft' => round($F, 2)];
            }

            $Yb = $v['jumlah'];
            if ($k == 0) {
                $Fb = $v['jumlah'];
            } else {
                $Fb = $F;
            }
        }

        $nowArray = array_slice($res, count($res) - 2, 1);

        $results = end($res);
        $results['jumlah_sekarang'] = $nowArray[0]['xt'];
        $results['periode_sekarang'] = $nowArray[0]['periode'];


        return $results;
    }

    public function ConvertPeriode($date, $format = 'Y-m-d')
    {
        $f  = date('Y-m-d', strtotime($date));
        $ex = explode("-", $f);
        $Y  = $ex[0];
        $m  = $ex[1];
        $d  = $ex[2];

        switch ($m) {
            case '1':
                $bulan = 'Januari';
                break;
            case '2':
                $bulan = 'Februari';
                break;
            case '3':
                $bulan = 'Maret';
                break;
            case '4':
                $bulan = 'April';
                break;
            case '5':
                $bulan = 'Mei';
                break;
            case '6':
                $bulan = 'Juni';
                break;
            case '7':
                $bulan = 'Juli';
                break;
            case '8':
                $bulan = 'Agustus';
                break;
            case '9':
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

        return $bulan . ' ' . $Y;
    }
}
