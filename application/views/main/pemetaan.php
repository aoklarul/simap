<script>
  <?php
  foreach ($kecamatan1 as $kec) {
    $arrayKecamatan[] = '{
            "id":"' . $kec['id'] . '",
            "periode":"' . $kec['periode'] . '",
            "kecamatan":"' . $kec['kec'] . '",
            "geojson":"' . $kec['geojson'] . '",
            "warna":"' . $kec['warna'] . '",
			      "diksi":"' . $kec['ft'] . '",
            "jumlah_sekarang":"' . $kec['jumlah_sekarang'] . '",
            "periode_sekarang":"' . $kec['periode_sekarang'] . '",
		
	}';
  } ?>
  const dataKecamatan = [<?= implode(',', $arrayKecamatan); ?>];

  <?php
  foreach ($kecamatan2 as $kec) {
    $arrayKecamatan2[] = '{
			      "diksi":"' . $kec['ft'] . '"
		
	}';
  } ?>
  const dataKecamatan2 = [<?= implode(',', $arrayKecamatan2); ?>];

  <?php
  foreach ($kecamatan3 as $kec) {
    $arrayKecamatan3[] = '{
			      "diksi":"' . $kec['ft'] . '"
		
	}';
  } ?>
  const dataKecamatan3 = [<?= implode(',', $arrayKecamatan3); ?>];

  <?php
  foreach ($kecamatan4 as $kec) {
    $arrayKecamatan4[] = '{
			      "diksi":"' . $kec['ft'] . '"
		
	}';
  } ?>
  const dataKecamatan4 = [<?= implode(',', $arrayKecamatan4); ?>];

  <?php
  foreach ($kecamatan5 as $kec) {
    $arrayKecamatan5[] = '{
			      "diksi":"' . $kec['ft'] . '"
		
	}';
  } ?>
  const dataKecamatan5 = [<?= implode(',', $arrayKecamatan5); ?>];

  <?php
  foreach ($kecamatan6 as $kec) {
    $arrayKecamatan6[] = '{
			      "diksi":"' . $kec['ft'] . '"
		
	}';
  } ?>
  const dataKecamatan6 = [<?= implode(',', $arrayKecamatan6); ?>];

  <?php
  foreach ($kecamatan7 as $kec) {
    $arrayKecamatan7[] = '{
			      "diksi":"' . $kec['ft'] . '"
		
	}';
  } ?>
  const dataKecamatan7 = [<?= implode(',', $arrayKecamatan7); ?>];

  <?php
  foreach ($kecamatan8 as $kec) {
    $arrayKecamatan8[] = '{
			      "diksi":"' . $kec['ft'] . '"
		
	}';
  } ?>
  const dataKecamatan8 = [<?= implode(',', $arrayKecamatan8); ?>];

  <?php
  foreach ($kecamatan9 as $kec) {
    $arrayKecamatan9[] = '{
			      "diksi":"' . $kec['ft'] . '"
		
	}';
  } ?>
  const dataKecamatan9 = [<?= implode(',', $arrayKecamatan9); ?>];


  const kecMap = L.map('mapKecamatan').setView([-0.027241, 109.341850], 12);

  const tilesKecamatan = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  });

  kecMap.addLayer(tilesKecamatan);

  function iconByName(name) {
    return '<i class="icon" style="background-color:' + name + ';border-radius:50%"></i>';
  }

  function getColorKecamatan(Kecamatan) {
    for (i in dataKecamatan) {

      if (dataKecamatan[i].kecamatan.toUpperCase() == Kecamatan) {
        return dataKecamatan[i].warna;
      }
    }
  }

  function popUp(f, l) {
    var htmlKecamatan = '';

    htmlKecamatan += '<table>';
    htmlKecamatan += '<tr>';
    htmlKecamatan += '<td>Kecamatan</td>';
    htmlKecamatan += '<td>:</td>';
    htmlKecamatan += '<td>' + dataKecamatan[i].kecamatan + '</td>';
    htmlKecamatan += '</tr>';
    htmlKecamatan += '<tr>';
    htmlKecamatan += '<td>Periode ' + dataKecamatan[i].periode_sekarang + '</td>';
    htmlKecamatan += '<td>:</td>';
    htmlKecamatan += '<td>' + dataKecamatan[i].jumlah_sekarang + '</td>';
    htmlKecamatan += '</tr>';
    htmlKecamatan += '<tr>';
    htmlKecamatan += '<td>Prediksi (0.1) ' + dataKecamatan[i].periode + '</td>';
    htmlKecamatan += '<td>:</td>';
    htmlKecamatan += '<td>' + dataKecamatan[i].diksi + '</td>';
    htmlKecamatan += '</tr>';
    htmlKecamatan += '<tr>';
    htmlKecamatan += '<td>Prediksi (0.2) ' + dataKecamatan[i].periode + '</td>';
    htmlKecamatan += '<td>:</td>';
    htmlKecamatan += '<td>' + dataKecamatan2[i].diksi + '</td>';
    htmlKecamatan += '</tr>';
    htmlKecamatan += '<tr>';
    htmlKecamatan += '<td>Prediksi (0.3) ' + dataKecamatan[i].periode + '</td>';
    htmlKecamatan += '<td>:</td>';
    htmlKecamatan += '<td>' + dataKecamatan3[i].diksi + '</td>';
    htmlKecamatan += '</tr>';
    htmlKecamatan += '<tr>';
    htmlKecamatan += '<td>Prediksi (0.4) ' + dataKecamatan[i].periode + '</td>';
    htmlKecamatan += '<td>:</td>';
    htmlKecamatan += '<td>' + dataKecamatan4[i].diksi + '</td>';
    htmlKecamatan += '</tr>';
    htmlKecamatan += '<tr>';
    htmlKecamatan += '<td>Prediksi (0.5) ' + dataKecamatan[i].periode + '</td>';
    htmlKecamatan += '<td>:</td>';
    htmlKecamatan += '<td>' + dataKecamatan5[i].diksi + '</td>';
    htmlKecamatan += '</tr>';
    htmlKecamatan += '<tr>';
    htmlKecamatan += '<td>Prediksi (0.6) ' + dataKecamatan[i].periode + '</td>';
    htmlKecamatan += '<td>:</td>';
    htmlKecamatan += '<td>' + dataKecamatan6[i].diksi + '</td>';
    htmlKecamatan += '</tr>';
    htmlKecamatan += '<tr>';
    htmlKecamatan += '<td>Prediksi (0.7) ' + dataKecamatan[i].periode + '</td>';
    htmlKecamatan += '<td>:</td>';
    htmlKecamatan += '<td>' + dataKecamatan7[i].diksi + '</td>';
    htmlKecamatan += '</tr>';
    htmlKecamatan += '<tr>';
    htmlKecamatan += '<td>Prediksi (0.8) ' + dataKecamatan[i].periode + '</td>';
    htmlKecamatan += '<td>:</td>';
    htmlKecamatan += '<td>' + dataKecamatan8[i].diksi + '</td>';
    htmlKecamatan += '</tr>';
    htmlKecamatan += '<tr>';
    htmlKecamatan += '<td>Prediksi (0.9) ' + dataKecamatan[i].periode + '</td>';
    htmlKecamatan += '<td>:</td>';
    htmlKecamatan += '<td>' + dataKecamatan9[i].diksi + '</td>';
    htmlKecamatan += '</tr>';
    htmlKecamatan += '</table>';
    htmlKecamatan += '<div class="text-center mt-3">';
    htmlKecamatan += '<a href="<?= site_url('prediksi-kecamatan?cari=') ?>' + dataKecamatan[i].id + '" target="_BLANK">Lihat Tabel</a>';
    htmlKecamatan += '</div>';

    l.bindPopup(htmlKecamatan);

  }

  for (i in dataKecamatan) {
    let layer = {
      name: dataKecamatan[i].kecamatan,
      icon: iconByName(dataKecamatan[i].warna),
      layer: new L.GeoJSON.AJAX(["<?= base_url('assets/geojson/kecamatan/') ?>" + dataKecamatan[i].geojson], {
        onEachFeature: popUp,
        style: function(feature) {
          let Kecamatan = feature.properties.KECAMATAN;
          return {
            "color": getColorKecamatan(Kecamatan),
            "weight": 1,
            "opacity": 1
          }

        },
      }).addTo(kecMap)
    }
  }
