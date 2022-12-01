<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <title><?= $title ?> </title>
  <link rel="icon" type="image/x-icon" href="<?php base_url() ?>assets/src/assets/img/favicon.ico" />
  <link href="<?php base_url() ?>assets/layouts/modern-light-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
  <link href="<?php base_url() ?>assets/layouts/modern-light-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
  <script src="<?php base_url() ?>assets/layouts/modern-light-menu/loader.js"></script>
  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link href="<?php base_url() ?>assets/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <link href="<?php base_url() ?>assets/layouts/modern-light-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
  <link href="<?php base_url() ?>assets/src/assets/css/light/authentication/auth-boxed.css" rel="stylesheet" type="text/css" />

  <link href="<?php base_url() ?>assets/layouts/modern-light-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
  <link href="<?php base_url() ?>assets/src/assets/css/dark/authentication/auth-boxed.css" rel="stylesheet" type="text/css" />
  <!-- END GLOBAL MANDATORY STYLES -->

</head>

<body class="form">

  <!-- BEGIN LOADER -->
  <div id="load_screen">
    <div class="loader">
      <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
      </div>
    </div>
  </div>
  <!--  END LOADER -->

  <div class="auth-container d-flex">

    <div class="container mx-auto align-self-center">

      <div class="row">

        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
          <div class="card mt-3 mb-3">
            <div class="card-body">

              <div class="row">
                <div class="col-md-12 mb-3">

                  <h2>Login</h2>
                  <p>Masukkan username dan password untuk masuk kedalam sistem.</p>

                </div>
                <?php if ($this->session->flashdata('message')) : ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('message'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php endif; ?>
                <form action="<?= site_url('login') ?>" method="post">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="form-label">Username</label>
                      <input type="username" name="username" class="form-control <?= form_error('username') ? 'is-invalid' : '' ?>">
                      <?= form_error('username', '<div class="invalid-feedback">', '</div>'); ?>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-4">
                      <label class="form-label">Password</label>
                      <input type="password" name="password" class="form-control <?= form_error('password') ? 'is-invalid' : '' ?>">
                      <?= form_error('password', '<div class="invalid-feedback">', '</div>'); ?>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="mb-4">
                      <button type="submit" class="btn btn-secondary w-100">LOGIN</button>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
  <script src="<?php base_url() ?>assets/src/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- END GLOBAL MANDATORY SCRIPTS -->


</body>

</html>