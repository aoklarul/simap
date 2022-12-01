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
            <h4>Form <?= $page_title ?></h4>
          </div>
        </div>
      </div>

      <div class="widget-content widget-content-area-dt">

        <div class="col-lg-6 col-md-6">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-4">
              <label for="nama">Kelurahan</label>
              <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : '' ?>" id="nama" name="nama" value="<?= $kelurahan->kelurahan ?>" disabled>
              <?= form_error('nama', '<div class="invalid-feedback">', '</div>'); ?>
            </div>
            <div class="form-group mb-4">
              <label for="idKecamatan">Kecamatan</label>
              <select class="form-select <?= form_error('idKecamatan') ? 'is-invalid' : '' ?>" id="idKecamatan" name="idKecamatan">
                <?php foreach ($kecamatan as $row) : ?>
                  <?php if ($row->id == $kelurahan->idKecamatan) : ?>
                    <option value="<?= $row->id ?>" selected><?= $row->nama ?></option>
                  <?php else : ?>
                    <option value="<?= $row->id ?>"><?= $row->nama ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
              <?= form_error('idKecamatan', '<div class="invalid-feedback">', '</div>'); ?>
            </div>
            <div class="form-group mb-4">
              <label for="geojson">Geojson</label>
              <p>
                <a href="<?= base_url('assets/geojson/kelurahan/') . $kelurahan->geojson ?>" target="_blank">
                  <?= $kelurahan->geojson ?>
                </a>
              </p>
              <input type="file" class="form-control file-upload-input <?= form_error('geojson') ? 'is-invalid' : '' ?>" id="geojson" name="geojson">
              <?= form_error('geojson', '<div class="invalid-feedback">', '</div>'); ?>
            </div>
            <div class="form-group mb-4">
              <label for="warna">Warna</label>
              <input type="color" class="form-control file-upload-input <?= form_error('warna') ? 'is-invalid' : '' ?>" id="warna" name="warna" value="<?= $kelurahan->warna ?>">
              <?= form_error('warna', '<div class="invalid-feedback">', '</div>'); ?>
            </div>
            <a href="<?= site_url('kelurahan') ?>" type="button" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- CONTENT AREA -->