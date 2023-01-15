<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <title><?= $title ?> | SIMAP - Sistem Informasi Mapping </title>
  <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/src/assets/img/favicon.ico" />
  <!-- ENABLE LOADERS -->
  <link href="<?= base_url() ?>assets/layouts/modern-light-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/layouts/modern-light-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
  <script src="<?= base_url() ?>assets/layouts/modern-light-menu/loader.js"></script>
  <!-- /ENABLE LOADERS -->
  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link href="<?= base_url() ?>assets/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/layouts/modern-light-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/layouts/modern-light-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
  <!-- END GLOBAL MANDATORY STYLES -->

  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/src/plugins/src/table/datatable/datatables.css">

  <link href="<?= base_url() ?>assets/src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>assets/src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/src/plugins/css/light/table/datatable/dt-global_style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/src/plugins/css/dark/table/datatable/dt-global_style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/src/assets/css/light/elements/alert.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/src/assets/css/dark/elements/alert.css">
  <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

  <style>
    .widget-content-area-dt {
      padding: 20px;
      position: relative;
      background-color: #fff;
      border-bottom-left-radius: 8px;
      border-bottom-right-radius: 8px;
      border: 1px solid #e0e6ed;
      border-top: none;
    }
  </style>

</head>

<body class="layout-boxed">

  <!-- BEGIN LOADER -->
  <div id="load_screen">
    <div class="loader">
      <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
      </div>
    </div>
  </div>
  <!--  END LOADER -->

  <!--  BEGIN NAVBAR  -->
  <div class="header-container container-xxl">
    <header class="header navbar navbar-expand-sm expand-header">

      <a href="javascript:void(0);" class="nav-link theme-toggle p-0">

      </a>

      <a href="javascript:void(0);" class="sidebarCollapse">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
          <line x1="3" y1="12" x2="21" y2="12"></line>
          <line x1="3" y1="6" x2="21" y2="6"></line>
          <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
      </a>

      <ul class="navbar-item flex-row ms-lg-auto ms-0">

        <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
          <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar-container">
              <div class="avatar avatar-sm avatar-indicators avatar-online">
                <img alt="avatar" src="<?= base_url() ?>assets/users/<?= $user->image ?>" class="rounded-circle">
              </div>
            </div>
          </a>

          <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
            <div class="user-profile-section">
              <div class="media mx-auto">
                <img src="<?= base_url() ?>assets/users/<?= $user->image ?>" class="img-fluid me-2" alt="avatar">
                <div class="media-body">
                  <h5><?= $user->name ?></h5>
                  <p><?= $user->level_user ?></p>
                </div>
              </div>
            </div>
            <div class="dropdown-item">
              <a href="<?= site_url() ?>profil">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg> <span>Profile</span>
              </a>
            </div>
            <div class="dropdown-item">
              <a href="<?= site_url('logout') ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                  <polyline points="16 17 21 12 16 7"></polyline>
                  <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg> <span>Log Out</span>
              </a>
            </div>
          </div>

        </li>
      </ul>
    </header>
  </div>
  <!--  END NAVBAR  -->

  <!--  BEGIN MAIN CONTAINER  -->
  <div class="main-container " id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

      <nav id="sidebar">

        <div class="navbar-nav theme-brand flex-row  text-center">
          <div class="nav-logo">
            <div class="nav-item theme-logo">
              <a href="index.html">
                <!-- <img src="<?= base_url() ?>assets/src/assets/img/logo.svg" class="navbar-logo" alt="logo"> -->
              </a>
            </div>
            <div class="nav-item theme-text">
              <a href="index.html" class="nav-link"> SIMAP </a>
            </div>
          </div>
          <div class="nav-item sidebar-toggle">
            <div class="btn-toggle sidebarCollapse">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left">
                <polyline points="11 17 6 12 11 7"></polyline>
                <polyline points="18 17 13 12 18 7"></polyline>
              </svg>
            </div>
          </div>
        </div>

        <ul class="list-unstyled menu-categories" id="accordionExample">

          <li class="menu <?= $this->uri->segment(1) == 'dashboard' ? 'active' : ''; ?>">
            <a href="<?= site_url('dashboard') ?>" aria-expanded="false" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                <span>Dashboard</span>
              </div>
            </a>
          </li>

          <?php if ($this->session->userdata('level_user') == 'Admin') : ?>

            <li class="menu menu-heading">
              <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg><span>KELOLA DATA</span></div>
            </li>

            <li class="menu <?= $this->uri->segment(1) == 'kecamatan' ? 'active' : ''; ?>">
              <a href="<?= site_url('kecamatan') ?>" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-columns">
                    <path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path>
                  </svg>
                  <span>Kecamatan</span>
                </div>
              </a>
            </li>

            <li class="menu <?= $this->uri->segment(1) == 'kelurahan' ? 'active' : ''; ?>">
              <a href="<?= site_url('kelurahan') ?>" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor">
                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                    <line x1="8" y1="21" x2="16" y2="21"></line>
                    <line x1="12" y1="17" x2="12" y2="21"></line>
                  </svg>
                  <span>Kelurahan</span>
                </div>
              </a>
            </li>

            <li class="menu <?= $this->uri->segment(1) == 'user' ? 'active' : ''; ?>">
              <a href="<?= site_url('user') ?>" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor">
                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                    <line x1="8" y1="21" x2="16" y2="21"></line>
                    <line x1="12" y1="17" x2="12" y2="21"></line>
                  </svg>
                  <span>User</span>
                </div>
              </a>
            </li>

            <li class="menu">
              <a href="#prediksi" data-bs-toggle="collapse" aria-expanded="<?= $this->uri->segment(1) == 'prediksi-kecamatan' || $this->uri->segment(1) == 'prediksi-kelurahan' ? 'true' : 'false'; ?>" class="dropdown-toggle">
                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                  </svg>
                  <span>Prediksi</span>
                </div>
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                    <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
                </div>
              </a>
              <ul class="collapse submenu list-unstyled <?= $this->uri->segment(1) == 'prediksi-kecamatan' || $this->uri->segment(1) == 'prediksi-kelurahan' ? 'show' : ''; ?>" id="prediksi" data-bs-parent="#accordionExample">
                <li class="<?= $this->uri->segment(1) == 'prediksi-kecamatan' ? 'active' : ''; ?>">
                  <a href="<?= site_url('prediksi-kecamatan') ?>"> Kecamatan </a>
                </li>
                <li class="<?= $this->uri->segment(1) == 'prediksi-kelurahan' ? 'active' : ''; ?>">
                  <a href="<?= site_url('prediksi-kelurahan') ?>"> Kelurahan </a>
                </li>
              </ul>
            </li>

          <?php else : ?>

            <li class="menu menu-heading">
              <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg><span>KELOLA DATA</span></div>
            </li>

            <li class="menu <?= $this->uri->segment(1) == 'pkh' ? 'active' : ''; ?>">
              <a href="<?= site_url('pkh') ?>" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor">
                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                    <line x1="8" y1="21" x2="16" y2="21"></line>
                    <line x1="12" y1="17" x2="12" y2="21"></line>
                  </svg>
                  <span>Jumlah PKH</span>
                </div>
              </a>
            </li>

            <li class="menu">
              <a href="#prediksi" data-bs-toggle="collapse" aria-expanded="<?= $this->uri->segment(1) == 'prediksi-kecamatan' || $this->uri->segment(1) == 'prediksi-kelurahan' ? 'true' : 'false'; ?>" class="dropdown-toggle">
                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                  </svg>
                  <span>Prediksi</span>
                </div>
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                    <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
                </div>
              </a>
              <ul class="collapse submenu list-unstyled <?= $this->uri->segment(1) == 'prediksi-kecamatan' || $this->uri->segment(1) == 'prediksi-kelurahan' ? 'show' : ''; ?>" id="prediksi" data-bs-parent="#accordionExample">
                <li class="<?= $this->uri->segment(1) == 'prediksi-kecamatan' ? 'active' : ''; ?>">
                  <a href="<?= site_url('prediksi-kecamatan') ?>"> Kecamatan </a>
                </li>
                <li class="<?= $this->uri->segment(1) == 'prediksi-kelurahan' ? 'active' : ''; ?>">
                  <a href="<?= site_url('prediksi-kelurahan') ?>"> Kelurahan </a>
                </li>
              </ul>
            </li>

          <?php endif; ?>





        </ul>

      </nav>

    </div>
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
      <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

          <?= $contents ?>

        </div>

      </div>

      <div class="footer-wrapper">
        <div class="footer-section f-section-1">
          <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank" href="https://designreset.com/cork-admin/">Averno</a>, All rights reserved.</p>
        </div>
        <div class="footer-section f-section-2">
          <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
            </svg></p>
        </div>
      </div>

    </div>
    <!--  END CONTENT AREA  -->
  </div>
  <!-- END MAIN CONTAINER -->

  <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
  <script src="<?= base_url() ?>assets/src/plugins/src/global/vendors.min.js"></script>
  <script src="<?= base_url() ?>assets/src/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="<?= base_url() ?>assets/layouts/modern-light-menu/app.js"></script>

  <script src="<?= base_url() ?>assets/src/assets/js/custom.js"></script>
  <!-- END GLOBAL MANDATORY SCRIPTS -->

  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
  <script src="<?= base_url() ?>assets/src/leaflet/leaflet.ajax.js"></script>

  <script src="<?= base_url() ?>assets/src/plugins/src/table/datatable/datatables.js"></script>
  <script>
    $('#zero-config').DataTable({
      "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
      "oLanguage": {
        "oPaginate": {
          "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
          "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
        },
        "sInfo": "Showing page _PAGE_ of _PAGES_",
        "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
        "sSearchPlaceholder": "Search...",
        "sLengthMenu": "Results :  _MENU_",
      },
      "stripeClasses": [],
      "lengthMenu": [7, 10, 20, 50],
      "pageLength": 10
    });
  </script>

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

  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>

</html>