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
    <a href="<?= site_url('user/create') ?>" type="button" class="btn btn-secondary">
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
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Status</th>
              <th scope="col">Role</th>
              <th class="text-center dt-no-sorting" scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($users as $row) :

              if ($row->level_user == 'Pengawas') :
            ?>
                <tr>
                  <td class="text-center"><?= $no ?></td>
                  <td><?= $row->name ?></td>
                  <td><?= $row->email ?></td>
                  <td>
                    <?php if ($row->status == 'Aktif') : ?>
                      <span class="badge badge-success"><?= $row->status ?></span>
                    <?php else : ?>
                      <span class="badge badge-danger"><?= $row->status ?></span>
                    <?php endif; ?>

                  </td>
                  <td><?= $row->level_user ?></td>
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
                        <?php if ($row->status == 'Aktif') : ?>
                          <a class="dropdown-item" href="<?= site_url('user/nonaktif/') . $row->id ?>">Nonaktifkan Akun</a>
                        <?php else : ?>
                          <a class="dropdown-item" href="<?= site_url('user/aktif/') . $row->id ?>">Aktifkan Akun</a>
                        <?php endif; ?>
                        <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#btn-delete<?= $row->id ?>">Hapus Data</a>
                        <a class="dropdown-item" href="<?= site_url('user/reset/') . $row->id ?>">Reset Password</a>
                      </div>
                    </div>
                  </td>
                </tr>
            <?php
                $no++;
              endif;
            endforeach;
            ?>
          </tbody>
        </table>

        <!-- Modal -->
        <?php foreach ($users as $row) : ?>
          <div class="modal fade" id="btn-delete<?= $row->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Konfirmasi Hapus Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                      <line x1="18" y1="6" x2="6" y2="18"></line>
                      <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                  </button>
                </div>
                <div class="modal-body">
                  <p class="modal-text">Apakah anda yakin ingin menghapus data?</p>
                </div>
                <div class="modal-footer">
                  <a type="button" class="btn btn-light-dark" data-bs-dismiss="modal">Tidak</a>
                  <a type="button" class="btn btn-primary" href="<?= site_url('user/delete/') . $row->id ?>">Hapus Data</a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>

</div>
<!-- CONTENT AREA -->