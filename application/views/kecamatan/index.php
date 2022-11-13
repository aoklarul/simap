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

  <div class="action-btn mb-3">
    <a href="<?= site_url('kecamatan/create') ?>" type="button" class="btn btn-secondary">
      <span class="btn-text-inner">Tambah Data</span>
    </a>
  </div>

  <?php if ($this->session->flashdata('message')) : ?>
    <div class="alert alert-icon-left alert-light-success alert-dismissible fade show mb-4" role="alert">
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
        <polyline points="20 6 9 17 4 12"></polyline>
      </svg>
      <?= $this->session->flashdata('message') ?>
    </div>
  <?php endif; ?>

  <div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
      <div class="widget-content widget-content-area">

        <table class="table dt-table-hover" id="zero-config" style="width:100%">
          <thead>
            <tr>
              <th class="text-center" scope="col">No</th>
              <th scope="col">Kecamatan</th>
              <th scope="col">Geojson</th>
              <th class="text-center dt-no-sorting" scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($kecamatan as $row) :
            ?>
              <tr>
                <td class="text-center"><?= $no ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->geojson ?></td>
                <td class="text-center">
                  <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="19" cy="12" r="1"></circle>
                        <circle cx="5" cy="12" r="1"></circle>
                      </svg>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                      <a class="dropdown-item" href="javascript:void(0);">Ubah Data</a>
                      <a class="dropdown-item" href="javascript:void(0);">Hapus Data</a>
                    </div>
                  </div>
                </td>
              </tr>
            <?php
              $no++;
            endforeach;
            ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>

</div>
<!-- CONTENT AREA -->