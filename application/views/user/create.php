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
              <input type="text" class="form-control <?= form_error('name') ? 'is-invalid' : '' ?>" id="name" name="name" value="<?= set_value('name') ?>" placeholder="Nama">
              <?= form_error('name', '<div class="invalid-feedback">', '</div>'); ?>
            </div>

            <div class="form-group mb-4">
              <label for="username">Username</label>
              <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : '' ?>" id="username" name="username" value="<?= set_value('username') ?>" placeholder="Username">
              <?= form_error('username', '<div class="invalid-feedback">', '</div>'); ?>
            </div>

            <div class="form-group mb-4">
              <label for="password">Password</label>
              <input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : '' ?>" id="password" name="password" value="<?= set_value('password') ?>" placeholder="Password">
              <?= form_error('password', '<div class="invalid-feedback">', '</div>'); ?>
            </div>

            <div class="form-group mb-4">
              <label for="email">Email</label>
              <input type="email" class="form-control <?= form_error('email') ? 'is-invalid' : '' ?>" id="email" name="email" value="<?= set_value('email') ?>" placeholder="Email">
              <?= form_error('email', '<div class="invalid-feedback">', '</div>'); ?>
            </div>


            <a href="<?= site_url('user') ?>" type="button" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- CONTENT AREA -->