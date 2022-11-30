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