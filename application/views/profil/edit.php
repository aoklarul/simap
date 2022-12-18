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
              <label for="name">Nama</label>
              <input type="text" class="form-control <?= form_error('name') ? 'is-invalid' : '' ?>" id="name" name="name" value="<?= $user->name ?>">
              <?= form_error('name', '<div class="invalid-feedback">', '</div>'); ?>
            </div>
            <div class="form-group mb-4">
              <label for="username">Username</label>
              <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : '' ?>" id="username" name="username" value="<?= $user->username ?>" disabled>
              <?= form_error('username', '<div class="invalid-feedback">', '</div>'); ?>
            </div>
            <div class="form-group mb-4">
              <label for="email">Email</label>
              <input type="text" class="form-control <?= form_error('email') ? 'is-invalid' : '' ?>" id="email" name="email" value="<?= $user->email ?>">
              <?= form_error('email', '<div class="invalid-feedback">', '</div>'); ?>
            </div>
            <div class="form-group mb-4">
              <label for="image">Foto</label>
              <div class="col-sm-4">
                <img src="<?= base_url('assets/users/') . $user->image; ?>" class="img-thumbnail mb-1">
              </div>
              <input type="file" class="form-control file-upload-input <?= form_error('image') ? 'is-invalid' : '' ?>" id="image" name="image">
              <?= form_error('image', '<div class="invalid-feedback">', '</div>'); ?>
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