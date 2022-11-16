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

        <?php if ($this->session->flashdata('error')) : ?>
          <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
              </svg>
            </button>
            <?= $this->session->flashdata('error') ?>
          </div>
        <?php endif; ?>

        <div class="col-lg-6 col-md-6">
          <form action="" method="POST">

            <div class="form-group mb-4">
              <label for="idKelurahan">Kelurahan</label>
              <select class="form-select <?= form_error('idKelurahan') ? 'is-invalid' : '' ?>" id="idKelurahan" name="idKelurahan">
                <option selected disabled>--Pilih Kelurahan--</option>
                <?php foreach ($kelurahan as $row) : ?>
                  <option value="<?= $row->id ?>" <?= set_value('idKelurahan') == $row->id ? 'selected' : '' ?>><?= $row->kelurahan ?></option>
                <?php endforeach; ?>
              </select>
              <?= form_error('idKelurahan', '<div class="invalid-feedback">', '</div>'); ?>
            </div>

            <div class="form-group mb-4">
              <label for="bulan">Bulan</label>
              <select class="form-select <?= form_error('bulan') ? 'is-invalid' : '' ?>" id="bulan" name="bulan">
                <option selected disabled>--Pilih Bulan--</option>
                <?php foreach ($bulan as $row) : ?>
                  <option value="<?= $row['id'] ?>" <?= set_value('bulan') == $row['id'] ? 'selected' : '' ?>><?= $row['month'] ?></option>
                <?php endforeach; ?>
              </select>
              <?= form_error('bulan', '<div class="invalid-feedback">', '</div>'); ?>
            </div>

            <div class="form-group mb-4">
              <label for="tahun">Tahun</label>
              <select class="form-select <?= form_error('tahun') ? 'is-invalid' : '' ?>" id="tahun" name="tahun">
                <option selected disabled>--Pilih Tahun--</option>
                <?php for ($y = date('Y'); $y >= 2010; $y--) : ?>
                  <?php if ($y == set_value('tahun')) : ?>
                    <option value="<?= $y; ?>" selected><?= $y; ?></option>
                  <?php else : ?>
                    <option value="<?= $y; ?>"><?= $y; ?></option>
                  <?php endif; ?>
                <?php endfor; ?>
              </select>
              <?= form_error('tahun', '<div class="invalid-feedback">', '</div>'); ?>
            </div>

            <div class="form-group mb-4">
              <label for="jumlah">Jumlah PKH</label>
              <input type="text" class="form-control <?= form_error('jumlah') ? 'is-invalid' : '' ?>" id="jumlah" name="jumlah" value="<?= set_value('jumlah') ?>" placeholder="Jumlah PKH">
              <?= form_error('jumlah', '<div class="invalid-feedback">', '</div>'); ?>
            </div>

            <a href="<?= site_url('pkh') ?>" type="button" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- CONTENT AREA -->