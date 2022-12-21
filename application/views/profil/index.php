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

      <div class="widget-header">
        <div class="row">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12">
            <h4>Form <?= $page_title ?></h4>
          </div>
        </div>
      </div>

      <div class="widget-content widget-content-area-dt">

        <div class="col-12 mx-auto">
          <div class="row">
            <div class="col-sm-6">
              <div class="row">
                <div class="col-sm-12 mx-auto">
                  <div class="text-center">
                    <img class="img-responsive img-thumbnail mb-3" src="<?= base_url('assets/users/') . $user->image; ?>" width="200px">
                    <h5><?= $user->name; ?></h5>
                    <h6><?= $user->level_user; ?></h6>

                    <div class="col-sm-6 mx-auto">
                      <a href="<?= site_url('profil/edit') ?>" type="button" class="btn btn-block btn-primary">Ubah Profil</a>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6">

              <?php if ($this->session->flashdata('pesan')) { ?>
                <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                  <?= $this->session->flashdata('pesan'); ?>
                </div>
              <?php } ?>

              <div class="row">
                <div class="col-sm-10 offset-sm-1">


                  <form class="row g-3" action="<?= site_url('profil/edit-password'); ?>" method="POST">
                    <div class="col-md-12">
                      <label for="currentPassword" class="form-label">Password Saat Ini</label>
                      <input type="password" class="form-control <?= form_error('currentPassword') ? 'is-invalid' : '' ?>" id="currentPassword" name="currentPassword" placeholder="Password Saat Ini">
                      <?= form_error('currentPassword', '<div class="invalid-feedback">', '</div>'); ?>
                    </div>

                    <div class="col-md-12">
                      <label for="newPassword" class="form-label">Password Baru</label>
                      <div>
                        <input type="password" class="form-control <?= form_error('newPassword') ? 'is-invalid' : '' ?>" id="newPassword" name="newPassword" placeholder="Password Baru">
                        <?= form_error('newPassword', '<div class="invalid-feedback">', '</div>'); ?>
                      </div>
                      <div class="mt-1">
                        <input type="password" class="form-control <?= form_error('confirmPassword') ? 'is-invalid' : '' ?>" id="confirmPassword" name="confirmPassword" placeholder="Ulangi Password Baru">
                        <?= form_error('confirmPassword', '<div class="invalid-feedback">', '</div>'); ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- CONTENT AREA -->