</script>

<script>
  <?php

  foreach ($kelurahan1 as $kel) {
    $arrayKelurahan[] = '{
            "id":"' . $kel['id'] . '",
            "periode":"' . $kel['periode'] . '",
            "kelurahan":"' . $kel['kel'] . '",
            "geojson":"' . $kel['geojson'] . '",
            "warna":"' . $kel['warna'] . '",
			      "diksi":"' . $kel['ft'] . '",
            "jumlah_sekarang":"' . $kel['jumlah_sekarang'] . '",
            "periode_sekarang":"' . $kel['periode_sekarang'] . '",
		
	}';
  } ?>
  const dataKelurahan = [<?= implode(',', $arrayKelurahan); ?>];

  <?php
  foreach ($kelurahan2 as $kel) {
    $arrayKelurahan2[] = '{
			      "diksi":"' . $kel['ft'] . '"
		
	}';
  } ?>
  const dataKelurahan2 = [<?= implode(',', $arrayKelurahan2); ?>];

  <?php
  foreach ($kelurahan3 as $kel) {
    $arrayKelurahan3[] = '{
			      "diksi":"' . $kel['ft'] . '"
		
	}';
  } ?>
  const dataKelurahan3 = [<?= implode(',', $arrayKelurahan3); ?>];

  <?php
  foreach ($kelurahan4 as $kel) {
    $arrayKelurahan4[] = '{
			      "diksi":"' . $kel['ft'] . '"
		
	}';
  } ?>
  const dataKelurahan4 = [<?= implode(',', $arrayKelurahan4); ?>];

  <?php
  foreach ($kelurahan5 as $kel) {
    $arrayKelurahan5[] = '{
			      "diksi":"' . $kel['ft'] . '"
		
	}';
  } ?>
  const dataKelurahan5 = [<?= implode(',', $arrayKelurahan5); ?>];

  <?php
  foreach ($kelurahan6 as $kel) {
    $arrayKelurahan6[] = '{
			      "diksi":"' . $kel['ft'] . '"
		
	}';
  } ?>
  const dataKelurahan6 = [<?= implode(',', $arrayKelurahan6); ?>];

  <?php
  foreach ($kelurahan7 as $kel) {
    $arrayKelurahan7[] = '{
			      "diksi":"' . $kel['ft'] . '"
		
	}';
  } ?>
  const dataKelurahan7 = [<?= implode(',', $arrayKelurahan7); ?>];

  <?php
  foreach ($kelurahan8 as $kel) {
    $arrayKelurahan8[] = '{
			      "diksi":"' . $kel['ft'] . '"
		
	}';
  } ?>
  const dataKelurahan8 = [<?= implode(',', $arrayKelurahan8); ?>];

  <?php
  foreach ($kelurahan9 as $kel) {
    $arrayKelurahan9[] = '{
			      "diksi":"' . $kel['ft'] . '"
		
	}';
  } ?>
  const dataKelurahan9 = [<?= implode(',', $arrayKelurahan9); ?>];


  const kelMap = L.map('mapKelurahan').setView([-0.027241, 109.341850], 12);

  const tilesKelurahan = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  });

  kelMap.addLayer(tilesKelurahan);

  function iconByName(name) {
    return '<i class="icon" style="background-color:' + name + ';border-radius:50%"></i>';
  }

  function getColorKelurahan(Kelurahan) {
    for (i in dataKelurahan) {

      if (dataKelurahan[i].kelurahan.toUpperCase() == Kelurahan) {
        return dataKelurahan[i].warna;
      }
    }
  }

  function popUp(f, l) {
    let htmlKelurahan = '';

    htmlKelurahan += '<table>';
    htmlKelurahan += '<tr>';
    htmlKelurahan += '<td>Kelurahan</td>';
    htmlKelurahan += '<td>:</td>';
    htmlKelurahan += '<td>' + dataKelurahan[i].kelurahan + '</td>';
    htmlKelurahan += '</tr>';
    htmlKelurahan += '<tr>';
    htmlKelurahan += '<td>Periode ' + dataKelurahan[i].periode_sekarang + '</td>';
    htmlKelurahan += '<td>:</td>';
    htmlKelurahan += '<td>' + dataKelurahan[i].jumlah_sekarang + '</td>';
    htmlKelurahan += '</tr>';
    htmlKelurahan += '<tr>';
    htmlKelurahan += '<td>Prediksi ' + dataKelurahan[i].periode + '</td>';
    htmlKelurahan += '<td>:</td>';
    htmlKelurahan += '<td>' + dataKelurahan[i].diksi + '</td>';
    htmlKelurahan += '</tr>';
    htmlKelurahan += '<tr>';
    htmlKelurahan += '<td>Prediksi (0.2) ' + dataKelurahan[i].periode + '</td>';
    htmlKelurahan += '<td>:</td>';
    htmlKelurahan += '<td>' + dataKelurahan2[i].diksi + '</td>';
    htmlKelurahan += '</tr>';
    htmlKelurahan += '<tr>';
    htmlKelurahan += '<td>Prediksi (0.3) ' + dataKelurahan[i].periode + '</td>';
    htmlKelurahan += '<td>:</td>';
    htmlKelurahan += '<td>' + dataKelurahan3[i].diksi + '</td>';
    htmlKelurahan += '</tr>';
    htmlKelurahan += '<tr>';
    htmlKelurahan += '<td>Prediksi (0.4) ' + dataKelurahan[i].periode + '</td>';
    htmlKelurahan += '<td>:</td>';
    htmlKelurahan += '<td>' + dataKelurahan4[i].diksi + '</td>';
    htmlKelurahan += '</tr>';
    htmlKelurahan += '<tr>';
    htmlKelurahan += '<td>Prediksi (0.5) ' + dataKelurahan[i].periode + '</td>';
    htmlKelurahan += '<td>:</td>';
    htmlKelurahan += '<td>' + dataKelurahan5[i].diksi + '</td>';
    htmlKelurahan += '</tr>';
    htmlKelurahan += '<tr>';
    htmlKelurahan += '<td>Prediksi (0.6) ' + dataKelurahan[i].periode + '</td>';
    htmlKelurahan += '<td>:</td>';
    htmlKelurahan += '<td>' + dataKelurahan6[i].diksi + '</td>';
    htmlKelurahan += '</tr>';
    htmlKelurahan += '<tr>';
    htmlKelurahan += '<td>Prediksi (0.7) ' + dataKelurahan[i].periode + '</td>';
    htmlKelurahan += '<td>:</td>';
    htmlKelurahan += '<td>' + dataKelurahan7[i].diksi + '</td>';
    htmlKelurahan += '</tr>';
    htmlKelurahan += '<tr>';
    htmlKelurahan += '<td>Prediksi (0.8) ' + dataKelurahan[i].periode + '</td>';
    htmlKelurahan += '<td>:</td>';
    htmlKelurahan += '<td>' + dataKelurahan8[i].diksi + '</td>';
    htmlKelurahan += '</tr>';
    htmlKelurahan += '<tr>';
    htmlKelurahan += '<td>Prediksi (0.9) ' + dataKelurahan[i].periode + '</td>';
    htmlKelurahan += '<td>:</td>';
    htmlKelurahan += '<td>' + dataKelurahan9[i].diksi + '</td>';
    htmlKelurahan += '</tr>';
    htmlKelurahan += '</table>';
    htmlKelurahan += '<div class="text-center mt-3">';
    htmlKelurahan += '<a href="<?= site_url('prediksi-kelurahan?cari=') ?>' + dataKelurahan[i].id + '" target="_BLANK">Lihat Tabel</a>';
    htmlKelurahan += '</div>';

    l.bindPopup(htmlKelurahan);

  }

  for (i in dataKelurahan) {
    let layer = {
      name: dataKelurahan[i].kelurahan,
      icon: iconByName(dataKelurahan[i].warna),
      layer: new L.GeoJSON.AJAX(["<?= base_url('assets/geojson/kelurahan/') ?>" + dataKelurahan[i].geojson], {
        onEachFeature: popUp,
        style: function(feature) {
          let Kelurahan = feature.properties.DESA;
          return {
            "color": getColorKelurahan(Kelurahan),
            "weight": 1,
            "opacity": 1
          }

        },
      }).addTo(kelMap)
    }
  }
</script>