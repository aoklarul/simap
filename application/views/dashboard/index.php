<!-- BREADCRUMB -->
<div class="page-meta">
  <nav class="breadcrumb-style-one" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><?= $title ?></a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $page_title ?></li>
    </ol>
  </nav>
</div>
<!-- /BREADCRUMB -->

<div class="row mt-4">
  <div id="card_3" class="col-xxl-6 col-xl-6 col-lg-6  col-md-6 layout-spacing">
    <div class="statbox widget box box-shadow">
      <div class="widget-content ">

        <div class="row">

          <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12 col-sm-8 mx-auto">

            <div class="card">
              <div class="card-body pt-3">
                <h5 class="card-title mb-3">Grafik Prediksi Kecamatan</h5>
                <p class="card-text">Menampikan informasi prediksi berdasarkan Kecamatan dalam bentuk grafik.</p>
              </div>
              <div class="card-footer px-4 pt-0 border-0">
                <a href="<?php site_url() ?>dashboard/grafik-kecamatan">Lihat Grafik </a>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>
  </div>

  <div id="card_3" class="col-xxl-6 col-xl-6 col-lg-6  col-md-6 layout-spacing">
    <div class="statbox widget box box-shadow">
      <div class="widget-content ">

        <div class="row">

          <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12 col-sm-8 mx-auto">

            <div class="card">
              <div class="card-body pt-3">
                <h5 class="card-title mb-3">Grafik Prediksi Kelurahan</h5>
                <p class="card-text">Menampikan informasi prediksi berdasarkan Kelurahan dalam bentuk grafik.</p>
              </div>
              <div class="card-footer px-4 pt-0 border-0">
                <a href="<?php site_url() ?>dashboard/grafik-kelurahan">Lihat Grafik </a>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>
  </div>
</div>

<!-- CONTENT AREA -->
<div class="row layout-top-spacing">

  <div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">

      <div class="widget-header">
        <div class="row">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12">
            <h4><?= $page_title ?> Kecamatan</h4>
          </div>
        </div>
      </div>

      <div class="widget-content widget-content-area-dt">

        <div id="mapKecamatan" style="height: 400px;"></div>
      </div>

    </div>
  </div>

  <div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">

      <div class="widget-header">
        <div class="row">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12">
            <h4><?= $page_title ?> Kelurahan</h4>
          </div>
        </div>
      </div>

      <div class="widget-content widget-content-area-dt">

        <div id="mapKelurahan" style="height: 400px;"></div>
      </div>

    </div>
  </div>

</div>
<!-- CONTENT AREA -->