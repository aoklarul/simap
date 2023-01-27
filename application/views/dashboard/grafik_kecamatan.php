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
<div class="action-btn mt-3 col-6">
  <form action="" method="GET">
    <div class="input-group">
      <select class="form-select" name="cari">
        <option selected disabled>--Pilih Kecamatan--</option>
        <?php foreach ($kecamatan as $row) : ?>
          <?php if ($row->id == $this->input->get('cari')) : ?>
            <option value="<?= $row->id ?>" selected><?= $row->nama ?></option>
          <?php else : ?>
            <option value="<?= $row->id ?>"><?= $row->nama ?></option>
          <?php endif; ?>
        <?php endforeach; ?>
      </select>
      <button class="btn btn-outline-primary" type="submit">Pilih</button>
    </div>
  </form>
</div>
<!-- CONTENT AREA -->
<div class="row layout-top-spacing">

  <div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">

      <div class="widget-header">
        <div class="row">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12">
            <h4>Konstanta = 0.1</h4>
          </div>
        </div>
      </div>

      <div class="widget-content widget-content-area-dt">

        <canvas id="kons1" style="height:40vh; width:80vw"></canvas>
      </div>

    </div>
  </div>

  <div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">

      <div class="widget-header">
        <div class="row">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12">
            <h4>Konstanta = 0.2</h4>
          </div>
        </div>
      </div>

      <div class="widget-content widget-content-area-dt">

        <canvas id="kons2" style="height:40vh; width:80vw"></canvas>
      </div>

    </div>
  </div>

  <div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">

      <div class="widget-header">
        <div class="row">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12">
            <h4>Konstanta = 0.3</h4>
          </div>
        </div>
      </div>

      <div class="widget-content widget-content-area-dt">

        <canvas id="kons3" style="height:40vh; width:80vw"></canvas>
      </div>

    </div>
  </div>

  <div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">

      <div class="widget-header">
        <div class="row">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12">
            <h4>Konstanta = 0.4</h4>
          </div>
        </div>
      </div>

      <div class="widget-content widget-content-area-dt">

        <canvas id="kons4" style="height:40vh; width:80vw"></canvas>
      </div>

    </div>
  </div>

  <div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">

      <div class="widget-header">
        <div class="row">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12">
            <h4>Konstanta = 0.5</h4>
          </div>
        </div>
      </div>

      <div class="widget-content widget-content-area-dt">

        <canvas id="kons5" style="height:40vh; width:80vw"></canvas>
      </div>

    </div>
  </div>

  <div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">

      <div class="widget-header">
        <div class="row">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12">
            <h4>Konstanta = 0.6</h4>
          </div>
        </div>
      </div>

      <div class="widget-content widget-content-area-dt">

        <canvas id="kons6" style="height:40vh; width:80vw"></canvas>
      </div>

    </div>
  </div>

  <div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">

      <div class="widget-header">
        <div class="row">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12">
            <h4>Konstanta = 0.7</h4>
          </div>
        </div>
      </div>

      <div class="widget-content widget-content-area-dt">

        <canvas id="kons7" style="height:40vh; width:80vw"></canvas>
      </div>

    </div>
  </div>

  <div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">

      <div class="widget-header">
        <div class="row">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12">
            <h4>Konstanta = 0.8</h4>
          </div>
        </div>
      </div>

      <div class="widget-content widget-content-area-dt">

        <canvas id="kons8" style="height:40vh; width:80vw"></canvas>
      </div>

    </div>
  </div>

  <div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">

      <div class="widget-header">
        <div class="row">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12">
            <h4>Konstanta = 0.9</h4>
          </div>
        </div>
      </div>

      <div class="widget-content widget-content-area-dt">

        <canvas id="kons9" style="height:40vh; width:80vw"></canvas>
      </div>

    </div>
  </div>


</div>
<!-- CONTENT AREA -->