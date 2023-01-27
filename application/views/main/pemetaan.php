<script>
  <?php

  foreach ($kecamatan as $kec) {
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
    htmlKecamatan += '<td>Prediksi ' + dataKecamatan[i].periode + '</td>';
    htmlKecamatan += '<td>:</td>';
    htmlKecamatan += '<td>' + dataKecamatan[i].diksi + '</td>';
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

  foreach ($kelurahan as $kel) {
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